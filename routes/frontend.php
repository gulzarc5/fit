<?php


Route::get('/', function () {
    return view('website.index');
})->name('website.Home');


Route::group(['namespace'=>'Web'],function(){
    Route::get('/Apply/{id}', 'ApplicationController@applicationSend')->name('web.apply_form');
    Route::post('/Apply/Course', 'ApplicationController@apply')->name('web.apply');
    Route::get('/Pay/Fee/{student_id}/{course_id}', 'ApplicationController@payEnrollFee')->name('web.pay_fee');
    Route::get('/Pay/success/{student_id}/{course_id}', 'ApplicationController@paySuccess')->name('web.pay_success');
});

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

//=========== Web-Development ============// 

// Route::get('/Confirm-Enrollment', function () {
//     return view('website.confirm');
// })->name('website.confirm');


//=========== Receipt ============// 

Route::get('/Receipt', function () {
    return view('website.receipt');
})->name('website.receipt');



