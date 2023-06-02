<?php

class UploadController extends Controller
{

    public function index()
    {
        if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
                
            $file 	    = $_FILES['file']['name'];
            $imageName  = uploadImage('file', $file, 'uploads/destination/');

            $result = BASE_URL . "/uploads/destination/" . $imageName;
            echo $result;
        }
    }

    function deleteGambar()
    {
        $src = $_POST['src'];

        $fileLocation = str_replace(BASE_URL_SUMMERNOTE . "/", "", $src);

        if (unlink($fileLocation)) {
            echo "file berhasil dihapus";
        }
    }
}
