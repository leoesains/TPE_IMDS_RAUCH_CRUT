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

        static public function getUsername() {
            self::start();
            if (isset($_SESSION['USERNAME'])) {
                return $_SESSION['USERNAME'];
            }
        return false;
        }

        static public function checkLoggedAdmin() {
            self::start();  
            if (!isset($_SESSION['IS_LOGGED'])) {
                header('Location: ' . BASE_URL . 'login');
            } 
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