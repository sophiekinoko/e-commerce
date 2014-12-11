<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Product extends Controller {


/////////////////////////////////////////////////////////////////


	public function before() {
        parent::before();
        session_start();
    }


/////////////////////////////////////////////////////////////////


	public function action_view()
	{
        $product = new Model_Product();
        $view = View::factory("view");

        $view->imgPath = URL::base()."/assets/img/";

        $id = $this->request->param('id');
        $view->productId = $product->getProduct($id);

        $this->response->body($view);
	}

/////////////////////////////////////////////////////////////////


    public function action_addtocart()
    {
        $view = View::factory("cart");

        //$_SESSION existe toujours donc on vérifie qu'il est plein
        if(isset($_SESSION["user"]))
        {
            //on crée un champ cart au tableau si il n'y en a pas encore
            if(!isset($_SESSION["cart"]))
            {
                $_SESSION["cart"] = array();
            }
            //on va chercher le paramètre passé dans la barre de nav (à partir d'un lien  a href)
            $id = $this->request->param('id');
            $view->id = $this->request->param('id');
            //on ajoute l'id du produit passé en paramètre dans le panier virtuel

            // on ajoute la valeur 1 à mon tableau $_session le -product permet de passer le chiffre en chaine de caractère
            if(!isset($_SESSION["cart"][$id]))
            {
                $_SESSION["cart"][$id] = 1;
            }
            else
            {
                $_SESSION["cart"][$id]++;
            }

            //et on redirige vers le panier
            $this->redirect('product/cart');
        }
        else {
            $this->redirect('user/login');
        }
    }


/////////////////////////////////////////////////////////////////


    public function action_cart()
    {
        $product = new Model_Product();

        $view = View::factory("cart");

        $view->imgPath = URL::base()."/assets/img/";
        $view->listOfProducts = $product->getAllProducts();
        $view->livraison = 10;
        if(!empty($_POST))
        {
            $_SESSION['cart'] = [];
            foreach ($_POST as $key => $value)
            {
                if($value != 0)
                {
                    $_SESSION['cart'][$key] = (int)$value;
                }
            }
        }

        $this->response->body($view);
    }


/////////////////////////////////////////////////////////////////


    public function action_remove_article()
    {
        $product = new Model_Product();

        $view = View::factory("cart");

        $id = $this->request->param('id');

        $view->imgPath = URL::base()."/assets/img/";

        unset($_SESSION["cart"][$id]);
        $view->listOfProducts = $product->getAllProducts();

        $this->redirect('product/cart');
    }


/////////////////////////////////////////////////////////////////

    public function action_command()
    {
        $product = new Model_Product();
        $id = $product->nameCommand();
        foreach ($_SESSION["cart"] as $key => $value)
        {
            $address = $_POST['address'];
            $idUser = $_SESSION['user']['id'];
            $idProduct = $key;
            $quantity = $value;
            $product->setCommand($id, $idUser, $idProduct, $quantity, $address);

            //envoie un mail
            $mail = new Helper_Mail();
            $subject = "Command confirmation";
            $body = "Command confirmation";
            $address = $_SESSION['user']['email']; // Il est possible d'utiliser un tableau : array("roger@gmail.com", "bryan@yahoo.fr")
            $mail->send($address, $subject, $body);
        }
        unset($_SESSION["cart"]);
        $view = View::factory("command");
        $this->response->body($view);
    }


/////////////////////////////////////////////////////////////////

    public function action_administration()
    {
        $product = new Model_Product();

        $view = View::factory("administration");
        $view->message = "The product has been add.";
        $view->imgPath = URL::base()."/assets/img/";
        $view->products = $product->getAllProducts();

        $this->response->body($view);
    }

/////////////////////////////////////////////////////////////////

    public function action_toggle()
    {
        $product = new Model_Product();
        $id = $this->request->param('id');
        $myProduct = $product->getProduct($id);
        $visible = $myProduct["visible"];
        $visible = ($visible == 0) ? 1 : 0;
        $product->toggleProduct($visible, $id);
        $this->redirect('product/administration');
    }

/////////////////////////////////////////////////////////////////


    public function action_add()
    {
        if(isset($_SESSION["user"]) && $_SESSION["user"]["administration"] == true)
        {
            $product = new Model_Product();
            if(isset($_POST["name"]))
            {
                $name = $_POST["name"];
                $description = $_POST["description"];
                $price = $_POST["price"];
                $category = $_POST["category"];
                $img = $_POST["img"];
                $visible = $_POST["visible"];
                $product->addProduct($name, $description, $price, $category, $img, $visible);
                $_SESSION["message"] = "The product has been added.";
                $this->redirect('product/administration');
            }

            $view = View::factory("add");

            //pour le select du fomulaire:
            $view->categories = $product->getCategories();

            $this->response->body($view);
        }

        else
        {
            $this->redirect('welcome/index');
        }

    }

/////////////////////////////////////////////////////////////////



} // End Product
