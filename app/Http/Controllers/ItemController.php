<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Response;

class ItemController extends Controller {

    //
    public function items(Request $request) {
        $item_category_cd = $request->input('item_category_cd');
        $search_value = $request->input('search_value');

        $items = DB::table("item")
                ->join('item_class', 'item.item_class_cd', '=', 'item_class.code')
                ->join('item_type', 'item.item_type_cd', '=', 'item_type.code')
                ->join('item_category', 'item.item_category_cd', '=', 'item_category.code')
                ->selectRaw("item.item_cd as item_cd, 
                        item.descs as item_descs, 
                        item.uom as item_uom, 
                        item_type.descs as item_type_descs, 
                        item_category.descs as item_category_descs, 
                        item.remarks as remarks, 
                        item_class.descs as item_class_descs")
                ->orderBy('item.descs', 'asc')
                ->where('item.status', '=', 1)
                ->where('item.item_category_cd', '=', $item_category_cd)
                ->where(function($query) use ($search_value) {
                    $query->where('item.descs', 'like', $search_value)
                    ->orWhere('item.uom', 'like', $search_value)
                    ->orWhere('item.item_cd', 'like', $search_value)
                    ->orWhere('item_type.descs', 'like', $search_value)
                    ->orWhere('item_category.descs', 'like', $search_value)
                    ->orWhere('item.remarks', 'like', $search_value)
                    ->orWhere('item_class.descs', 'like', $search_value);
                })
                //  ->take($item_limit)
                ->get();
        return Response::json($items);
    }

}
