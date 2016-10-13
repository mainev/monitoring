<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

class StockcardController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('stockcard');
    }

    public function stockcards(Request $request) {
        $item_limit = $request->input('item_limit');
        
        $stockcards = DB::table("stock_card")
                ->join('cf_company', 'stock_card.company_cd', '=', 'cf_company.code')
                ->join('cf_department', 'stock_card.dept_cd', '=', 'cf_department.code')
                ->join('cf_warehouse', 'stock_card.warehouse_cd', '=', 'cf_warehouse.code')
                ->join('item', 'stock_card.item_cd', '=', 'item.item_cd')
                ->selectRaw("cf_company.descs as company_descs, 
                        CONVERT(varchar(12),stock_card.audit_date,102) as audit_date, 
                        stock_card.audit_user, 
                        cf_department.descs as department, 
                        cf_warehouse.descs as warehouse, 
                        stock_card.doc_no as doc_no, 
                        stock_card.status as status, 
                        stock_card.ref_no as ref_no, 
                        stock_card.item_cd, 
                        item.descs as item_descs, 
                        stock_card.qty, 
                        stock_card.uom, 
                        stock_card.control_no, 
                        stock_card.po_no, 
                        stock_card.receiving_receipt, 
                        stock_card.created_by, 
                        CONVERT(varchar(12),stock_card.created_date,102) as created_date, 
                        stock_card.approved_by, 
                        CONVERT(varchar(12),stock_card.approved_date,102) as approved_date, 
                        stock_card.item_remarks")
                ->orderBy('audit_date', 'desc')
                ->take($item_limit)
                ->get();
        return Response::json($stockcards);
    }
    
    public function get_drafts(Request $request){
        
        $item_category_cd = $request->input('item_category_cd');
        
        $drafts = DB::table("stock_card")
                ->join('cf_company', 'stock_card.company_cd', '=', 'cf_company.code')
                ->join('cf_department', 'stock_card.dept_cd', '=', 'cf_department.code')
                ->join('cf_warehouse', 'stock_card.warehouse_cd', '=', 'cf_warehouse.code')
                ->join('item', 'stock_card.item_cd', '=', 'item.item_cd')
                ->where('stock_card.status', 'Draft')
                ->where('stock_card.item_category_cd', $item_category_cd)
                ->selectRaw("cf_company.descs as company_descs, 
                        CONVERT(varchar(12),stock_card.audit_date,102) as audit_date, 
                        stock_card.audit_user, 
                        cf_department.descs as department, 
                        cf_warehouse.descs as warehouse, 
                        stock_card.doc_no as doc_no, 
                        stock_card.status as status, 
                        stock_card.ref_no as ref_no, 
                        stock_card.item_cd, 
                        item.descs as item_descs, 
                        stock_card.qty, 
                        stock_card.uom, 
                        stock_card.control_no, 
                        stock_card.po_no, 
                        stock_card.receiving_receipt, 
                        stock_card.created_by, 
                        CONVERT(varchar(12),stock_card.created_date,102) as created_date, 
                        stock_card.approved_by, 
                        CONVERT(varchar(12),stock_card.approved_date,102) as approved_date, 
                        stock_card.item_remarks")
                ->orderBy('audit_date', 'desc')
                ->get();
        return Response::json($drafts);
        
    }

}
