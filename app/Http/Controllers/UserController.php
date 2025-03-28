<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|integer|min:18|max:100',
        ]);

        return response()->json(['message' => 'Foydalanuvchi muvaffaqiyatli ro‘yxatdan o‘tdi!']);
    }
}
