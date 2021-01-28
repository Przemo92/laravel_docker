<?php

namespace App\Http\Controllers;

use App\Models\Palindrome;
use Illuminate\Http\Request;

class PalindromeController extends Controller
{

    public function index()
    {
        return view('palindromes.index');
    }
    public function store(Request $request)
    {

        $palindrome = Palindrome::create([
                'word' => strrev($request['word'])]);

        return view('palindromes.show')->with('palindrome', $palindrome);
    }
}
