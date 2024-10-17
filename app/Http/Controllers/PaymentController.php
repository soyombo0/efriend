<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YooKassa\Client;

class PaymentController extends Controller
{
    public function create()
    {
        return inertia('Payment/Create');
    }

    public function pay(Request $request)
    {
        $client = new Client();
        $client->setAuth('shopId', 'secretKey');
    }
}
