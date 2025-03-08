<?php

use App\Http\Controllers\Home\DeleteController;
use App\Http\Controllers\Home\PostArticlesController;
use App\Http\Controllers\Home\SqlInformationController;
use App\Http\Controllers\Home\UpdateResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\VerifyAPIToken;

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

Route::middleware([VerifyAPIToken::class])->group(function () {
    // 单独为 /post 路由应用更高的请求限制
    Route::post('/post', [PostArticlesController::class, 'insertArticle'])->middleware('throttle:api_post');

    // 对其他 API 路由使用默认的请求限制
    Route::middleware('throttle:api')->group(function () {
        Route::post('/update', [UpdateResourceController::class, 'updateResources']);
        Route::post('/sql', [SqlInformationController::class, 'sqlInformation']);
        Route::post('/delete', [DeleteController::class, 'deleteResourceFolder']);
    });
});

