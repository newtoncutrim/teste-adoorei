<?php

namespace Tests\Unit;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SaleControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreMethodCreatesNewSale()
    {
        $product = Product::factory()->create();

        $response = $this->post('/api/sales', [
            'products' => [
                [
                    'product_id' => $product->id,
                    'quantity' => 2
                ]
            ]
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('sales', ['amount' => $product->price * 2]);
    }

    public function testIndexMethodReturnsAllSales()
    {
        Sale::factory()->create();

        $response = $this->get('/api/sales');

        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => ['id', 'amount', 'products']
            ]);
    }

    public function testShowMethodReturnsSaleById()
    {
        $sale = Sale::factory()->create();

        $response = $this->get('/api/sales/' . $sale->id);

        $response->assertStatus(200)
            ->assertJson([
                'id' => $sale->id,
                'amount' => $sale->amount
            ]);
    }

    public function testCancelMethodDeletesSaleAndAssociatedProducts()
    {
        $sale = Sale::factory()->create();

        $response = $this->delete('/api/sales/' . $sale->id);

        $response->assertStatus(200);

        $this->assertDatabaseMissing('sales', ['id' => $sale->id]);
    }

    public function testAddProductMethodAddsProductToSale()
    {
        $sale = Sale::factory()->create();
        $product = Product::factory()->create();

        $response = $this->post('/api/sales/' . $sale->id . '/add-product', [
            'product_id' => $product->id,
            'quantity' => 1
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('product_sale', [
            'sale_id' => $sale->id,
            'product_id' => $product->id
        ]);
    }
}
