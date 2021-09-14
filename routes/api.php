<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TournamentController;
use App\Http\Controllers\Api\SeasonController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\TeamSeasonController;
use App\Http\Controllers\Api\SportController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\MatchdayController;
use App\Http\Controllers\Api\MatchController;
use App\Http\Controllers\Api\MatchEventController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Mobile\SeasonControllerMobile;
use App\Http\Controllers\Mobile\TournamentControllerMobile;
use App\Http\Controllers\Mobile\TeamControllerMobile;
use App\Http\Controllers\Mobile\StandingControllerMobile;
use App\Http\Controllers\Mobile\MatchsControllerMobile;


Route::prefix('v1')->group(function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [UserApiController::class, 'store']);
    Route::resource('dashboard', DashboardController::class); 

    //mobile
    Route::prefix('mobile')->group(function () {
        Route::resource('seasons', SeasonControllerMobile::class); 
        Route::resource('content', ContentControllerMobile::class);
        Route::resource('tournaments', TournamentControllerMobile::class);
        Route::resource('teams', TeamControllerMobile::class);
        Route::resource('standings', StandingControllerMobile::class);
        Route::resource('matchs', MatchsControllerMobile::class);
        Route::get('matchs/{id}/played', [MatchsControllerMobile::class, 'played']); 
    
        


        
        
    }); 
    
    
    Route::middleware('jwt')->group(function () {        
        
        Route::resource('tournaments', TournamentController::class);  
        Route::get('tournaments/seasons/{id}', [SeasonController::class, 'tourseas']); 
        Route::resource('seasons', SeasonController::class);  
        Route::resource('teams', TeamController::class);  
        Route::get('teams/{id}/players', [TeamController::class, 'players']); 
        Route::resource('teamSeason', TeamSeasonController::class);        
        Route::resource('players', PlayerController::class);   
        Route::resource('sports', SportController::class); 
        Route::get('sports/{id}/positions', [SportController::class, 'positions']); 
        Route::get('sports/{id}/events', [SportController::class, 'events']); 
        Route::resource('matchdays', MatchdayController::class);  
        Route::get('tournaments/seasons/{id}/matchdays', [SeasonController::class, 'matchdays']); 
        Route::resource('matchs', MatchController::class); 
        Route::get('tournaments/seasons/{id}/matchdays/matchs', [SeasonController::class, 'matchs']); 
        Route::get('tournaments/seasons/{id}/matchdays/{idMatch}', [SeasonController::class, 'matchsporid']);
        Route::resource('matchevents', MatchEventController::class); 
      
        
        

    });

});
