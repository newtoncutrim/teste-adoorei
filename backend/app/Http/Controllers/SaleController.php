<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {

        $sales = Sale::with('products')->get();

        return response()->json($sales, 200);

    }
    public function store(Request $request)
    {
    $request->validate([
        'products' => 'required|array',
        'products.*.product_id' => 'required|exists:products,id',
        'products.*.quantity' => 'required|integer|min:1',
    ]);

    $sale = new Sale();
    $sale->amount = 0;
    $sale->save();

    foreach ($request->products as $product) {
        $productModel = Product::findOrFail($product['product_id']);

        $sale->amount += $productModel->price * $product['quantity'];
        $sale->products()->attach($product['product_id'], ['quantity' => $product['quantity']]);
    }

    $sale->save();

    $response = [
        'sales_id' => $sale->id,
        'amount' => $sale->amount,
        'products' => []
    ];

    foreach ($sale->products as $product) {
        $response['products'][] = [
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $product->pivot->quantity
        ];
        }

        return response()->json($response, 201);

    }

    public function show($id)
    {
        $sale = Sale::with('products')->find($id);

        if (!$sale) {
            return response()->json(['error' => 'Venda não encontrada'], 404);
        }

        return response()->json($sale, 200);

    }

    public function cancel($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['error' => 'Venda não encontrada'], 404);
        }

        $sale->products()->detach();
        $sale->delete();

        return response()->json(['message' => 'Venda cancelada com sucesso'], 200);

    }

    public function addProduct(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $sale = Sale::findOrFail($id);
        $product = Product::findOrFail($request->input('product_id'));

        $sale->products()->attach($product->id, [
            'quantity' => $request->input('quantity'),
            'price' => $product->price,
        ]);

        return response()->json(['message' => 'Produto adicionado à venda com sucesso', 'sale' => $sale], 200);

    }
}
