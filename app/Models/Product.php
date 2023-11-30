<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function prepareProductData($request,Product|null $product = null): array
    {
        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ];

        return $data;
    }

    public function storeProduct($data): Product
    {
        $query = self::query();
        return $query->create($data);
        
    }

    public function updateProduct($data, Product $product)
    {
       $query = self::query();
         $query->where('id', $product->id);
           return $query->update($data);
        
    }

    public function deleteProduct(Product $product)
    {
        $query = self::query();
        $query->where('id', $product->id);
        return $query->delete();
    }

    public function getAllProducts(array $input):LengthAwarePaginator
    {
        $query = self::query();
        $perPage = $input['perPage'] ?? 10;
        if(!empty($input['search'])){
            $query->where('name', 'like', '%' . $input['search'] . '%');
        }
        if(!empty($input['sort'])){
            $query->orderBy($input['sort'], $input['order'] ?? 'asc');
        }

        return $query->paginate($perPage);
        
    }

}
