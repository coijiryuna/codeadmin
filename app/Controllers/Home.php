<?php

namespace App\Controllers;

/**
 * Class DashboardController.
 */
class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('admin/dashboard', $data);
    }
}
