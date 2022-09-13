<?php

declare(strict_types=1);


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index(): Collection|array
    {
        return Article::all();
    }

    public function store(CreateArticleRequest $request): JsonResponse
    {
        $request['slug'] = Str::slug($request['name']);
        $article = Article::create($request->only(['title', 'description']));
        return response()->json([
            "article" => $article
        ], 201);

    }
}
