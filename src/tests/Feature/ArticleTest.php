<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    public function testsArticlesAreCreatedCorrectly(): void
    {
        $this->json('POST', '/api/articles')
            ->assertStatus(200)
            ->assertJson([ 'title' => 'Lorem', 'body' => 'Ipsum']);
    }
}
