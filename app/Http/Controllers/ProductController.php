<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name1' => 'One Piece'],
            ['name2' => 'Demon Slayer'],
            ['name3' => 'Attack on Titan'],
            ['name4' => 'Golden Kamui'],
            ['name5' => 'Food Wars'],
        ];
        return view('products',compact('products'));
    }
}
