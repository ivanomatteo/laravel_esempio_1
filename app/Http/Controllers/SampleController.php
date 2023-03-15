<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    function sample(Request $request)
    {
        return [
            'a' => $this->base()->where('name','like','%e%')->get(),
            'b' => $this->base()
            ->where('name','like','%i%')
            ->get(),
        ];
    }

    private function base()
    {
        return DB::table('users')
            ->where('id', '<', 6);
    }
}
