<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $users = User::with('nidcard')->get();

        return view('home', [
            'page_name' => 'Home Page',
            'name' => 'Laravel 9 instructory',
            'users' => $users
        ]);
    }
    // public function home()
    // {
    //     $users = User::all();

    //     return view('home', [
    //         'users' => $users
    //     ]);
    // }


    public function books()
    {
    $books=Book::all();
    return $books;
    }
}
