<?php

class DestinationController extends Controller
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
        
        $data['title'] = 'Daftar Destinasi';
        $data['updateStatus'] = 'destination/updateStatus';
        
        $data['destinations'] = $this->model('Destination')->getDestinations();
        $data['moment'] = true;
        $data['dataTable'] = true;
        $data['toastr'] = true;
        $data['sweetalert2'] = true;
        
        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/destinations/index', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
        
    }

    public function create()
    {
        // dd($_SESSION['user']);
        $data['title'] = 'Tambah Destinasi';
        $data['categories'] = $this->model('Category')->getCategorySelect();
        $data['leaflet'] = true;
        $data['createLeaflet'] = true;
        $data['trix'] = true;
        $data['parsley'] = true;
        
        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/destinations/create', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
    }

    public function store()
    {
        // dd($_POST);
        if (isset($_POST['submit'])) {
            dd($_FILES);
            $imageName 	    = $_FILES['image']['name'];

            $imageName = uploadImage($imageName, 'uploads/img/destination/');
            
            $name = stripslashes(strip_tags(htmlspecialchars($_POST['name'], ENT_QUOTES)));
            $categoryId = stripslashes(strip_tags(htmlspecialchars($_POST['category_id'], ENT_QUOTES)));
            $description = stripslashes(strip_tags(htmlspecialchars($_POST['description'], ENT_QUOTES)));
            $latitude = stripslashes(strip_tags(htmlspecialchars($_POST['latitude'], ENT_QUOTES)));
            $longitude = stripslashes(strip_tags(htmlspecialchars($_POST['longitude'], ENT_QUOTES)));
            
            $this->model('Destination')->add(
                imageName: $imageName,
                name: $name,
                categoryId: $categoryId,
                description: $description,
                latitude: $latitude,
                longitude: $longitude
            );

            $alert = [
                'type'  => 'success',
                'message' => $name . ' berhasil ditambahkan',
            ];

            header("location:" . BASE_URL . "/destination");
        
            $_SESSION['alert'] = $alert;
        }
    }

    public function show(string $uid)
    {
        
        $data['title'] = 'Detail Destinasi';
        $data['updateStatus'] = 'destination/updateStatus';
        
        $data['destination'] = $this->model('Destination')->findByUid(uid: $uid);
        $data['leaflet'] = true;
        
        $data['showLeaflet'] = true;
        
        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/destinations/show', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
        
    }

    public function edit($uid)
    {
        $data['title'] = 'Ubah Destinasi';
        $data['destination'] = $this->model('Destination')->findByUid(uid: $uid);
        $data['categories'] = $this->model('Category')->getCategorySelect();
        $data['leaflet'] = true;
        $data['editLeaflet'] = true;
        $data['trix'] = true;
        $data['parsley'] = true;

        if (!$data['destination']) {
            header("location:" . BASE_URL . "/category");
        }

        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/destinations/edit', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
    }

    public function update(string $uid)
    {
        
        if (isset($_POST['submit'])) {
            
            $destination = $this->model('Destination')->findByUid(uid: $uid);
            
            if($_FILES['image']['error'] == 4){
                $imageName 	    = $destination['image'];
            } else {
                $imageName 	    = $_FILES['image']['name'];
                $imageName = uploadImage($imageName, 'uploads/img/destination/'); 
                unlink('uploads/img/destination/' . $destination['image']);   
            }
            // dd($_POST);
            $name = stripslashes(strip_tags(htmlspecialchars($_POST['name'], ENT_QUOTES)));
            $categoryId = stripslashes(strip_tags(htmlspecialchars($_POST['category_id'], ENT_QUOTES)));
            $description = stripslashes(strip_tags(htmlspecialchars($_POST['description'], ENT_QUOTES)));
            $latitude = stripslashes(strip_tags(htmlspecialchars($_POST['latitude'], ENT_QUOTES)));
            $longitude = stripslashes(strip_tags(htmlspecialchars($_POST['longitude'], ENT_QUOTES)));
           
            $this->model('Destination')->update(
                uid: $uid,
                imageName: $imageName,
                name: $name,
                categoryId: $categoryId,
                description: $description,
                latitude: $latitude,
                longitude: $longitude
            );

            $alert = [
                'type'  => 'success',
                'message' => $name . ' berhasil diperbarui',
            ];

            $_SESSION['alert'] = $alert;

            header("location:" . BASE_URL . "/destination/show/" . $uid);
            
        }
    }

    public function destroy(string $uid)
    {
        $uid = stripslashes(strip_tags(htmlspecialchars($uid, ENT_QUOTES)));

        $destination = $this->model('Destination')->findByUid(uid: $uid);

        unlink('uploads/img/destination/' . $destination['image']);

        $this->model('Destination')->delete(uid: $uid);

        $alert = [
            'type' => 'success',
            'message' => $destination['name'] . ' berhasil dihapus'
        ];

        $_SESSION['alert'] = $alert;

        header("location:" . BASE_URL . "/destination");
    }    
}
