<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class ShopController extends Controller
{
    public function index(){
        $area_tokyo = Area::find(1)->shops;
    }
}
