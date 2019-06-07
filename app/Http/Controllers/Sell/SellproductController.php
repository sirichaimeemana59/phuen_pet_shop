<?php

namespace App\Http\Controllers\Sell;

use Request;
use App\Http\Controllers\Controller;
use Auth;
use App\user;
use App\product;

class SellproductController extends Controller
{

    public function index()
    {
        return view('sell.sell_product');
    }


    public function create()
    {
        $product = product::find(Request::input('name'));
        return response()->json( $product );

    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
