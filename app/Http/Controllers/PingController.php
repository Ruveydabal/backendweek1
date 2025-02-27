<?php

namespace App\Http\Controllers;

class PingController extends Controller
{
    public function ping()
    {
        $message = "Pong!";
        $title = "Ping";
        $description = "This is a description";
        return view('Ping', [
            "message" => $message,
            "title" => $title, 
            "description" => $description]);
    }
}