<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $request, $product;

    public function __construct(Request $request,
                                Product $product)
    {
        $this->request = $request;
        $this->product = $product;
    }

    public function home()
    {
        return view('website.pages.home');
    }
}
