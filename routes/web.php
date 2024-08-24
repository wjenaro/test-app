<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello, World!';
});
// routes/web.php

Route::get('/user/{id}', function ($id) {
    return "User ID is: " . $id;
});
// routes/web.php

Route::get('/user/{name?}', function ($name = 'Guest') {
    return "Hello, " . $name;
});
