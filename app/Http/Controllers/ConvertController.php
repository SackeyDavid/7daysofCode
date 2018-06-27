<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertController extends Controller
{
    public function convert(Request $request)
    {
    	$amount = $request->amount;

        $from_currency = $request->from_currency;

        $to_currency = $request->to_currency;

        if($request->ajax())
        {
        	  $apikey = '';

			  $from_Currency = urlencode($from_currency);
			  $to_Currency = urlencode($to_currency);
			  $query =  "{$from_Currency}_{$to_Currency}";

			  $arrContextOptions=array(
				    "ssl"=>array(
				        "verify_peer"=>false,
				        "verify_peer_name"=>false,
				    ),
				); 

			  $json = file_get_contents("https://free.currencyconverterapi.com/api/v5/convert?q={$query}&compact=y", false, stream_context_create($arrContextOptions));
			  $obj = json_decode($json, true);
			  $val = '';

			  if (isset($obj[$query]))
				{
					foreach ($obj[$query] as $data)
					{
						$val = $data;
					}
				}

			  // $val = floatval($obj[$query]);


			  $total = $val * $amount;
			  $total = number_format($total, 2, '.', '');
		        

            return view('convert', compact('amount','to_currency','from_currency', 'total', 'json', 'val', 'query'))->render();
            }

    }	
}
