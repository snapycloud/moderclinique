<?php

Route::post('/consultation/', 'Client@postConsultation');
Route::post('/article/comment', 'Client@postComments');
Route::post('/cast/', 'Client@postCase');
Route::post('/contact/', 'Client@postCotnact');
Route::post('/send/sms', 'Client@postSms');
Route::post('/article/rate', 'Client@postRate');
