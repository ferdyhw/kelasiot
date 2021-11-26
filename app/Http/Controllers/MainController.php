<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kelas Internet of Things (IoT)'
        ];

        return view('main.index', $data);
    }
}
