<?php

use App\Events\MessageEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send-message', function (Request $request) {
    MessageEvent::dispatch($request->message);
    return response()->json(['status' => 'Message sent!']);
});
