<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\SeasonTeam;
use App\Models\Team;
use App\Models\Matchs;
use App\Models\Matchday;
use App\Models\Tournament;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;



class MatchsControllerMobile extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $model;

    protected $user;

    public function __construct(Season $modelConstructor, Request $request)
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
    public function played($id)
    {
        $mysqlRegister = Season::find($id);

        if (!$mysqlRegister) {
            return response()->json(['error' => 'Temporada não encontrada!'], 200);
        }

        $matchs = DB::table('nx510_bl_matchday')
            ->join('nx510_bl_match', 'nx510_bl_matchday.id', '=', 'nx510_bl_match.m_id')
            ->where('nx510_bl_matchday.s_id', '=', $id)
            ->where('nx510_bl_match.m_played', '=', '1')
            ->orderByRaw('nx510_bl_matchday.id DESC')
            ->paginate(30);

       
            foreach ($matchs  as $m) {

                $team1 = Team::find($m->team1_id);
                $team2 = Team::find($m->team2_id);
                $m->team1_id=$team1;
                $m->team2_id=$team2;
            }    


        //updated, return success response
        return response()->json([
            $matchs,
        ], Response::HTTP_OK);


       
    }

       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mysqlRegister = Season::find($id);

        if (!$mysqlRegister) {
            return response()->json(['error' => 'Temporada não encontrada!'], 200);
        }

        $matchs = DB::table('nx510_bl_matchday')
            ->join('nx510_bl_match', 'nx510_bl_matchday.id', '=', 'nx510_bl_match.m_id')
            ->where('nx510_bl_matchday.s_id', '=', $id)
            ->where('nx510_bl_match.m_played', '=', '0')
            ->orderByRaw('nx510_bl_matchday.id ASC')
            ->paginate(30);

       
            foreach ($matchs  as $m) {

                $team1 = Team::find($m->team1_id);
                $team2 = Team::find($m->team2_id);
                $m->team1_id=$team1;
                $m->team2_id=$team2;
            }    


        //updated, return success response
        return response()->json([
            $matchs,
        ], Response::HTTP_OK);


       
    }

    
    

}
