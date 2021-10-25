<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PetShop;


class PetShopControllerAPI extends Controller
{

    public function index()
    {
        $shopsInfo = PetShop::all();

        return response()->json(['shopInfo'=>$shopsInfo],200);
    }

}
