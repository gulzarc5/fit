<?php


Route::get('/', function () {
    return view('website.index');
})->name('website.Home');

//=========== About ============// 

Route::get('/About', function () {
    return view('website.about-us');
})->name('website.about-us');

//=========== Contact ============// 

Route::get('/Contact', function () {
    return view('website.contact-us');
})->name('website.contact-us');


//=========== Web Designing ============// 

Route::get('/Web_Designing', function () {
    return view('website.web_design');
})->name('website.web_design');


//=========== Andriod Application ============// 

Route::get('/Andriod-Application', function () {
    return view('website.andriod');
})->name('website.andriod');


//=========== Web-Development ============// 

Route::get('/Web-Development', function () {
    return view('website.php_train');
})->name('website.php_train');


