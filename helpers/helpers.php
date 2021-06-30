<?php
    class HelperAuth {

        static private function start() {
            if (session_status() != PHP_SESSION_ACTIVE)
                session_start();
        }

        static public function isLogged() {
            self::start(); 
            return (isset($_SESSION['IS_LOGGED']));
        }

        static public function login($user) {
            self::start();
                //logueo al usuario
                $_SESSION['IS_LOGGED'] = true;
                $_SESSION['USERNAME'] = $user->nombre;

        }

        // destruye la sesion 
        static public function logout() {
            self::start();
            session_destroy();
        }
    }