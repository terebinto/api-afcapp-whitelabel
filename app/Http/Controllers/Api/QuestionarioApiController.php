<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Questionario;
use App\Models\QuestionarioOpcoes;
use App\Models\QuestionarioRespostas;
use App\Models\User;
use App\Models\Veiculo;
use ErrorException;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class QuestionarioApiController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Questionario::with('opcoes')->where('tipo_seguro_id', '=', $id)->paginate();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvarRespostas(Request $request)
    {
        $dataForm = $request->all();

        $user = new User();
        $limpeza = true;

        foreach ($dataForm as $resposta) {

            $questionarioResposta = QuestionarioRespostas::where('questionario_id', '=', $resposta['pergunta_id'])->where('user_id', '=', $resposta['user_id'])->delete();

            if ($limpeza) {
                $user->id = $resposta['user_id'];
            }

            $questionario = Questionario::where('id', '=', $resposta['pergunta_id'])
                ->first();

            if (!$questionario) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Pergunta não localizada.',
                    'data' => '',
                ], 200);
            }

            //caso for veiculo, validar a placa do carro
            if ($questionario->tipo_seguro_id == "1" && $resposta['pergunta_id'] == "1") {

                try {
                    $stream_opts = [
                        "ssl" => [
                            "verify_peer" => false,
                            "verify_peer_name" => false,
                        ],
                    ];

                    // Attempt to get file contents.
                    $placa = str_replace("-", "", $resposta['resposta']);
                    $client = file_get_contents('https://apicarros.com/v1/consulta/' . $placa . '', false, stream_context_create($stream_opts));

                } catch (ErrorException $exception) {

                    Log::error($exception);
                    return response()->json([
                        'type' => 'error',
                        'message' => 'Não foi possivel obter informações do veículo',
                        'data' => $exception,
                    ], 200);
                } catch (Exception $exception) {
                    Log::error($exception);
                    return response()->json([
                        'type' => 'error',
                        'message' => 'Não foi possivel obter informações do veículo',
                        'data' => $exception,
                    ], 200);
                }

                $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $client);
                $xml = new SimpleXMLElement($response);

                $veiculo = Veiculo::where('user_id', '=',  $resposta['user_id'])->get()->first();

                if ($veiculo) {
                    $veiculo->situacao = $xml->soapBody->ns2getStatusResponse->return->situacao;
                    $veiculo->modelo = $xml->soapBody->ns2getStatusResponse->return->modelo;
                    $veiculo->marca = $xml->soapBody->ns2getStatusResponse->return->marca;
                    $veiculo->cor = $xml->soapBody->ns2getStatusResponse->return->cor;
                    $veiculo->ano = $xml->soapBody->ns2getStatusResponse->return->ano;
                    $veiculo->anoModelo = $xml->soapBody->ns2getStatusResponse->return->anoModelo;
                    $veiculo->placa = $xml->soapBody->ns2getStatusResponse->return->placa;
                    $veiculo->data = $xml->soapBody->ns2getStatusResponse->return->data;
                    $veiculo->uf = $xml->soapBody->ns2getStatusResponse->return->uf;
                    $veiculo->municipio = $xml->soapBody->ns2getStatusResponse->return->municipio;
                    $veiculo->chassi = $xml->soapBody->ns2getStatusResponse->return->chassi;
                    $veiculo->dataAtualizacaoCaracteristicasVeiculo = $xml->soapBody->ns2getStatusResponse->return->dataAtualizacaoCaracteristicasVeiculo;
                    $veiculo->dataAtualizacaoRouboFurto = $xml->soapBody->ns2getStatusResponse->return->dataAtualizacaoRouboFurto;
                    $veiculo->dataAtualizacaoAlarme = $xml->soapBody->ns2getStatusResponse->return->dataAtualizacaoAlarme;
                    $veiculo->save();
                } else {

                    $veiculo = new Veiculo();

                    $veiculo->user_id = $resposta['user_id'];
                    $veiculo->situacao = $xml->soapBody->ns2getStatusResponse->return->situacao;
                    $veiculo->modelo = $xml->soapBody->ns2getStatusResponse->return->modelo;
                    $veiculo->marca = $xml->soapBody->ns2getStatusResponse->return->marca;
                    $veiculo->cor = $xml->soapBody->ns2getStatusResponse->return->cor;
                    $veiculo->ano = $xml->soapBody->ns2getStatusResponse->return->ano;
                    $veiculo->anoModelo = $xml->soapBody->ns2getStatusResponse->return->anoModelo;
                    $veiculo->placa = $xml->soapBody->ns2getStatusResponse->return->placa;
                    $veiculo->data = $xml->soapBody->ns2getStatusResponse->return->data;
                    $veiculo->uf = $xml->soapBody->ns2getStatusResponse->return->uf;
                    $veiculo->municipio = $xml->soapBody->ns2getStatusResponse->return->municipio;
                    $veiculo->chassi = $xml->soapBody->ns2getStatusResponse->return->chassi;
                    $veiculo->dataAtualizacaoCaracteristicasVeiculo = $xml->soapBody->ns2getStatusResponse->return->dataAtualizacaoCaracteristicasVeiculo;
                    $veiculo->dataAtualizacaoRouboFurto = $xml->soapBody->ns2getStatusResponse->return->dataAtualizacaoRouboFurto;
                    $veiculo->dataAtualizacaoAlarme = $xml->soapBody->ns2getStatusResponse->return->dataAtualizacaoAlarme;

                    $veiculo->save();

                }

            }

            $questionarioOpcao = null;
            if (isset($resposta['opcao_pergunta_id'])) {
                $questionarioOpcao = QuestionarioOpcoes::where('id', '=', $resposta['opcao_pergunta_id'])
                    ->first();
            }

            $questionarioResposta = new QuestionarioRespostas();
            $questionarioResposta->user_id = $resposta['user_id'];
            $questionarioResposta->questionario_id = $resposta['pergunta_id'];
            $questionarioResposta->pergunta = $questionario->pergunta;
            $questionarioResposta->resposta = $resposta['resposta'];

            if ($questionarioOpcao) {
                $questionarioResposta->resposta = $questionarioOpcao->opcao;
                $questionarioResposta->pontos = $questionarioOpcao->pontos;
            }

            try {

                $questionarioResposta->save();

            } catch (ErrorException $exception) {

                return response()->json([
                    'type' => 'error',
                    'message' => $exception,
                    'data' => '',
                ], 200);

            } catch (Exception $exception) {

                return response()->json([
                    'type' => 'error',
                    'message' => $exception,
                    'data' => '',
                ], 200);

            }
        }

        //verificar se preciso atualizar ou salvar pela primeira vez
        $questionarioResposta = QuestionarioRespostas::where('user_id', '=', $user->id)->paginate();

        return response()->json($questionarioResposta, 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
