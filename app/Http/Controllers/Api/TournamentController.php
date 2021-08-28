<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Tournament;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class TournamentController extends Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $model;

    protected $user;

    public function __construct(Tournament $modelConstructor, Request $request)
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required|unique:nx510_bl_tournament',          
            'descr' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }


        $data = $this->model->create($dataForm);

        return response()->json([
            'type' => 'success',
            'message' => 'Campeonato cadastrado com sucesso',
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
        $mysqlRegister = Tournament::find($id);

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
        $mysqlRegister = Tournament::find($id);

        if (!$mysqlRegister) {
            return response()->json(['error' => 'Valor não encontrado!'], 200);
        }


        //Validate data
        $data = $request->only(
            'name',
            'descr',
            'logo',
            'published',
            'path',
            'email',
            'sigla',
            'ordem',
            'id_cidade',
            'is_federado',
            'id_noticia',
            'id_banner',
            'parceiro'
        );


        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required',
            'descr' => 'required'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, update 
        $update = $mysqlRegister->update([
            'name' => $request->name,
            'email' => $request->email,
            'descr' => $request->descr,
            'logo' => $request->logo,
            'descr' => $request->descr,
            'published' => $request->published,
            'path' => $request->path,
            'sigla' => $request->sigla,
            'ordem' => $request->ordem,
            'id_cidade' => $request->id_cidade,
            'is_federado' => $request->is_federado,
            'id_noticia' => $request->id_noticia,
            'id_banner' => $request->id_banner,
            'parceiro' => $request->parceiro
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
        
        $mysqlRegister = Tournament::find($id);

        if (!$mysqlRegister) {
            return response()->json(['error' => 'Valor não encontrado!'], 200);
        }        
        
        $mysqlRegister->delete();

        return response()->json([
            'success' => true,
            'message' => 'Campeonato excluido com sucesso'
        ], Response::HTTP_OK);
    }
}
