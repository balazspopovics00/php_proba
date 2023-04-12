<?php
require_once 'UserController.php';
require_once 'AdvertisementController.php';


$requestUri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestUri) 
{
    case '/':
        /*$homeController = new HomeController();
        if ($requestMethod === 'GET') 
        {
            $homeController->index();
        }*/

        echo '<h1>Home</h1>';
        echo '<ul>';
        echo '<li><a href="/users">User List</a></li>';
        echo '<li><a href="/advertisements">Advertisement List</a></li>';
        echo '</ul>';
        break;
    case '/users':
        $userController = new UserController();
        if ($requestMethod === 'GET') 
        {
            $userController->index();
        }
        break;
    case '/advertisements':
        $advertisementController = new AdvertisementController();
        if ($requestMethod === 'GET') 
        {
            $advertisementController->index();
        }
        break;
    default:
        http_response_code(404);
        echo '<h1>404 - Page Not Found</h1>';
        break;
}