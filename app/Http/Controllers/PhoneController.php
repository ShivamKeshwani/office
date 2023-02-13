<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function index()
    {
        Phone::create(
            ['name' => 'Simran', 'phone_number' => '5897']
        );

    }
}
