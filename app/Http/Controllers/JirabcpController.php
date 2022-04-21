<?php

namespace App\Http\Controllers;
use App\Models\Jirabcp;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class JirabcpController extends Controller
{
    public function getJira(){
        $mem=Jirabcp::all();
        $response = [
            'all' => $mem,
        ];

        return response($response, 201);
    }




    public function getJi(){
        $results = DB::select('select * from Jirabcp where id = ?', [1]);
    $response = [
        'all' => $results,
    ];

    return response($response, 201);

}
}