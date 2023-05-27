<?php

class RegisterController extends Controller
{

    public function __construct()
    {
        if (!empty($_SESSION['user'])) {
            header('location:' . BASE_URL . '/dashboard');
        }
    }

    public function index()
    {
        $data['title'] = 'Register';
       
        if (isset($_POST['submit'])) {
            $name = stripslashes(strip_tags(htmlspecialchars($_POST['name'], ENT_QUOTES)));
            $email = stripslashes(strip_tags(htmlspecialchars($_POST['email'], ENT_QUOTES)));
            $password = stripslashes(strip_tags(htmlspecialchars($_POST['password'], ENT_QUOTES)));
            $password_confirm = stripslashes(strip_tags(htmlspecialchars($_POST['password_confirm'], ENT_QUOTES)));
            
            if($password == $password_confirm){
                
                if (strlen($password) < 8) {
                    $data['error'] = true;
                    $data['message'] = "Kata sandi minimal 8 karakter";

                } else {
                    $resultCek = $this->model('User')->cekUser(email: $email);

                    if (!$resultCek) {
                        $this->model('User')->registerUser(name: $name, email: $email, password: password_hash($password, PASSWORD_DEFAULT));

                        $data['success'] = true;
                        $data['message'] = $name . ' berhasil terdaftar. silahkan login di <a href='.BASE_URL.'/login>disini</a>';

                        // header("location:" . BASE_URL . "/login", $data);
                    } else {
                        $data['error'] = true;
                        $data['message'] = "Email sudah terdaftar";
                    }
                }
  
            } else {
                $data['error'] = true;
                $data['message'] = "Konfirmasi kata sandi tidak sama!";
            }
        }

        $this->view('page/auth/register', $data);
    }
}
