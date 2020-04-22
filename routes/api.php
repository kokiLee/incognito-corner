<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['cors'])->group(function () {
    
        /** STORIES PART */
    Route::get('/unconfirmed-stories', 'UnconfirmedStoryController@getAll');
    Route::post('/unconfirmed-stories', 'UnconfirmedStoryController@store');
    Route::put('/unconfirmed-stories/{id}', 'UnconfirmedStoryController@update');

    Route::get('/recent/funny-events', 'FunnyEventController@getAllRecent');
    Route::get('/recent/seek-advice', 'SeekAdviceController@getAllRecent');
    Route::get('/recent/confessions', 'ConfessionController@getAllRecent');

    Route::get('/popular/funny-events', 'FunnyEventController@getAllPopular');
    Route::get('/popular/seek-advice', 'SeekAdviceController@getAllPopular');
    Route::get('/popular/confessions', 'ConfessionController@getAllPopular');

    Route::put('/funny-events/{id}', 'FunnyEventController@update');
    Route::put('/seek-advice/{id}', 'SeekAdviceController@update');
    Route::put('/confessions/{id}', 'ConfessionController@update');
    /** STORIES PART */


    /** COMMENTS PART */
    Route::get('/funny-events/{id}/comments', 'FunnyEventCommentController@getAllWithStory');
    Route::get('/seek-advice/{id}/comments', 'SeekAdviceCommentController@getAllWithStory');
    Route::get('/confessions/{id}/comments', 'ConfessionCommentController@getAllWithStory');

    Route::post('/funny-events-comments', 'FunnyEventCommentController@store');
    Route::post('/seek-advice-comments', 'SeekAdviceCommentController@store');
    Route::post('/confessions-comments', 'ConfessionCommentController@store');

    Route::post('/funny-events-subcomments', 'FunnyEventSubcommentController@store');
    Route::post('/seek-advice-subcomments', 'SeekAdviceSubcommentController@store');
    Route::post('/confessions-subcomments', 'ConfessionSubcommentController@store');

    Route::put('/funny-events-comments/{id}', 'FunnyEventCommentController@update');
    Route::put('/seek-advice-comments/{id}', 'SeekAdviceCommentController@update');
    Route::put('/confessions-comments/{id}', 'ConfessionCommentController@update');

    Route::put('/funny-events-subcomments/{id}', 'FunnyEventSubcommentController@update');
    Route::put('/seek-advice-subcomments/{id}', 'SeekAdviceSubcommentController@update');
    Route::put('/confessions-subcomments/{id}', 'ConfessionSubcommentController@update');
    /** COMMENTS PART */


    /** SEND MAIL */
    Route::post('/send-mail', 'SendEmailController@send');
    /** SEND MAIL */

});