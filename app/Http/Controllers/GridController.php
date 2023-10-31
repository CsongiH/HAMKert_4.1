<?php

namespace App\Http\Controllers;

use App\Models\Food;

use Illuminate\Http\Request;

class GridController extends Controller
{
    public function index()
    {
        $items = food::all(); // Replace 'Item' with your model name and fetch the data you want to display
        return view('grid.index', compact('items'));
    }

}
