<?php

class UserController extends Controller
{

    public function __construct()
    {
        if (empty($_SESSION['user'])) {
            header('location:' . BASE_URL . '/login');
        } else if (empty($_SESSION['user']['level'])) {
            header('location:' . BASE_URL . '/dashboard');
        }
    }

    public function index()
    {
        $data['title'] = 'Daftar Pengguna';
        $data['pathDelete']     = 'user/destroy';
        $data['delete'] = true;
        
        $data['users'] = $this->model('User')->getUsers();
        $data['moment'] = true;
        $data['dataTable'] = true;
        $data['sweetalert2'] = true;
        
        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/users/index', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
        
    }

    public function create()
    {
        $data['title'] = 'Tambah Pengguna';
        $data['parsley'] = true;

        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/users/create', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
    }

    public function store()
    {
        if (isset($_POST['submit'])) {
            $name       = stripslashes(strip_tags(htmlspecialchars($_POST['name'], ENT_QUOTES)));
            $email      = stripslashes(strip_tags(htmlspecialchars($_POST['email'], ENT_QUOTES)));
            $password   = stripslashes(strip_tags(htmlspecialchars($_POST['password'], ENT_QUOTES)));
            $level      = stripslashes(strip_tags(htmlspecialchars($_POST['level'], ENT_QUOTES)));
            
            $userCheck = $this->model('User')->cekUser(email: $email);

            if (!$userCheck) {
                $this->model('User')->add(
                    name: $name,
                    email: $email,
                    password: password_hash($password, PASSWORD_DEFAULT),
                    level: $level,
                );

                $alert = [
                    'type'  => 'success',
                    'message' => $name . ' berhasil ditambahkan',
                ];

                header("location:" . BASE_URL . "/user");
            
                $_SESSION['alert'] = $alert;
                
            } else {
                $alert = [
                    'type'  => 'danger',
                    'message' => $email . ' sudah terdaftar',
                ];

                header("location:" . BASE_URL . "/user/create");
            
                $_SESSION['alert'] = $alert;
            }
        }
    }

    public function edit($uid)
    {
        $data['title'] = 'Ubah Pengguna';
        $data['user'] = $this->model('User')->findByUid(uid: $uid);
        $data['parsley'] = true;
        
        if (!$data['user']) {
            header("location:" . BASE_URL . "/user");
        }

        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/users/edit', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
    }

    public function update(string $uid)
    {
        if (isset($_POST['submit'])) {
            $name = stripslashes(strip_tags(htmlspecialchars($_POST['name'], ENT_QUOTES)));
            $email = stripslashes(strip_tags(htmlspecialchars($_POST['email'], ENT_QUOTES)));
            $level = stripslashes(strip_tags(htmlspecialchars($_POST['level'], ENT_QUOTES)));
            
            $userCheck = $this->model('User')->cekUser(email: $email);

            if (!$userCheck) {
                $this->model('User')->update(uid: $uid, name: $name, email: $email, level: $level);
            
                $alert = [
                    'type'  => 'success',
                    'message' => $name . ' berhasil diperbarui',
                ];
    
                $_SESSION['alert'] = $alert;
    
                header("location:" . BASE_URL . "/user");
            } else {
                $alert = [
                    'type'  => 'danger',
                    'message' => $email . ' sudah digunakan',
                ];
    
                $_SESSION['alert'] = $alert;
    
                header("location:" . BASE_URL . "/user/edit/". $uid);
            }
            
        }
    }

    public function destroy(string $uid)
    {
        if(isset($_POST['uid'])){
            $uid = stripslashes(strip_tags(htmlspecialchars($uid, ENT_QUOTES)));

            $user = $this->model('User')->findByUid(uid: $uid);

            $this->model('User')->delete(uid: $uid);

            $alert = [
                'type' => 'success',
                'message' => $user['name'] . ' berhasil dihapus'
            ];

            $_SESSION['alert'] = $alert;

            header("location:" . BASE_URL . "/user");
        } else {
            header("location:" . BASE_URL . "/user");
        }
    } 
}
