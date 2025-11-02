<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function info($name, $yearNasc)
    {
        $data = [
            'name' => $name,
            'year' => $yearNasc
        ];

        return view('info-user', $data);
    }
}
