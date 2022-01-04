<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Companion;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\BrandCategory;
use App\Models\SparepartCategory;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('products')->join('sparepart_categories','sparepart_categories.id','products.id_category');
        return view('frontend.shop.index', [
            'description' => 'Nusantara Store',
            'keyword' => 'nusantara-sparepart-mobil-motor-service',
            'title' => 'Nusantara Sparepart | Store',
            'breadcrumb' => 'Home | Shop',
            'subtitle' => 'Shop',
            'billing_on_cart' => 'Rp50.000',
            'love' => 1,
            'cart' => 2,
            'banner_message' => 'Selamat tahun baru',
            'sparepart_category' => SparepartCategory::all(),
            'brand_category' => BrandCategory::all(),
            'companion' => Companion::find(1)->get()->first(),
            'latest_product' => Product::all(),
            'top_product' => Product::all(),
            'review_product' => Product::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
