<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class HomeController extends BaseController
{
    public function index()
    {
        $model = new ProfileModel();

        // Get profile data from the model
        $data = $model->getProfileData();

        // Pass the data to the 'profile' view
        return view('HomeViews', $data);
    }
}
