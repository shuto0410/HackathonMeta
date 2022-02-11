<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
class MailSendController extends Controller
{
    public function send()
    {
        $to = [
            [
                'email' => 'XXXXX@XXXXX.jp', 
                'name' => 'Test',
            ]
        ];
        Mail::to($to)->send(new OrderShipped());
    }
}
