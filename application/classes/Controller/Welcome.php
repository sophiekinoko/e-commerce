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

        $view->listOfProducts = $product->getAllProducts();

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
