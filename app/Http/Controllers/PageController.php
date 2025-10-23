<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');

            $stats = [
                'total_orders' => 156,
                'revenue' => 12450000,
                'customers' => 89,
                'products' => 15,
                'popular_item' => 'Strawberry Smoothie',
                'customer_satisfaction' => '98%'
            ];

            return view('dashboard', compact('username', 'stats'));
    }

    public function pengelolaan()
    {
        $menu_items = [
            [
                'id' => 1,
                'name' => 'Strawberry Smoothie',
                'category' => 'Minuman',
                'price' => 25000,
                'stock' => 45,
                'status' => 'Tersedia',
                'image' => 'smoothie.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Strawberry Cheesecake',
                'category' => 'Makanan',
                'price' => 35000,
                'stock' => 12,
                'status' => 'Tersedia',
                'image' => 'cheesecake.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Strawberry Waffle',
                'category' => 'Makanan',
                'price' => 28000,
                'stock' => 0,
                'status' => 'Habis',
                'image' => 'waffle.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Strawberry Milkshake',
                'category' => 'Minuman',
                'price' => 22000,
                'stock' => 30,
                'status' => 'Tersedia',
                'image' => 'milkshake.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Strawberry Tart',
                'category' => 'Makanan',
                'price' => 32000,
                'stock' => 8,
                'status' => 'Tersedia',
                'image' => 'tart.jpg'
            ]
        ];

        return view('pengelolaan', compact('menu_items'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $user_profile = [
            'name' => $username,
            'email' => $username . '@strawberrycafe.com',
            'position' => 'Manager Cafe',
            'join_date' => '2005-01-15',
            'phone' => '+62 895-0272-8417',
            'profile_image' => 'profile.jpg'
        ];

        return view('profile', compact('user_profile'));
    }
}
