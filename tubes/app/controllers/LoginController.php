<?php

class LoginController extends Controller
{

    public function __construct()
    {
        if (!empty($_SESSION['user'])) {
            header('location:' . BASE_URL . '/dashboard');
        }
    }

    public function index()
    {
        $data['title'] = 'Login';
        
        if (isset($_POST['submit'])) {
            $email = stripslashes(strip_tags(htmlspecialchars($_POST['email'], ENT_QUOTES)));
            $password = stripslashes(strip_tags(htmlspecialchars($_POST['password'], ENT_QUOTES)));
            
            if (!empty($email) && !empty($password)) {
                $user = $this->model('User')->login(email: $email);
                
                if ($user) {
                    if (password_verify($password, $user['password'])) {
                        $_SESSION['user'] = $user;

                        header("location:" . BASE_URL . "/dashboard");
                    } else {
                        $data['error'] = true;
                        $data['message'] = "Email atau kata sandi salah";
                    }
                } else {
                    $data['error'] = true;
                    $data['message'] = "Email atau kata sandi salah";
                }
            } else {
                $data['error'] = true;
                $data['message'] = "Inputan harus diisi!";
            }
        }

        $this->view('page/auth/login', $data);
    }
}
