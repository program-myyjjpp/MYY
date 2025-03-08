<?php

use App\Http\Controllers\Home\PageController;
use App\Http\Controllers\Home\SitemapController;
use Illuminate\Support\Facades\Cache;
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


Route::get('/', [PageController::class, 'index'])->name('home');// HomePage
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/api/search', [PageController::class, 'ajaxSearch'])->name('api.search');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);//SiteMap
Route::get('/delete-cache/{token}', function ($token) {if ($token !== env('CACHE_CLEAR_TOKEN')) {abort(403, '没有权限');}$keys = ['menus', 'information'];foreach ($keys as $key) {Cache::forget($key);}return "所有缓存清除成功";});
Route::get('/api/{link}', [PageController::class, 'getArticlesByCategoryWithPaginationAjax']);
Route::get('/{link}/{articleId}.html', [PageController::class, 'articleDetail'])->name('article');
Route::get('/{link}', [PageController::class, 'categoryByLink'])->name('category.view')->where('link', '[a-zA-Z0-9-]+');
