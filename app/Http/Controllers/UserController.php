<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Response;

class UserController extends Controller {

    //
    public function get_users(Request $request) {

        //$username_query = $request->input('q');
        $username_query = "%" . $request->input('q') . "%";
        $stockcards = DB::table("cf_users")
                ->selectRaw("cf_users.username, 
                            cf_users.name")
                ->where('cf_users.status', 1)
                ->where('cf_users.username', 'like', $username_query)
                ->orWhere('cf_users.name', 'like', $username_query)
                ->get();
        return Response::json($stockcards);
    }

}
