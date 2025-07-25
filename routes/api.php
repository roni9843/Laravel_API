<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

// routes/api.php

Route::get('/demoapigetapi', function (Request $request) {
    $params = $request->query();
    return response()->json(['message' => 'this is get api without token', 'params' => $params]);
});

Route::post('/demoapipostapi', function (Request $request) {
    $data = $request->all();
    Log::info('Received POST data:', $data);
    return response()->json(['message' => 'this is post api without token', 'data' => $data], 202);
});




Route::get('/apicall', [HomeController::class, 'index']);

