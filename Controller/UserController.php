<?php
require_once 'User.php';

class UserController
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->getAllUsers();

        echo '<h1>User List</h1>';
        echo '<ul>';
        foreach ($users as $user)
        {
            echo '<li>' . $user['name'] . '</li>';
        }
        echo '</ul>';
    }
}
