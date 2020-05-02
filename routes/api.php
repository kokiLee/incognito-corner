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

    Route::get('/recent/anecdotes', 'AnecdoteController@getAllRecent');
    Route::get('/recent/seek-advice', 'SeekAdviceController@getAllRecent');
    Route::get('/recent/confessions', 'ConfessionController@getAllRecent');

    Route::get('/popular/anecdotes', 'AnecdoteController@getAllPopular');
    Route::get('/popular/seek-advice', 'SeekAdviceController@getAllPopular');
    Route::get('/popular/confessions', 'ConfessionController@getAllPopular');

    Route::put('/anecdotes/{id}', 'AnecdoteController@update');
    Route::put('/seek-advice/{id}', 'SeekAdviceController@update');
    Route::put('/confessions/{id}', 'ConfessionController@update');
    /** STORIES PART */


    /** COMMENTS PART */
    Route::get('/anecdotes/{id}/comments', 'AnecdoteCommentController@getAllWithStory');
    Route::get('/seek-advice/{id}/comments', 'SeekAdviceCommentController@getAllWithStory');
    Route::get('/confessions/{id}/comments', 'ConfessionCommentController@getAllWithStory');

    Route::post('/anecdotes-comments', 'AnecdoteCommentController@store');
    Route::post('/seek-advice-comments', 'SeekAdviceCommentController@store');
    Route::post('/confessions-comments', 'ConfessionCommentController@store');

    Route::post('/anecdotes-subcomments', 'AnecdoteSubcommentController@store');
    Route::post('/seek-advice-subcomments', 'SeekAdviceSubcommentController@store');
    Route::post('/confessions-subcomments', 'ConfessionSubcommentController@store');

    Route::put('/anecdotes-comments/{id}', 'AnecdoteCommentController@update');
    Route::put('/seek-advice-comments/{id}', 'SeekAdviceCommentController@update');
    Route::put('/confessions-comments/{id}', 'ConfessionCommentController@update');

    Route::put('/anecdotes-subcomments/{id}', 'AnecdoteSubcommentController@update');
    Route::put('/seek-advice-subcomments/{id}', 'SeekAdviceSubcommentController@update');
    Route::put('/confessions-subcomments/{id}', 'ConfessionSubcommentController@update');
    /** COMMENTS PART */


    /** SEND MAIL */
    Route::post('/send-mail', 'SendEmailController@send');
    /** SEND MAIL */

});