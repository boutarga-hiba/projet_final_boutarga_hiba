<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //


    // public function index()
    // {
    //     $allproducts = Product::all();
    //     $categories = Categorie::all();

    //     // ! La méthode paginate() est une méthode de requête qui divise les résultats de la requête en plusieurs pages
    //     $products = Product::simplePaginate(8);
    //     $nbr_products = $allproducts->count();
    //     $nbr_categories=$categories->count();


    //     return view("frontend.pages.shop", compact("products", "allproducts","nbr_products","categories","nbr_categories"));
    // }


    public function index()
    {
        return view("backend.pages.products");
    }


    public function show(Product $product)
    {
        $products = Product::all();

        return view("frontend.pages.show", compact("product", "products"));
    }


}
