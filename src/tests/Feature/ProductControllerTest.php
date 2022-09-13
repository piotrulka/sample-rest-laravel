<?php

namespace Feature\App\Http\Controllers\Api;

use Tests\TestCase;

class ProductControllerTest extends TestCase
{

    public function testIndex(): void
    {
        $this->assertTrue(true);
    }

    public function testStore(): void
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/product', ['name' => 'Sally']);

        $response->assertStatus(200);
    }
}
