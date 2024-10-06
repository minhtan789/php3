<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThuctapController extends Controller
{
    public function tinhtich($a, $b) {
        // return view('tinhtich', ['kq' => $a * $b ]);
        $c = $a + $b;
        return $c;
}
}
