<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        //echo "Welcome back, ".$session->get('user_name');
        echo view('templates/header', $data);
        echo view('pages/index.php', $data);
        echo view('templates/footer', $data);
    }
}
