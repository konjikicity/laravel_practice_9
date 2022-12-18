<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index() {

        // eroquant
        $values = Test::all();
        $count = Test::count();
        $find = Test::findOrFail(1);
        $where = Test::where('text', '=', 'aaa')->get();

        $query = DB::table('tests')->where('text', '=', 'bbb')->select('id', 'text')->get();

        dd($query);

        return view('tests.test', compact('values'));
    }
}
