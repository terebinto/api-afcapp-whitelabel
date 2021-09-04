<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Matchday;
use App\Models\Matchs;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MatchdayController extends Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $model;

    protected $user;

    public function __construct(Matchday $modelConstructor, Request $request)
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

        // validate incoming request

        $validator = Validator::make($request->all(), [
            'm_name' => 'required|digits_between:1,99',
            's_id' => 'required|exists:App\Models\Season,id',
        ]);



        $dataT = Matchday::where('s_id', '=',  $dataForm['s_id'])->where('m_name', '=',  $dataForm['m_name'])->first();

        if ($dataT) {

            return response()->json([
                'type' => 'error',
                'message' => 'Rodada já esta cadastrada para o campeonato',
                'data' => $dataT,
            ], 406);
        }





        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }


        $data = $this->model->create($dataForm);
        $array = array();


        foreach ($dataForm['matchs'] as $resposta) {

            $cobRes = new Matchs();
            $cobRes->team1_id = $resposta['team1_id'];
            $cobRes->team2_id = $resposta['team2_id'];
            $cobRes->m_date = $resposta['m_date'];
            $cobRes->m_time = $resposta['m_time'];
            $cobRes->match_descr = $resposta['match_descr'];
            $cobRes->m_id = $data->id;
            array_push($array, $cobRes);
        }

        foreach ($array as $st) {

            $st->save();
        }

        $data["matchs"]=$array;

        return response()->json([
            'type' => 'success',
            'message' => 'Rodada cadastrada com sucesso',
            'data' => $data,
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
        $mysqlRegister = Matchday::find($id);

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
        $mysqlRegister = Matchday::find($id);

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

        $mysqlRegister = Matchday::find($id);

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
