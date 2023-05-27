<?php

class LogoutController extends Controller
{

    public function index()
    {
        session_destroy();
        session_unset();

        return header("location:" . BASE_URL . "/");
    }
}
