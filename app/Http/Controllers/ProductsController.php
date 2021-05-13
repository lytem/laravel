<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Fornitore;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Categorie;
use App\Models\Category;
use App\Models\Stock;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $items=Product::get();
        return view('product.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories=Category::all();
        $fornitori=Fornitore::all();

        return view('product.create',compact('fornitori','categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product=new Product();
        $product=Product::create($request->input('product'));//pour recuperer l'objet avec son id
        $stocks=new Stock();
        $stocks->quantita_entrata=0;
        $stocks->note='note';
        $stocks ->product()->associate($product);
        $stocks->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {

        $product->update($request->input('product'));
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=new Product();
        $product=Product::find($id);
        $product->delete();
        return redirect('/products');

    }
}
