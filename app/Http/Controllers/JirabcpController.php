<?php

namespace App\Http\Controllers;
use App\Models\Jirabcp;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class JirabcpController extends Controller
{
    public function getJira(){

        
        $mem = Jirabcp::where("Status","In test")->get() ;
        $response = [
            'Status' => $mem 
        ];

        return response($mem, 201);
    }



    public function getD(){

        
        $mem = Jirabcp::select("ResolutionDate")->get() ;
        $n = 999;
        $tab=[];
        for($i = 1 ; $i<=$n ; $i++)
        {

        $days=0;
        $date1 = $mem[$i]; 

        $date2 = "2022-04-02T14:43:38.000+0100"; 
        
        $diff = abs(strtotime($date2) - strtotime($date1)); 
        
        $years   = floor($diff / (365*60*60*24)); 
        $months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
        $days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        
        $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
        
        $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
        
        $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 




        if ($days > 60 )
        {
            $tab[$i] = $mem[$i];
        }

        }
        $response = [
            'tab' => $tab,
        ];
    
        return response($response, 201);
    }



    public function getData(){

        $offset=60*60; //converting 1 hours to seconds.
        $dateFormat="d-m-Y H:i";
        $timeNdate=gmdate($dateFormat, time()+$offset);

        $response = [
            'Status' => $timeNdate,
        ];

        return response($timeNdate, 201);
    }



    public function getDate(){



        
    




        $date1 = "2022-12-29T12:38:26.000+0100"; 

        $mem = Jirabcp::select("ResolutionDate")->get() ;
        $tab=[];
        $x=-1;
        for($i = 0 ; $i<=10 ; $i++)
        {
        
            $diff = abs(strtotime($date1) - strtotime($mem[$i])); 
        
            $years   = floor($diff / (365*60*60*24)); 
            $months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
            $days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        
            $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
        
            $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
        
            $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 
        
            if ($days<50)
            {
                $x=$x+1;
                $tab[$x]=$mem[$i];
                $days=0;

            }
        }
        
    $response = [
        'Status' => $tab,
    ];

    return response($tab, 201);
}

    
}