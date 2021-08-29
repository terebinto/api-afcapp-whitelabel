<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\SeasonTeam;
use App\Models\Team;
use App\Models\Season;

use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class TeamSeasonController extends Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $model;

    protected $user;

    public function __construct(SeasonTeam $modelConstructor, Request $request)
    {
        $this->model = $modelConstructor;
        $this->request = $request;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->all();

        $array = array();
        $arrayDelete = array();


        foreach ($dataForm['teamsSeason'] as $resposta) {

            $cobRes = new SeasonTeam();
            $cobRes->team_id = $resposta['team_id'];
            $cobRes->season_id = $resposta['season_id'];

            $dataT = Team::where('id', '=', $cobRes->team_id)->first();

            if (!$dataT) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Equipe invalida',
                    'data' => $cobRes,
                ], 409);
            }

            $dataS = Season::where('id', '=', $resposta['season_id'])->first();


            if (!$dataS) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Season invalida',
                    'data' => $cobRes,
                ], 409);
            }

            array_push($arrayDelete, $cobRes->season_id);
            array_push($array, $cobRes);
        }

        $res = SeasonTeam::whereIn('season_id', $arrayDelete)->delete();

        foreach ($array as $st) {

            $st->save();
        }


        return response()->json([
            'type' => 'success',
            'message' => 'Time x Temporada cadastrada com sucesso',
            'data' => $array,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $mysqlRegister = SeasonTeam::where('season_id', '=', $id)->get();

        if (!$mysqlRegister) {
            return response()->json(['error' => 'Registro não encontrado!'], 200);
        }

        //updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'Operação realizada com sucesso',
            'data' => $mysqlRegister
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $mysqlRegister = SeasonTeam::where('season_id', '=', $id)->delete();

        if (!$mysqlRegister) {
            return response()->json(['error' => 'Valor não encontrado!'], 200);
        }

        return response()->json([
            'success' => true,
            'message' => 'Equipes do campeonato excluidas com sucesso'
        ], Response::HTTP_OK);
    }
}
