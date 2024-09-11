<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TaskController extends BaseController
{
    public function add()
    {
        return view('layout/header')
            . view('new_task')
            . view('layout/footer');
    }
}
