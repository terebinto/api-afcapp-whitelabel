<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Team;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class TeamControllerMobile extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $model;

    protected $user;

    public function __construct(Team $modelConstructor, Request $request)
    {
        $this->model = $modelConstructor;
        $this->request = $request;
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Team::with('players')->where('id', '=', $id)->paginate();

        foreach ($data   as $teams) {

            foreach ($teams['players']  as $player) {

                $url = "https://ccfutebolsociety.com/api/v1/image?filename=https://ccfutebolsociety.com/storage/players/";
                $img = $player->def_img;
                $player->def_img =  $url.$img;   
                
            }

             
        }    



       

        //updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'Operação realizada com sucesso',
            'data' => $data 
        ], Response::HTTP_OK);
    }



}
