<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // welcome.blade.php এর পরিবর্তে সরাসরি একটি মেসেজ রিটার্ন করবে
    return "BCB Academy - Deployment Test Successful!";
});