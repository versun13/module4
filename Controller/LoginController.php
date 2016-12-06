<?php

namespace Controller;

use Model\LoginModel;

class LoginController extends BaseController {

    protected $name = 'Login';
    private $users = array();

    public function login() {
        if ($_POST) {
            $loginModel = new LoginModel();
            $users = $loginModel->getUsers($_POST['login'],$_POST['password']);
         
            if (sizeof($users)) {
                $_SESSION['userId'] = $users[0]['id'];
                $_SESSION['user'] = $_POST['login'];
                $_SESSION['isLogged'] = TRUE;
                $_SESSION['is_admin'] = $users[0]['is_admin'];
            } else {
                $this->message = "Введены неверные данные";
            }
        }

        if (!isset($_SESSION['isLogged'])) {
            $this->render("login");
        } else {
            return header("Location: http://".SITE_HOST."/");
        }
    }

    public function signup() {
        if ($_POST) {
            $loginModel = new LoginModel();
            $users = $loginModel->getUser($_POST['login'],$_POST['email']);
            if (sizeof($users)) {
                $this->message = "Пользователь с такими логином или имейлом уже зарегестрирован";
            } elseif ($loginModel->save($_POST)) {
                    $this->message = "Регистрация прошла успешно! Можете залогинится!";
                    header("Location: http://".SITE_HOST."/login/login/");
                }
            
        }
        $this->render("signup");
    }

    public function logout() {
        session_unset();
        $this->render("logout");
    }

}
