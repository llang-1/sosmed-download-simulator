<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Download;

Route::get('/download-api', [Download::class, 'apiDownload']);