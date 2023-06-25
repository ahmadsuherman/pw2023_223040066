<?php

class CategoryController extends Controller
{
    public function __construct()
    {
        if (empty($_SESSION['user'])) {
            header('location:' . BASE_URL . '/login');
        }
        if ($_SESSION['user']['level'] == 'Pengguna') {
            header('location:' . BASE_URL . '/dashboard');
        }
    }

    public function index()
    {
        
        $data['title'] = 'Daftar Kategori';
        $data['updateStatus'] = 'category/updateStatus';
        
        $data['categories'] = $this->model('Category')->getCategories();
        $data['moment'] = true;
        $data['dataTable'] = true;
        $data['sweetalert2'] = true;

        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/categories/index', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
        
    }

    public function create()
    {
        // dd($_SESSION['user']);
        $data['title'] = 'Tambah Kategori';
        $data['parsley'] = true;

        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/categories/create', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
    }

    public function store()
    {
        checkIsDemo();
        
        if (isset($_POST['submit'])) {
            $name = stripslashes(strip_tags(htmlspecialchars($_POST['name'], ENT_QUOTES)));
            
            $category = $this->model('Category')->findByName(name: $name);
            if (!$category) {
                $this->model('Category')->add(
                    name: $name,
                );
    
                $alert = [
                    'type'  => 'success',
                    'message' => $name . ' berhasil ditambahkan',
                ];
    
                header("location:" . BASE_URL . "/category");
            
                $_SESSION['alert'] = $alert;
            } else {
                $alert = [
                    'type'  => 'danger',
                    'message' => $name . ' sudah digunakan',
                ];
                $_SESSION['alert'] = $alert;
                header("location:" . BASE_URL . "/category/create");
            }
        }
    }

    public function edit($uid)
    {
        $data['title'] = 'Ubah Kategori';
        $data['category'] = $this->model('Category')->findByUid(uid: $uid);
        $data['parsley'] = true;
        
        if (!$data['category']) {
            header("location:" . BASE_URL . "/category");
        }

        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/categories/edit', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
    }

    public function update(string $uid)
    {
        checkIsDemo();

        if (isset($_POST['submit'])) {
            $name = stripslashes(strip_tags(htmlspecialchars($_POST['name'], ENT_QUOTES)));
            
            $category = $this->model('Category')->findByName(name: $name);
            if(!$category){
                $this->model('Category')->update(uid: $uid, name: $name);
                
                $alert = [
                    'type'  => 'success',
                    'message' => $name . ' berhasil diperbarui',
                ];

                $_SESSION['alert'] = $alert;

                header("location:" . BASE_URL . "/category");
            } else {
                $alert = [
                    'type'  => 'danger',
                    'message' => $name . ' sudah digunakan',
                ];
                $_SESSION['alert'] = $alert;
                header("location:" . BASE_URL . "/category/edit/". $uid);
            }
            
        }
    }

    public function updateStatus(string $uid)
    {
        checkIsDemo();
        if(isset($_POST['uid'])){
            $category = $this->model('Category')->findByUid(uid: $uid);
            // dd($category['is_active']);
            $this->model('Category')->updateStatus(uid: $uid, is_active: $category['is_active']);
    
            $alert = [
                'type'  => 'success',
                'message' => 'Status ' . $category['name'] . ' berhasil diperbarui',
            ];
    
            $_SESSION['alert'] = $alert;
    
            header("location:" . BASE_URL . "/category");
        } else {
            header("location:" . BASE_URL . "/dashboard");
        }   
    }
}
