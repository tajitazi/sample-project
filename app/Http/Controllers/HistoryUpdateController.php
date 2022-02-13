<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryUpdateController extends Controller
{
    //
    public function update($id){
        return "update_HistoryUpdate:id=" . $id;
    }
}
