<?php

namespace App\Controllers;

use App\Models\MobilModel;

class Mobil extends BaseController
{
    public function index()
    {
        $model = new MobilModel();
        $data['mobil'] = $model->findAll();
        return view('user/dashboard', $data);
    }
}