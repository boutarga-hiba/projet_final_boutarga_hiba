<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $allproducts = Product::all();
        $categories = Categorie::all();

        // ! La méthode paginate() est une méthode de requête qui divise les résultats de la requête en plusieurs pages
        $products = Product::simplePaginate(8);
        $nbr_products = $allproducts->count();
        $nbr_categories=$categories->count();
        // $category = Categorie::findOrFail($categoryId);
        // $paginatedProducts = $allproducts->simplePaginate(8);

        return view("frontend.pages.shop", compact("products", "allproducts","nbr_products","categories","nbr_categories"));
    }


    // public function showCategory($categoryId)
    // {
    //     $category = Categorie::findOrFail($categoryId);
    //     $productsInCategory = $category->products()->simplePaginate(8);
    //     $nbr_products = $productsInCategory->total();

    //     return view("frontend.pages.shop", compact("productsInCategory", "nbr_products", "category"));
    // }

    // public function showCategory(Request $request)
    // {
    //     $categoryId = $request->input('category');

    //     $query = Product::query();

    //     if (!empty($categoryId)) {
    //         $query->where('categorie_id', $categoryId);
    //     }


    //     $categories = Categorie::all();

    //     return view("frontend.pages.shop", compact('categories', 'products'));
    // }


    // &bismilah
    public function showCategory(Request $request)
{
    $categoryId = $request->get('category'); // Utilisez get() pour obtenir la valeur du paramètre 'category'.

    $query = Product::query();

    if (!empty($categoryId)) {
        $query->where('categorie_id', $categoryId);
    }

    $categories = Categorie::all();
    $products = $query->paginate(8); // Assurez-vous de paginer les résultats.

    return view("frontend.pages.shop", compact('categories', 'products'));
}


// public function sort(Request $request)
// {
//     if ($request->criteria == "name") {
//         $products = Product::orderBy('name', 'asc')->paginate(9);
//     }elseif ($request->criteria == "prix") {
//         $products = Product::orderBy('prix', 'asc')->paginate(9);
//     }else{
//         $products= Product::latest()->paginate(9);
//     }
//     $categories = Categorie::all();

//     return view('frontend.pages.shop', compact('products', 'categories'));
// }




// public function sort(Request $request)
// {
//     $criteria = $request->input('criteria');

//     // Construire la requête pour trier les produits en fonction du critère sélectionné
//     $query = Product::query();

//     if ($criteria === 'price_asc') {
//         $query->orderBy('prix', 'asc');
//     } elseif ($criteria === 'price_desc') {
//         $query->orderBy('prix', 'desc');
//     } elseif ($criteria === 'name') {
//         $query->orderBy('name', 'asc');
//     } elseif ($criteria === 'product') {
//         // Si aucun critère n'est sélectionné, vous pouvez trier par défaut comme vous le souhaitez.
//         $query->orderBy('prix', 'asc');
//     }

//     $products = $query->paginate(8); // Assurez-vous de paginer les résultats.

//     $categories = Categorie::all();

//     return view("frontend.pages.shop", compact('categories', 'products'));
// }




public function sort(Request $request)
{
    $criteria = $request->input('criteria');

    // Construire la requête pour trier les produits en fonction du critère sélectionné
    $query = Product::query();

    if ($criteria === 'price_asc') {
        $query->orderBy('prix', 'asc');
    } elseif ($criteria === 'price_desc') {
        $query->orderBy('prix', 'desc');
    } elseif ($criteria === 'name_asc') {
        $query->orderBy('name', 'asc');
    } elseif ($criteria === 'name_desc') {
        $query->orderBy('name', 'desc');
    } elseif ($criteria === 'product') {
        // Si aucun critère n'est sélectionné, vous pouvez trier par défaut comme vous le souhaitez.
        $query->orderBy('prix', 'asc');
    }

    $products = $query->paginate(8);

    $categories = Categorie::all();

    return view("frontend.pages.shop", compact('categories', 'products'));
}


}

