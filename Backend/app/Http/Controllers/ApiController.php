<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Liga;
use App\Chess;


class ApiController extends Controller
{
 

    public function Liga( Request $request ){
        $string_data = $request->input('valor');        
        $obj = new Liga();
        $obj->LoadValue( $string_data );


        $resp = $obj->Champion( $obj->data );
        
        return json_encode( array("output"=>$resp));

    }

    public function Chess( Request $request ){
        $data = $request->input('data');        
        $obj2 = new Chess();
        $obj2->queenMoves( $data );

          return json_encode( array("output"=>$obj2->queenMoves( $data )));

    }

    
}
