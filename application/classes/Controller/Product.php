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
            $idUser = $_SESSION["user"]["id"];
            $idProduct = $key;
            $quantity = $value;
            $product->setCommand($id, $idUser, $idProduct, $quantity);
        }
        $view = View::factory("command");
        $this->response->body($view);
    }


/////////////////////////////////////////////////////////////////



} // End Product
