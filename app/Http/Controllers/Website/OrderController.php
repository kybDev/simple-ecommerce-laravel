<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    protected $request, $order;

    public function __construct(Request $request,
                                Order $order)
    {
        $this->request = $request;
        $this->order = $order;
    }
}
