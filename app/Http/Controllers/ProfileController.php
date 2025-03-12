<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Salma Salsabila',
            'email' => 'poppy31y14@gmail.com',
            'bio' => 'take a change with me',
            'profile_picture' => 'profile.jpg',
            'skills' => ['mukbang', 'masak', 'healing']
        ];
        return view('profile', compact('profile'));
    }
}
