<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $product;

        public function __construct(Product $product)
        {
            $this->product = $product;
        }



    public function index(Request $request)
    {
        $page_content = [
            'page_title'      => __('Product'),
            'module_name'     => __('Product'),
            'sub_module_name' => __('List'),
            'module_route'    => route('product.create'),
            'button_type'    => 'create'
        ];
        
        $all_products = $this->product->getAllProducts($request->all());
        return view('product.index', compact('page_content', 'all_products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_content =[
            'page_title'      => __('Product'),
            'module_name'     => __('Product'),
            'sub_module_name' => __('Create'),
            'module_route'    => route('product.index'),
            'button_type'    => 'list'
        ];
        return view('product.create', compact('page_content'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try{
            $data = $this->product->prepareProductData($request);
            $this->product->storeProduct($data);
            $class = 'success';
            $message = 'Product created successfully';
            return redirect()->route('product.index')->with('message', $message)->with('class', $class);
        }
        catch(\Exception $e){
            $class = 'danger';
            $message = 'Something went wrong';
            return redirect()->back()->with('message', $message)->with('class', $class);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $page_content =[
            'page_title'      => __('Product'),
            'module_name'     => __('Product'),
            'sub_module_name' => __('Show'),
            'module_route'    => route('product.index'),
            'button_type'    => 'list'
        
        ];
        return view('product.show', compact('page_content', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $page_content =[
            'page_title'      => __('Product'),
            'module_name'     => __('Product'),
            'sub_module_name' => __('Edit'),
            'module_route'    => route('product.index'),
            'button_type'    => 'list'
        
        ];
        return view('product.edit', compact('page_content', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try{
            $data = $this->product->prepareProductData($request, $product);
            $this->product->updateProduct($data, $product);
            $class = 'success';
            $message = 'Product updated successfully';
            return redirect()->route('product.index')->with('message', $message)->with('class', $class);
        }
        catch(\Exception $e){
            $class = 'danger';
            $message = 'Something went wrong';
            return redirect()->back()->with('message', $message)->with('class', $class);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try{
            $this->product->deleteProduct($product);
            $class = 'success';
            $message = 'Product deleted successfully';
            return redirect()->route('product.index')->with('message', $message)->with('class', $class);
        }
        catch(\Exception $e){
            $class = 'danger';
            $message = 'Something went wrong';
            return redirect()->back()->with('message', $message)->with('class', $class);
        }
    }


   


}
