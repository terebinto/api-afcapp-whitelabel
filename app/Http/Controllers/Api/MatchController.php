<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Matchs;
use App\Models\Team;
use App\Models\Matchday;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MatchController extends Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $model;

    protected $user;

    public function __construct(Matchs $modelConstructor, Request $request)
    {
        $this->model = $modelConstructor;
        $this->request = $request;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->model->paginate();

        return response()->json($data, 200);
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
            'matchs' => 'required|array|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }


        foreach ($dataForm['matchs'] as $resposta) {

            $cobRes = new Matchs();
            $cobRes->team1_id = $resposta['team1_id'];
            $cobRes->team2_id = $resposta['team2_id'];
            $cobRes->match_descr = $resposta['match_descr'];
            $cobRes->m_id = $resposta['m_id'];
            $cobRes->score1 = $resposta['score1'];
            $cobRes->score2 = $resposta['score2'];
            $cobRes->published = $resposta['published'];
            $cobRes->is_extra = $resposta['is_extra'];
            $cobRes->m_played = $resposta['m_played'];
            $cobRes->m_date = $resposta['m_date'];
            $cobRes->m_time = $resposta['m_time'];

            $dataT = Team::where('id', '=', $cobRes->team1_id)->first();

            if (!$dataT) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Equipe invalida',
                    'data' => $cobRes,
                ], 409);
            }

            $dataT2 = Team::where('id', '=', $cobRes->team2_id)->first();

            if (!$dataT) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Equipe invalida',
                    'data' => $cobRes,
                ], 409);
            }

            $dataS = Matchday::where('id', '=', $resposta['m_id'])->first();

            if (!$dataS) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Rodada invalida',
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
            'message' => 'Rodadas cadastradas com sucesso',
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
        $mysqlRegister = Matchs::find($id);

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mysqlRegister = Matchs::find($id);

        if (!$mysqlRegister) {
            return response()->json(['error' => 'Valor não encontrado!'], 200);
        }


        //Validate data
        $data = $request->only(
            'm_name',
            'm_descr',
            's_id',
            'is_playoff'
        );


        $validator = Validator::make($data, [
            'm_name' => 'required',
            's_id' => 'exists:App\Models\Season,id',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, update 
        $update = $mysqlRegister->update([
            'm_name' => $request->m_name,
            'm_descr' => $request->m_descr,
            's_id' => $request->s_id,
            'is_playoff' => $request->is_playoff
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Atualização realizada com sucesso',
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

        $mysqlRegister = Matchs::find($id);

        if (!$mysqlRegister) {
            return response()->json(['error' => 'Valor não encontrado!'], 200);
        }

        $mysqlRegister->delete();

        return response()->json([
            'success' => true,
            'message' => 'Rodada excluida com sucesso'
        ], Response::HTTP_OK);
    }
}
