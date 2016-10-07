<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StockcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
		
		$stockcards = DB::table('stock_card')
											->join('cf_company', 'stock_card.company_cd', '=', 'cf_company.code')
											->select(	'cf_company.descs as company_descs',
														'stock_card.audit_date')
											->get();
		return view('stockcard', ['stockcards' => $stockcards]);
		
    }

   
}
