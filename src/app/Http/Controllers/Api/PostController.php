<?php

declare(strict_types=1);


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostController extends Controller
{
    public function index(): Collection|array
    {
        return Post::all();
    }
}
