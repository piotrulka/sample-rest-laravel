<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index(): Collection|array
    {
        return Product::with('categories:id,name')
            ->get();
    }

    public function store(CreateProductRequest $request): JsonResponse
    {
        $request['slug'] = Str::slug($request['name']);
        $product = Product::create($request->only(['name', 'slug', 'description', 'price']));

        return response()->json([
            "product" => $product
        ], 201);
    }

}
