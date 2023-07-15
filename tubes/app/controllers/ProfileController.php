<?php

class ProfileController extends Controller
{

    public function __construct()
    {
        if (empty($_SESSION['user'])) {
            header('location:' . BASE_URL . '/login');
        }
    }

    public function index()
    {
        $uid = $_SESSION['user']['uid'];

        $data['title']          = 'Profil';
        $data['parsley']        = true;
        $data['changeAvatar']   = true;
        $data['user']           = $this->model('User')->findByUid(uid: $uid);
        
        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/profile/index', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
        
    }

    public function update()
    {
        checkIsDemo();
        if (isset($_POST['submit'])) {

            $maxSize    = 2 * 1024 * 1024;
            if ($_FILES["avatar"]["size"] > $maxSize) {
                $alert = [
                    'type'      => 'danger',
                    'message'   => 'Maksimal ukuran gambar 2MB',
                ];
    
                $_SESSION['alert'] = $alert;
                header("location:" . BASE_URL . "/profile");
                exit();
            } 

            $name       = stripslashes(strip_tags(htmlspecialchars($_POST['name'], ENT_QUOTES)));
            $uid        = $_SESSION['user']['uid'];
        
            $user       = $this->model('User')->findByUid(uid: $uid);
           
            if($_FILES['avatar']['error'] == 4){
                $avatar 	    = $user['avatar'];
            } else {
                $avatar     = $_FILES['avatar']['name'];
                $avatar     = uploadImage('avatar', $avatar, 'uploads/img/users/');
                if(!is_null($user['avatar'])){
                    unlink('uploads/img/users/' . $user['avatar']);   
                }
            }

            $this->model('User')->updateProfile(uid: $uid, name: $name, avatar: $avatar);
            
            $user       = $this->model('User')->findByUid(uid: $uid);
            $_SESSION['user'] = $user;
            
            $alert = [
                'type'  => 'success',
                'message' => $name . ' berhasil diperbarui',
            ];

            $_SESSION['alert'] = $alert;

            header("location:" . BASE_URL . "/profile");
        }
    }

    public function updateEmail()
    {
        checkIsDemo();
        if (isset($_POST['submit'])) {

            $email = stripslashes(strip_tags(htmlspecialchars($_POST['email'], ENT_QUOTES)));
            $uid   = $_SESSION['user']['uid'];
    
            $resultCek = $this->model('User')->cekUser(email: $email);

            if (!$resultCek) {
                $this->model('User')->updateEmail(uid: $uid, email: $email);
                $user = $this->model('User')->findByUid(uid: $uid);
                $_SESSION['user'] = $user;
                
                $alert = [
                    'type'  => 'success',
                    'message' => $email . ' berhasil diperbarui',
                ];
    
                $_SESSION['alert'] = $alert;
    
                header("location:" . BASE_URL . "/profile");
            } else {
                $alert = [
                    'type'  => 'danger',
                    'message' => $email . ' sudah digunakan',
                ];
    
                $_SESSION['alert'] = $alert;
    
                header("location:" . BASE_URL . "/profile");
            }
        }
    
    }

    public function updatePassword()
    {
        checkIsDemo();
        if (isset($_POST['submit'])) {

            $current_password  = stripslashes(strip_tags(htmlspecialchars($_POST['current_password'], ENT_QUOTES)));
            $password = stripslashes(strip_tags(htmlspecialchars($_POST['password'], ENT_QUOTES)));
            $password_confirm = stripslashes(strip_tags(htmlspecialchars($_POST['password_confirm'], ENT_QUOTES)));
            
            $uid   = $_SESSION['user']['uid'];
            $user = $this->model('User')->findByUid(uid: $uid);
            
            if (password_verify($current_password, $user['password'])) {
               
                if($password == $password_confirm){
                  
                    if (strlen($password) < 8) {
                        $alert = [
                            'type'  => 'danger',
                            'message' => 'Kata sandi minimal 8 karakter',
                        ];
        
                        $_SESSION['alert'] = $alert;
                    } else {
                    
                        $this->model('User')->updatePassword(uid: $uid, password: password_hash($password, PASSWORD_DEFAULT));
            
                        $alert = [
                            'type'  => 'success',
                            'message' => 'Kata sandi berhasil diperbarui',
                        ];
        
                        $_SESSION['alert'] = $alert;
        
                        header("location:" . BASE_URL . "/profile");
                    
                    }
                
                } else {
                    $alert = [
                        'type'      => 'danger',
                        'message'   => 'Konfirmasi kata sandi tidak sama!',
                    ];

                    $_SESSION['alert'] = $alert;
                }
            } else {
                $alert = [
                    'type'      => 'danger',
                    'message'   => 'Kata sandi saat ini salah!',
                ];

                $_SESSION['alert'] = $alert;
            }

            header("location:" . BASE_URL . "/profile");
        }
    }
}
