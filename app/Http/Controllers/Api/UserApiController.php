<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\QuestionarioRespostas;
use App\Models\Solicitacao;
use App\Models\User;
use App\Models\Veiculo;
use App\Models\Proposta;
use App\Models\UsuarioRedesSociais;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserApiController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $model;

    public function __construct(User $users, Request $request)
    {
        $this->model = $users;
        $this->request = $request;

    }

    /**
     * @OA\Get(
     *      path="/v1/user",
     *      operationId="listUsers",
     *      tags={"Users"},
     *      summary="List Users",
     *      description="List Users",     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *       ),
     *      @OA\Response(
     *          response=402,
     *          description="Error show action plan"
     *      )
     * )
     */


    

    public function veiculo($id)
    {

        $veiculo = Veiculo::where('user_id', '=', $id)->get()->first();

        if (!$veiculo) {
            return response()->json([
                'type' => 'error',
                'message' => 'Usuário sem veículo cadastrado. ',
                'data' => '',
            ], 200);
        }
      
        return response()->json($veiculo, 200);
    }


    public function index()
    {

        $data = $this->model->paginate();

        return response()->json($data, 200);
    }

    public function questionario($id)
    {
        //verificar se preciso atualizar ou salvar pela primeira vez
        $questionarioResposta = QuestionarioRespostas::where('user_id', '=', $id)->paginate();

        return response()->json([
            'type' => 'success',
            'message' => 'Listas de respostas retornado com sucesso',
            'data' => $questionarioResposta,
        ], 200);

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
            'email' => 'required|email|unique:users',
            'cpfCnpj' => 'unique:users',
            'password' => 'required',
            'user_type' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }

        $pass = bcrypt($request->password);
        $dataForm['password'] = $pass;

        $data = $this->model->create($dataForm);

        return response()->json([
            'type' => 'success',
            'message' => 'Usuário cadastrado com sucesso',
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
        $user = User::with('redessociais')->find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario não encontrado!'], 200);
        }

        return response()->json([
            'type' => 'success',
            'message' => 'Operation sucess',
            'data' => $user,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removerRedessociais($id)
    {

        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario não encontrado!'], 200);
        }

        $user->delete();

        return response()->json([
            'type' => 'success',
            'message' => 'Informações de redes sociais removida.',
            'data' => '',
        ], 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function redessociais(Request $request, $id)
    {
        $dataForm = $request->all();

        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario não encontrado!'], 200);
        }

        $usuarioRedesSociais = UsuarioRedesSociais::where('user_id', '=', $id)
            ->first();

        if ($usuarioRedesSociais) {
            $usuarioRedesSociais->twitter = $dataForm['twitter'];
            $usuarioRedesSociais->facebook = $dataForm['facebook'];
            $usuarioRedesSociais->instagram = $dataForm['instagram'];
            $usuarioRedesSociais->save();

            return response()->json([
                'type' => 'success',
                'message' => 'Informações de redes sociais atualizadas.',
                'data' => $usuarioRedesSociais,
            ], 200);
        } else {
            $usuarioRedesSociais = new UsuarioRedesSociais();
            $usuarioRedesSociais->twitter = $dataForm['twitter'];
            $usuarioRedesSociais->facebook = $dataForm['facebook'];
            $usuarioRedesSociais->instagram = $dataForm['instagram'];
            $usuarioRedesSociais->user_id = $id;
            $usuarioRedesSociais->save();

            return response()->json([
                'type' => 'success',
                'message' => 'Informações de redes sociais adicionadas.',
                'data' => $usuarioRedesSociais,
            ], 200);

        }

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
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario não encontrado!'], 200);
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'cpfCnpj' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        if ($request->user_type) {
            $user->user_type = $request->user_type;
        }

        if ($request->email) {
            $user->email = $request->email;
        }

        if ($request->tipoPessoa) {
            $user->tipoPessoa = $request->tipoPessoa;
        }

        if ($request->endereco) {
            $user->endereco = $request->endereco;
        }

        if ($request->numero) {
            $user->numero = $request->numero;
        }

        if ($request->estado) {
            $user->estado = $request->estado;
        }

        if ($request->cidade) {
            $user->cidade = $request->cidade;
        }

        if ($request->complemento) {
            $user->complemento = $request->complemento;
        }

        if ($request->cpfCnpj) {
            $user->cpfCnpj = $request->cpfCnpj;
        }

        if ($request->telefone) {
            $user->telefone = $request->telefone;
        }

        if ($request->celular) {
            $user->celular = $request->celular;
        }

        if ($request->nomeFantasia) {
            $user->nomeFantasia = $request->nomeFantasia;
        }

        if ($request->nomeEmpresa) {
            $user->nomeEmpresa = $request->nomeEmpresa;
        }

        if ($request->lastname) {
            $user->lastname = $request->lastname;
        }

        if ($request->name) {
            $user->name = $request->name;
        }

        if ($request->headline) {
            $user->headline = $request->headline;
        }

        if ($request->cep) {
            $user->cep = $request->cep;
        }

        $user->save();
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function solicitacoes($id)
    {    

        $user = User::with('solicitacao')->find($id);
        $userRet = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario não encontrado!'], 200);
        }

        $retorno["user"] = $userRet;
        $arraySolicitacao = array();

        foreach ($user->solicitacao as $ss) {

            $solicitacao = Solicitacao::with('cobertura')->with('tipoSeguro')->find($ss->id);

            if ($solicitacao->tipo_seguro_id=="1"){
                $veiculo = Veiculo::where('user_id', '=', $user->id)->get()->first();
                $solicitacao["veiculo"]=$veiculo;
            }

            array_push($arraySolicitacao, $solicitacao);

        }
        
        $retorno["solicitacoes"] = $arraySolicitacao;
       
       
        return response()->json([
            'type' => 'success',
            'message' => 'Lista de solicitações disponíveis.',
            'data' => $retorno,
        ], 200);

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function proposta($id)
    {    

        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario não encontrado!'], 200);
        }

        $proposta = Proposta::where('user_id', '=', $id)->where('status', '=', "A")->with('cobertura')->with('franquia')->paginate();
             
       
       
       
        return response()->json([
            'type' => 'success',
            'message' => 'Lista de propostas disponíveis para cotação.',
            'data' => $proposta,
        ], 200);

    }



    








}
