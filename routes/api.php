<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TipoSeguroApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuestionarioApiController;
use App\Http\Controllers\Api\TipoUsuarioApiController;
use App\Http\Controllers\Api\SolicitacaoApiController;
use App\Http\Controllers\Api\CoberturaApiController;
use App\Http\Controllers\Api\SolicitacaoSeguradoraApiController;
use App\Http\Controllers\Api\FranquiaApiController;
use App\Http\Controllers\Api\TournamentController;
use App\Http\Controllers\Api\SeasonController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\TeamSeasonController;
use App\Http\Controllers\Api\SportController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\MatchdayController;
use App\Http\Controllers\Api\MatchController;



Route::prefix('v1')->group(function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [UserApiController::class, 'store']);

    Route::prefix('tipousuario')->group(function () {
        Route::get('/', [TipoUsuarioApiController::class, 'index']);
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
        Route::resource('matchdays', MatchdayController::class);  
        Route::get('tournaments/seasons/{id}/matchdays', [SeasonController::class, 'matchdays']); 
        Route::resource('matchs', MatchController::class); 
        Route::get('tournaments/seasons/{id}/matchdays/matchs', [SeasonController::class, 'matchs']); 
      
    });

});
