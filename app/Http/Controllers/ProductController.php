<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'One Piece', 'Demon Slayer', 'Attack on Titan', 'Food Wars', 'Golden Kamui' ]
        ];
        return view('products',compact('products'));
    }
}
