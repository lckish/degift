<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Order\StoreRequest;
use App\Models\Order;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Order::firstOrCreate([
            'email'=>$data['email']
        ], $data);
        return redirect()->route('order.index');
    }
}
