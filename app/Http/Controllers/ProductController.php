<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


    // public function index()
    // {
    //     return view("backend.pages.products");
    // }


    public function show(Product $product)
    {
        $products = Product::all();

        return view("frontend.pages.show", compact("product", "products"));
    }


    public function admin()
    {
        $products = Product::all();
        $categories = Categorie::all();
        return view("backend.pages.products", compact("products", "categories"));
    }

    // public function store(Request $request)
    // {
    //     request()->validate([
    //         "name" => ["required"],
    //         "description" => ["required"],
    //         "image" => ["required", "image", "mimes:png,jpg,svg,gif", "max:2048"],
    //         "stock" => ["required", "integer"],
    //         "prix" => ["required", "integer"],
    //         "categorie" => ["required"],
    //     ]);

    //     $imgSrc = request()->file("image");
    //     $imgSrc->storePublicly("img/produit/", "public");
    //     $imgName = $imgSrc->hashName();

    //     Product::create([
    //         "name" => $request->name,
    //         "desc" => $request->desc,
    //         "image" => $imgName,
    //         "stock" => $request->stock,
    //         "price" => $request->price,
    //         "category_id" => $request->category,
    //         // "user_id" => auth()->user()->id,
    //     ]);

    //     // Toastr()->success("Product Successfully Created!");

    //     return redirect()->back();
    // }
    public function destroy(Product $product)
    {
            Storage::disk("public")->delete('/img/produit/' . $product->image);
        $product->delete();
        return back()->with("error" , "product deleted successfully");
    }


    public function update(Request $request, Product $product)
    {
        request()->validate([
            "name" => ["required"],
            "description" => ["required"],
            "stock" => ["required", "integer"],
            "prix" => ["required", "integer"],
        ]);

        $img = request()->file("image");
        if ($img) {

            request()->validate([
            "image" => ["required", "image", "mimes:png,jpg,jpeg,gif,svg", "max:2048"],
            ]);

            $img->storePublicly("img/produit/", "public");
            $imgName = $img->hashName();
        }

        $product->update([
            "name" => $request->name,
            "description" => $request->description,
            "image" => $imgName ?? $product->image,
            "stock" => $request->stock,
            "prix" => $request->prix,
            // "user_id" => auth()->user()->id,
            "categorie_id" => $request->category, // Utilisez $request->category pour la catégorie

        ]);

        // Toastr()->success("Product Updated Successfully!!");
        return back()->with("warning" , "product updated successfully");

    }
    public function store(Request $request)
    {
        request()->validate([
            "name" => ["required"],
            "description" => ["required"],
            "image" => ["required", "image", "mimes:png,jpg,svg,gif", "max:2048"],
            "stock" => ["required", "integer"],
            "prix" => ["required", "integer"],
            "categorie" => ["required"],
        ]);

        $imgSrc = request()->file("image");
        $imgSrc->storePublicly("img/produit/", "public");
        $imgName = $imgSrc->hashName();

        Product::create([
            "name" => $request->name,
            "description" => $request->description,
            "image" => $imgName,
            "stock" => $request->stock,
            "prix" => $request->prix,
            "categorie_id" => $request->categorie,
            // "user_id" => auth()->user()->id,
        ]);

        return back()->with("success" , "product add successfully");

        return redirect()->back();
    }



}
