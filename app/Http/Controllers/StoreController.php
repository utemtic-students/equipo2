<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class StoreController extends Controller
{
    public function index()
    {
    	$products = Product::all(); /**funcion en el controlador, para mandar llamar el index principal, compactados con los productos**/
    	//dd($products);
    	return view('store.index', compact('products'));
    }

    public function show($slug) /***Funcion, para mostrar el slug o detalles del producto**/
    {
    	$product = Product::where('slug', $slug)->first();/**Va buscar en la BD, el alug del producto**/
    	//dd($product);

    	return view('store.show', compact('product'));
    }
}
