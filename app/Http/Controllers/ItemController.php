<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create_item()
    {
        $data = Barang::all();
        return view('create', compact('data'));
    }

    public function barang ()
    {
        return view('item');
    }

    public function insert_detail(Request $request)
    {
        $data = Barang::create($request->all());
        return redirect('/create_item');
    }
}
