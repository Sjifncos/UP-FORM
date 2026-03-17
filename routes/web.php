<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\FormController;
    use App\Http\Controllers\PsgcController;
    use App\Http\Controllers\CountryController;
    //use App\Http\Controllers\current_PsgcController;
   
    // Route to display the multi-step form
    Route::get('/', function () {return view('multi-step-form.form');})->name('form');
    Route::get('/date', function () {return view('multi-step-form.datepicker');})->name('datepicker');
    Route::get('/index', function () {return view('multi-step-form.index');});
    Route::get('/thankyoupage', function () {return view('multi-step-form.submission');});

    // REST COUNTRIES Route 
    Route::get('/api/countries', [CountryController::class, 'index']);

    // PSGC Route
    Route::get('/psgc', [PsgcController::class, 'index']);
