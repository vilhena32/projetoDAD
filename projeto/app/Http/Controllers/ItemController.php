<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    //
    public function index()
    {
        $items = Item::all();
        //dd($items);
        return view('items.index', compact('items'));
    }
    
}
