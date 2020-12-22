<?php
    namespace Controller;
    use App\Session;

    class HomeController {

        public function index(){

            Session::addFlash("success", "Bienvenue sur la page d'accueil !");

            return [
                "view" => "home.php",
                "titrePage" => "Employés | Home"
            ];
        }
    }