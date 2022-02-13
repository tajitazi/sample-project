<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryDetailController extends Controller
{
    //
    public function show($id){
        return "get_HistoryDetail:id=" . $id;
    }
}
