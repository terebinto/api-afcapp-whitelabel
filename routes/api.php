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

        
        
        
        Route::prefix('user')->group(function () {
            Route::get('/', [UserApiController::class, 'index']);
            Route::get('/{id}', [UserApiController::class, 'show']);
            Route::post('{id}/update', [UserApiController::class, 'update']);
            Route::post('{id}/redessociais', [UserApiController::class, 'redessociais']);
            Route::post('{id}/redessociais/remover', [UserApiController::class, 'removerRedessociais']);
            Route::get('/{id}/solicitacoes', [UserApiController::class, 'solicitacoes']);
            Route::get('/{id}/questionario', [UserApiController::class, 'questionario']); 
            Route::get('/{id}/proposta', [UserApiController::class, 'proposta']);  
            Route::get('/{id}/veiculo', [UserApiController::class, 'veiculo']);            
        });

        Route::prefix('tiposeguro')->group(function () {
            Route::get('/', [TipoSeguroApiController::class, 'index']);
        });

        Route::prefix('questionario')->group(function () {
            Route::get('/{id}', [QuestionarioApiController::class, 'index']);
            Route::post('/{id}/resposta', [QuestionarioApiController::class, 'inserirResposta']);
            Route::post('/{id}/salvar', [QuestionarioApiController::class, 'salvarRespostas']);
        });

        Route::prefix('solicitacao')->group(function () {
            Route::post('/', [SolicitacaoApiController::class, 'store']);
            Route::post('/{id}/inativar', [SolicitacaoApiController::class, 'delete']);
            Route::post('/{id}/iniciar', [SolicitacaoApiController::class, 'iniciar']);
            Route::post('/{id}/atualizar', [SolicitacaoApiController::class, 'edit']);
        });

        Route::prefix('cobertura')->group(function () {
            Route::get('/{id}', [CoberturaApiController::class, 'find']);
            Route::post('/{id}/salvar', [CoberturaApiController::class, 'salvarRespostas']);
        });

        Route::prefix('seguro')->group(function () {
            Route::get('/solicitacao', [SolicitacaoSeguradoraApiController::class, 'solicitacao']);              
        });

        Route::prefix('proposta')->group(function () {
             Route::post('/iniciar', [SolicitacaoSeguradoraApiController::class, 'propostaIniciar']);
             Route::get('/{id}', [SolicitacaoSeguradoraApiController::class, 'show']);
             Route::post('/{id}/cobertura/incluir', [SolicitacaoSeguradoraApiController::class, 'incluirCobertura']);
             Route::post('/{id}/franquia/incluir', [SolicitacaoSeguradoraApiController::class, 'incluirFranquia']);
             Route::post('/{id}/enviar', [SolicitacaoSeguradoraApiController::class, 'enviar']);  
             Route::get('/vertodas', [SolicitacaoSeguradoraApiController::class, 'vertodas']);  
             Route::get('/', [SolicitacaoSeguradoraApiController::class, 'index']);           
               
        });

        Route::prefix('franquia')->group(function () {
            Route::get('/', [FranquiaApiController::class, 'index']);   
              
       });

        



    });

});
