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
//        $stockcards = DB::table('stock_card')
//                ->join('cf_company', 'stock_card.company_cd', '=', 'cf_company.code')
//                ->join('cf_department', 'stock_card.dept_cd', '=', 'cf_department.code')
//                ->join('cf_warehouse', 'stock_card.warehouse_cd', '=', 'cf_warehouse.code')
//                ->join('item', 'stock_card.item_cd', '=', 'item.item_cd')
//                ->select('cf_company.descs as company_descs', 
//                        'stock_card.audit_date', 
//                        'stock_card.audit_user', 
//                        'cf_department.descs as department', 
//                        'cf_warehouse.descs as warehouse', 
//                        'stock_card.doc_no as doc_no', 
//                        'stock_card.status as status', 
//                        'stock_card.ref_no as ref_no', 
//                        'stock_card.item_cd', 
//                        'item.descs as item_descs', 
//                        'stock_card.qty', 
//                        'stock_card.uom', 
//                        'stock_card.control_no', 
//                        'stock_card.po_no', 
//                        'stock_card.receiving_receipt', 
//                        'stock_card.created_by', 
//                        'stock_card.created_date', 
//                        'stock_card.approved_by', 
//                        'stock_card.approved_date', 
//                        'stock_card.item_remarks')
//                ->orderBy('audit_date', 'desc')
//                ->get();
//        return view('stockcard', ['stockcards' => $stockcards]);
        return view('stockcard');
    }

    public function stockcards() {
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
                ->take(500)
                ->get();
        return Response::json($stockcards);
    }

}
