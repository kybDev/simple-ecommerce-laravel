<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;

class CartController extends Controller
{
    protected $request, $session, $product;

    public function __construct(Request $request, Session $session, Product $product){
        $this->request = $request;
        $this->session = $session;
        $this->product = $product;
    }

    public function cart(){
        return view('website.pages.cart_order');
    }

    public function add($id){


        if(!$this->session->has('cart')) $this->session->put('cart', []);

        // $this->session->push('cart', [$id]);

        dd( $this->session->get('cart'));
    }

}
