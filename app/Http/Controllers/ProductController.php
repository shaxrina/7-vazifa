<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'product_name' => 'required|string|min:3|max:100',
            'price' => 'required|numeric|min:0',
        ]);

        return new JsonResponse(['message' => 'Mahsulot muvaffaqiyatli qo‘shildi!']);
    }
}
