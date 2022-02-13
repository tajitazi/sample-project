<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryDeleteController extends Controller
{
    //
    public function delete($id){
        return "delete_HistoryDelete:id=" . $id;
    }
}
