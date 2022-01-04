<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('frontend.blog.index', [
            'description' => 'Nusantara Store',
            'keyword' => 'nusantara-sparepart-mobil-motor-service',
            'title' => 'Nusantara Sparepart | Store',
            'billing_on_cart' => 'Rp50.000',
            'love' => 1,
            'cart' => 2,
            'banner_message' => 'Selamat tahun baru',
            'sparepart_category' => [
                [
                    'sparepart_name' => 'Radiator',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Carburator',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Fan',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Dinamo',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Tier',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Exhaust',
                    'sparepart_link' => ''
                ],
            ],
            'brand_category' => [
                [
                    'brand_name' => 'Federal',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
                [
                    'brand_name' => 'Castrol',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
                [
                    'brand_name' => 'Top 1',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
                [
                    'brand_name' => 'Ahas',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
                [
                    'brand_name' => 'Dunlop',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
            ],
            'companion' => [
                'email' => 'nusantara@store.com',
                'address' => 'Jl. Kakaktua no 11 Hadimulyo Barat',
                'phone' => '+62 895 0880 9215',
                'facebook' => '',
                'twitter' => '',
                'linkedin' => '',
                'pinterest' => '',
            ],
            'recent_news' => [
                [
                    'blog_image' => 'https://source.unsplash.com/1200x400?spion',
                    'blog_title' => 'Kinerja Oli Castrol 2 Tahun Terbaru',
                    'tanggal' => '3/01/2022',
                    'isi' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat'
                ],
                [
                    'blog_image' => 'https://source.unsplash.com/1200x400?spion',
                    'blog_title' => 'Ban GT Radial Yang Tahan Panas',
                    'tanggal' => '3/01/2022',
                    'isi' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat'
                ],
                
            ],
            'blogs' => [
                [
                    'blog_image' => 'https://source.unsplash.com/1200x400?spion',
                    'blog_title' => 'Kinerja Oli Castrol 2 Tahun Terbaru',
                    'tanggal' => '3/01/2022',
                    'isi' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat'
                ],
                [
                    'blog_image' => 'https://source.unsplash.com/1200x400?spion',
                    'blog_title' => 'Ban GT Radial Yang Tahan Panas',
                    'tanggal' => '3/01/2022',
                    'isi' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat'
                ],
                [
                    'blog_image' => 'https://source.unsplash.com/1200x400?spion',
                    'blog_title' => 'Kinerja Oli Castrol 2 Tahun Terbaru',
                    'tanggal' => '3/01/2022',
                    'isi' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat'
                ],
                [
                    'blog_image' => 'https://source.unsplash.com/1200x400?spion',
                    'blog_title' => 'Ban GT Radial Yang Tahan Panas',
                    'tanggal' => '3/01/2022',
                    'isi' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat'
                ]
            ],
        ]

        );
    }

    public function show(){
        return view('frontend.blog.page', [
            'description' => 'Nusantara Store',
            'keyword' => 'nusantara-sparepart-mobil-motor-service',
            'title' => 'Nusantara Sparepart | Store',
            'breadcrumb' => 'Home | Shop',
            'subtitle' => 'Shop',
            'billing_on_cart' => 'Rp50.000',
            'love' => 1,
            'cart' => 2,
            'banner_message' => 'Selamat tahun baru',
            'sparepart_category' => [
                [
                    'sparepart_name' => 'Radiator',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Carburator',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Fan',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Dinamo',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Tier',
                    'sparepart_link' => ''
                ],
                [
                    'sparepart_name' => 'Exhaust',
                    'sparepart_link' => ''
                ],
            ],
            'brand_category' => [
                [
                    'brand_name' => 'Federal',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
                [
                    'brand_name' => 'Castrol',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
                [
                    'brand_name' => 'Top 1',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
                [
                    'brand_name' => 'Ahas',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
                [
                    'brand_name' => 'Dunlop',
                    'brand_image' => 'https://source.unsplash.com/1200x400?spion',
                    'brand_link' => ''
                ],
            ],
            'companion' => [
                'email' => 'nusantara@store.com',
                'address' => 'Jl. Kakaktua no 11 Hadimulyo Barat',
                'phone' => '+62 895 0880 9215',
                'facebook' => '',
                'twitter' => '',
                'linkedin' => '',
                'pinterest' => '',
            ]
        ]);
    }
}
