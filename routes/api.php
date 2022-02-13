<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# 一覧取得
Route::get('history_list','App\Http\Controllers\HistoryListController@index');

# 投稿内容作成
Route::post('history_create', 'App\Http\Controllers\HistoryCreateController@create');

# 投稿表示
Route::get('history/{id}','App\Http\Controllers\HistoryDetailController@show');

# 投稿編集
# patchはリソースの一部を変更
Route::patch('/history_update/{id}' , 'App\Http\Controllers\HistoryUpdateController@update');

# 投稿削除
Route::delete('/history_delete/{id}', 'App\Http\Controllers\HistoryDeleteController@delete');