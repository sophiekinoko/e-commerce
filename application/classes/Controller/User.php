<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {


/////////////////////////////////////////////////////////////////
    //fonction qui sera exécuté au début de chaque fonction suivante / existe aussi avec after
    public function before() {
        parent::before();
        session_start();

    }

/////////////////////////////////////////////////////////////////

	public function action_login()
	{
        $login = new Model_User();

        //si on a passé un _Post avec la méthode POST en validant le formulaire:
        if(!empty($_POST))
        {

           try 
           {
                if($_POST["username"] == "")
                    throw new Exception("il manque le username:");


                if($_POST["password"] == "")
                    throw new Exception("il manque un password:");



                //et on va chercher les données dans la BDD:
                $username = $_POST["username"];
                $password = $_POST["password"];
                $user = $login->login($username);

                if($user != false)
                {
                    if(password_verify($_POST["password"], $user["password"]) == true)
                    {

                        $_SESSION["user"] = $user;
                        $this->redirect('/');
                        //on redirige sur la page d'accueil
                    }
                    else 
                    {
                        throw new Exception("(username ou) mot de passe incorrect");
                    }
                }
                else 
                {
                    throw new Exception("username ou (mot de passe incorrect)");
                }

           }
           // si on a une erreur PDO:
            catch(PDOException $e) 
            {
                echo "probleme base de donnees";
            }
            catch (HTTP_Exception_Redirect $e) {
                throw $e;
            }
            catch(Exception $e) 
            {
                $error =  $e->getMessage();
                $view = View::factory("login");
                $view->error = $error;
                $view->post = $_POST;
                $this->response->body($view);
            }
        }

        else
        {
            //il n'y a pas de _POST (on a as rempli le formulaire):
            //donc on crée une view avec la view "logger" à l'intérieur:
            $view = View::factory("login");
            //donc on l'affiche
            $this->response->body($view);
        }
	}

/////////////////////////////////////////////////////////////////

    public function action_logout()
    {
        //on rempli la session de vide
        $_SESSION = array();
        //on la détruit
        session_destroy();
        //et on redirige sur la page d'accueil
        $this->redirect('/');
    }

/////////////////////////////////////////////////////////////////

    public function action_register()
    {
        //on importe un model du dossier model avec les requetes mysql:
        $user = new Model_User();
        
        //si on a passé un _Post avec la méthode POST en validant le formulaire:
        if(!empty($_POST))
        {
            try 
            {
                //on vérifie la presence de tous les champs remplis:
                // if(!isset($_POST["username"]) || !isset($_POST["password"]) || !isset($_POST["email"]))
                //  throw new Exception("il manque un champ");

                if($_POST["username"] == "")
                    throw new Exception("il manque le username:");

                if($_POST["password"] == "")
                    throw new Exception("il manque un password:");

                //empty() et ="" c'est pareil (sert à vérifier si c'est vide)
                if($_POST["email"] == "")
                    throw new Exception("il manque un email:");


                //verifie qu'on a bien une adresse email:
                if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) == false)
                    throw new Exception("ce n'est pas une adresse email valide");

                //verifie la longueur du password:
                if(strlen($_POST["password"]) < 6)
                    throw new Exception("password pas assez long"); 

                //et on envoie les données dans la BDD:
                $username=$_POST["username"];
                //le password est encrypté:
                $password=password_hash($_POST["password"], PASSWORD_DEFAULT);
                $email=$_POST["email"];
               
                $user->createUSer($username, $email, $password);
            }
            //si on a une erreur PDO:
            catch(PDOException $e) 
            {
                echo "utilisateur en double";
            }
            catch(Exception $e) 
            {
                echo $e->getMessage();
            }

            $view = View::factory("register");
            $view->post = $_POST;
            $this->response->body($view);
            //et on redirige sur la page gd'accueil
            $this->redirect('/');        }

        else
        {
            //il n'y a pas de _POST (on a rempli le formulaire):
            //donc on crée une view avec la view "register" à l'intérieur:
            $view = View::factory("register");
            //donc on l'affiche
            $this->response->body($view);
        }
    }

/////////////////////////////////////////////////////////////////



} // End User
