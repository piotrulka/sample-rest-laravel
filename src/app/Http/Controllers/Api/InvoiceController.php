<?php

declare(strict_types=1);


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class InvoiceController extends Controller
{
    public function index(): Collection|array
    {
        return Product::with('categories:id,name')->get();
    }
}
