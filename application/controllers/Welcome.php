<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        // Works! And shows PHPStan-Error, when wrongly used
        $a = $this->sum(4, 5);

        $this->load->model('WelcomeModel');
        // PHPStan-Error: Access to an undefined property Welcome::$WelcomeModel
        // Expected: "Function getUser expects two parameters" (see ../models/WelcomeModel.php)
        $b = $this->WelcomeModel->getUser(1234);

        // Works
        $this->load->view('welcome_message');
    }

    public function sum($p1, $p2)
    {
        return $p1 + $p2;
    }
}
