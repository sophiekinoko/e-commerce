<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Product extends Controller {


/////////////////////////////////////////////////////////////////

	//la fonction before permet d'éxécuter une action avant dans toutes les fonctions suivantes
	//existe auss en ::after
	public function before() {
        parent::before();
        //ici on veut toujours une session ouverte
        session_start();
    }


/////////////////////////////////////////////////////////////////

	//on créé l'action
	public function action_view()
	{
	//avec un nouveau model
        $product = new Model_Product();
        //on créé la vue
        //la vue doit être créé avant de créer les variables qui vont être utilisées dedans
        $view = View::factory("view");
	
	//on défini le chemin des images qui vont être appelées
        $view->imgPath = URL::base()."/assets/img/";
	//on récupère l'id placé en troisième paramètre ("id est défini en bad du fichier bootstrap)
        $id = $this->request->param('id');
        //on fait la requète sql
        $view->productId = $product->getProduct($id);
	//on envoie sur la view
        $this->response->body($view);
	}

/////////////////////////////////////////////////////////////////


    public function action_addtocart()
    {
        $view = View::factory("cart");

        //$_SESSION existe toujours donc on vérifie sil il comporte bien un user (connection)
        if(isset($_SESSION["user"]))
        {
            //on crée un champ cart au tableau si il n'y en a pas encore
            if(!isset($_SESSION["cart"]))
            {
            	//il s'agit d'un tableau où l'on va placer tous les éléménts nécéssaies à la commande : user et articles séléctionnés
                $_SESSION["cart"] = array();
            }
            //on va chercher le paramètre passé dans la barre de nav (à partir d'un lien a href)
            $id = $this->request->param('id');
            //pareil pour la vue
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
        	//l'utilisateur n'est pas connecté donc on revoie sur la page login
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
        //le prix de la livraison = 10
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
