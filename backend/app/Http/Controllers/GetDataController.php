<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use app\Models\GetData;


class GetDataController extends Controller
{
    public function getData(){
        $data = DB::select('SELECT * FROM test.tb_projeto_rouanet_teste');
        return response($data, 200);
    }
}
