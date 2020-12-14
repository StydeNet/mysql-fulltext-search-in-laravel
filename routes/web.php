<?php

use App\Models\Chapter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Chapter::query()
        ->when(request('search'), function ($query, $search) {
            $query->select('id', 'title', 'content')
                ->selectRaw(
                    'match(title,content) against(? with query expansion) as score',
                    [$search]
                )
                ->whereRaw(
                    'match(title,content) against(? with query expansion) > 0.0000001',
                    [$search]
                );
        })
        ->get();
});
