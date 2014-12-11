<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function before() {
        parent::before();
        session_start();
    }

	public function action_index()
	{
        $product = new Model_Product();
        $view = View::factory("index");

        $view->imgPath = URL::base()."/assets/img/";

        function view_price($price)
        {
            $result = explode(".00", $price);
            return $result[0];
        }

        //pagination
        $numberOfProducts = $product->numberOfProducts();
        //(il faudra aussi changer le nombre dans la requete mysql)
        $productsByPage = 9;
        $view->pagination = $numberOfProducts/$productsByPage;

        $view->page = $this->request->param('page', 1);
        $page = $this->request->param('page', 1);
        $view->listOfProducts = $product->getSliceProducts($page);
        $this->response->body($view);
	}

    public function action_category()
    {
        $product = new Model_Product();
        $view = View::factory("category");

        $view->imgPath = URL::base()."/assets/img/";
        //le param('id') ne change jamais, c'est le paramètre de bootstrap tout enb bas tout en bas
        $id = $this->request->param('id');
        $view->id = $this->request->param('id');
        $view->listOfProducts = $product->getCategoryProducts($id);

        $this->response->body($view);
    }

} // End Welcome
