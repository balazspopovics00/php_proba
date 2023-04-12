<?php
require_once 'Advertisement.php';

class AdvertisementController
{
    public function index()
    {
        $advertisementModel = new Advertisement();
        $advertisements = $advertisementModel->getAllAdvertisementsWithUsers();

        echo '<h1>Advertisement List</h1>';
        echo '<ul>';
        foreach ($advertisements as $advertisement) 
        {
            echo '<li>' . $advertisement['title'] . ' - User: ' . $advertisement['user_name'] . '</li>';
        }
        echo '</ul>';
    }
}
