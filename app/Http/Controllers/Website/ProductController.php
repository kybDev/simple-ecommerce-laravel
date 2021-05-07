<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $request, $product;

    public function __construct(Request $request, Product $product){
        $this->request = $request;
        $this->product = $product;
    }

    public function home()
    {
        $data = $this->product;
        if($this->request->has('search')){
            $q = $this->request->search;

            $data = $this->product->where('name', 'like', '%'.$q.'%')
                                  ->orWhere('category', 'like', '%'.$q.'%')
                                  ->orWhere('details', 'like', '%'.$q.'%');
        }
        return view('website.pages.home')->with([
            "data" => $data->paginate(5)
        ]);
    }
}
