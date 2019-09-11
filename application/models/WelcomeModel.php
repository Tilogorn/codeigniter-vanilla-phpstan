<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model
{
    public function getUser($id, $type)
    {
        return array(
            'id' => $id,
            'username' => 'foobar'
        );
    }
}
