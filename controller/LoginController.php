<?php

require_once '../../lib/Helper.php';

class LoginController {

    private $login;
    private $password;

    private function readInfoLogin() {
        $ini = parse_ini_file('../../config.ini');
        
        $this->login = $ini['login'];
        $this->password = $ini['password'];
    }

    public function loginAction() {

        $this->readInfoLogin();

        if (($_POST['login'] == $this->login) and ($_POST['senha'] == $this->password)) {

            session_start();
            $_SESSION['login'] = $this->login;
            $_SESSION['senha'] = $this->password;

            Helper::_redirect('Location: home.php');
        } else {

            Helper::_redirect('Location: index.php?erro=login');
        }
    }

    public function logoutAction() {

        session_unset();
        session_destroy();

        Helper::_redirect('Location: index.php?erro=logout');
    }

}

?>
