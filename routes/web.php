<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $post_data = array();
//     $post_data['slug'] = 345; // Ensure $slug is defined or passed


//     $url = "https://joyhobe.com/test/game";
//     $stream = curl_init();
//     curl_setopt($stream, CURLOPT_URL, $url);
//     curl_setopt($stream, CURLOPT_HEADER, 0);
//     curl_setopt($stream, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($stream, CURLOPT_POSTFIELDS, $post_data);
//   return  $response = curl_exec($stream); // Fixed curl_ex to curl_exec
//    // curl_close($stream);


// });


Route::get('/',[HomeController::class,'index']);

require __DIR__.'/auth.php';
