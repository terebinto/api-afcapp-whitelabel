<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Event;
use App\Models\Team;
use App\Models\Player;
use App\Models\Matchs;
use App\Models\MatchEvent;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MatchEventController extends Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $model;

    protected $user;

    public function __construct(MatchEvent $modelConstructor, Request $request)
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


        // validate incoming request

        $validator = Validator::make($request->all(), [
            'events' => 'required|array|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }


        foreach ($dataForm['events'] as $resposta) {

            $cobRes = new MatchEvent();
            $cobRes->e_id = $resposta['e_id'];
            $cobRes->player_id = $resposta['player_id'];
            $cobRes->match_id = $resposta['match_id'];
            $cobRes->ecount = $resposta['ecount'];
            $cobRes->minutes = $resposta['minutes'];
            $cobRes->t_id = $resposta['t_id'];

            $dataT = Team::where('id', '=', $cobRes->t_id)->first();

            if (!$dataT) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Equipe invalida',
                    'data' => $cobRes,
                ], 409);
            }

            $dataT2 = Player::where('id', '=', $cobRes->player_id)->first();

            if (!$dataT2) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Atleta invalido',
                    'data' => $cobRes,
                ], 409);
            }

            $dataT3 = Event::where('id', '=', $cobRes->e_id)->first();

            if (!$dataT3) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Evento invalido',
                    'data' => $cobRes,
                ], 409);
            }

            $dataT4 = Matchs::where('id', '=', $resposta['match_id'])->first();

            if (!$dataT4) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Partida invalida',
                    'data' => $cobRes,
                ], 409);
            }

            array_push($array, $cobRes);
        }

        foreach ($array as $st) {

            $st->save();
        }


        return response()->json([
            'type' => 'success',
            'message' => 'Eventos cadastradas com sucesso',
            'data' => $array,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $mysqlRegister = MatchEvent::find($id);

        if (!$mysqlRegister) {
            return response()->json(['error' => 'Valor não encontrado!'], 200);
        }

        $mysqlRegister->delete();

        return response()->json([
            'success' => true,
            'message' => 'Evento excluído com sucesso'
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataForm = $request->all();

        $array = array();

        // validate incoming request

        $validator = Validator::make($request->all(), [
            'events' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }

        //limpar eventos
        $res = MatchEvent::where('match_id', '=', $id)->delete();

        foreach ($dataForm['events'] as $resposta) {

            $cobRes = new MatchEvent();
            $cobRes->e_id = $resposta['e_id'];
            $cobRes->player_id = $resposta['player_id'];
            $cobRes->match_id = $resposta['match_id'];
            $cobRes->ecount = $resposta['ecount'];
            $cobRes->minutes = $resposta['minutes'];
            $cobRes->t_id = $resposta['t_id'];

            $dataT = Team::where('id', '=', $cobRes->t_id)->first();

            if (!$dataT) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Equipe invalida',
                    'data' => $cobRes,
                ], 409);
            }

            $dataT2 = Player::where('id', '=', $cobRes->player_id)->first();

            if (!$dataT2) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Atleta invalido',
                    'data' => $cobRes,
                ], 409);
            }

            $dataT3 = Event::where('id', '=', $cobRes->e_id)->first();

            if (!$dataT3) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Evento invalido',
                    'data' => $cobRes,
                ], 409);
            }

            $dataT4 = Matchs::where('id', '=', $resposta['match_id'])->first();

            if (!$dataT4) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Partida invalida',
                    'data' => $cobRes,
                ], 409);
            }

            array_push($array, $cobRes);
        }

        foreach ($array as $st) {

            $st->save();
        }


        return response()->json([
            'type' => 'success',
            'message' => 'Eventos atualizados com sucesso',
            'data' => $array,
        ], 200);
    }
}
