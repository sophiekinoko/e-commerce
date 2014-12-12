<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajaxcart extends Controller {

/////////////////////////////////////////////////////////////////


    public function before() {
        parent::before();
        session_start();
        if (!isset($_SESSION["cart"]))
        {

            $_SESSION["cart"] = array();
        }
    }


/////////////////////////////////////////////////////////////////


    /*
    ** Si je vais à l'url ajaxcart/add/14
    ** pour récupérer le "14"
    ** j'utilise $this->request->param("id")
    */

    public function action_add()
    {
        $id = $this->request->param("id", false);

        if ($id == false)
        {
            $message = array("error" => "invalid_id");
            echo json_encode($message);
            return;
        }

        if (!isset($_SESSION["cart"][$id]))
        {
            $_SESSION["cart"][$id] = 1;
        }
        else
        {
            if($_SESSION["cart"][$id]<10)
            {
                $_SESSION["cart"][$id]++;
            }
        }

        $message = array("id" => $id, "quantity" => $_SESSION["cart"][$id]);
        echo json_encode($message);
    }

//////////////////////////////////////////////////////////////////

    public function action_sub()
    {
        $id = $this->request->param("id", false);

        if ($id == false)
        {
            $message = array("error" => "invalid id");
            echo json_encode($message);
            return;
        }

        if (!isset($_SESSION["cart"][$id]))
        {
            $message = array("error" => "not in cart");
            echo json_encode($message);
            return;
        }
        else
        {
            if($_SESSION["cart"][$id]>1)
            {
                $_SESSION["cart"][$id]--;
            }
        }

        $message = array("id" => $id, "quantity" => $_SESSION["cart"][$id]);
        echo json_encode($message);
    }

//////////////////////////////////////////////////////////////////

    public function action_gestioncart()
    {
        $view = View::factory("gestioncart");
        $this->response->body($view);
    }

} // End Product
