<?php
require_once 'User.php';

class UserController
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->getAllUsers();

        
    }
}