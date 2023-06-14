<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('order.create');
    }
}
