<?php

Route::post('/consultation/', 'Client@postConsultation');
Route::post('/cast/', 'Client@postCase');
Route::post('/contact/', 'Client@postCotnact');
Route::post('/send/sms', 'Client@postSms');
