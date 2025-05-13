<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function notion()
    {
        return redirect()->away('https://www.notion.so/174715bcfbd180d5b9c7e957dfee1869?v=174715bcfbd1818697b9000cc3249ae9&pvs=4', 301);
    }
}