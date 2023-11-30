<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function getDashboard(){
        $page_content =[
            'page_title'      => __('Dashboard'),
            'module_name'     => __('Dashboard'),
            'sub_module_name' => __('Dashboard'),
            'module_route'    => route('dashboard'),
            'button_type'    => 'dashboard'
        
        ];


        $all_users = User::role('user')->count();
        $all_products = Product::all()->count();
        $latest_users = User::role('user')->orderBy('created_at','desc')->take(5)->get();

        $top_stock_products = Product::orderBy('quantity','desc')->take(5)->get();



        return view('dashboard', compact('page_content','all_users','all_products','top_stock_products','latest_users'));
    }



     public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
