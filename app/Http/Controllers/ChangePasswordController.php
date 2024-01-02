<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use TCG\Models\User;

class ChangePasswordController extends Controller
{
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|password',
            'new_password' => 'required|confirmed|min:8',
        ], [
            'current_password.required' => '❗ Lütfen mevcut şifreni gir.',
            'current_password.password' => '❗ Mevcut şifre yanlış.',
            'new_password.required' => '❗ Lütfen yeni şifre gir.',
            'new_password.min' => '❗Yeni şifre en az 8 karakter olmalı.',
            'new_password.confirmed' => '❗ Yeni şifren onay şifresiyle uyuşmuyor.',
        ]);
    
        auth()->user()->update([
            'password' => Hash::make($request->new_password),
        ]);
    
        return redirect()->back()->with('success', 'Şifreniz başarıyla değiştirildi.');
    }
    
    
}
