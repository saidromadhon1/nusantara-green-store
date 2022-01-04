<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Companion;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\BrandCategory;
use App\Models\SparepartCategory;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact.index', [
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
}
