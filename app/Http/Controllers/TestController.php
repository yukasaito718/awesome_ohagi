<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

//クエリビルダ用DBファサード
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    //
    public function index()
    {
        $values = Test::all();

        $tests = DB::table('tests')
        ->select('id')
        ->get();
        // die + var_dumpをセットにしたみたいなコマンド
        // dd($tests);

        //veiewファイルに飛ばす
        return view('tests.test',compact('values'));
    }
}
