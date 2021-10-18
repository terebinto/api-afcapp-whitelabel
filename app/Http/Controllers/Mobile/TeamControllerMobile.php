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
use Illuminate\Support\Facades\DB;

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
    public function seasonteam($seasson, $id)
    {
        $data = Team::with('players')->where('id', '=', $id)->paginate();

        foreach ($data   as $teams) {

            foreach ($teams['players']  as $player) {

                $url = "https://ccfutebolsociety.com/api/v1/image?filename=https://ccfutebolsociety.com/storage/players/";
                $img = $player->def_img;
                $player->def_img =  $url . $img;


                $amarelos = DB::table('nx510_bl_matchday')
                    ->join('nx510_bl_match', 'nx510_bl_matchday.id', '=', 'nx510_bl_match.m_id')
                    ->join('nx510_bl_match_events', 'nx510_bl_match.id', '=', 'nx510_bl_match_events.match_id')
                    ->where('nx510_bl_matchday.s_id', '=', $seasson)
                    ->where('nx510_bl_match.m_played', '=', '1')
                    ->where('nx510_bl_match_events.e_id', '=', '1')
                    ->where('nx510_bl_match_events.player_id', '=',  $player->id)
                    ->orderByRaw('nx510_bl_matchday.id ASC')
                    ->select('player_id')
                    ->get();


                $amarelosTotal = array();

                foreach ($amarelos  as $m) {
                    array_push($amarelosTotal, $m->player_id);
                }

                $filtersAmarelo = array_count_values($amarelosTotal);

                $player["yellow"] = "0";
                foreach ($filtersAmarelo  as $key  => $val) {
                    $player["yellow"] = $val;
                }

                $reds = DB::table('nx510_bl_matchday')
                    ->join('nx510_bl_match', 'nx510_bl_matchday.id', '=', 'nx510_bl_match.m_id')
                    ->join('nx510_bl_match_events', 'nx510_bl_match.id', '=', 'nx510_bl_match_events.match_id')
                    ->where('nx510_bl_matchday.s_id', '=', $seasson)
                    ->where('nx510_bl_match.m_played', '=', '1')
                    ->where('nx510_bl_match_events.e_id', '=', '2')
                    ->where('nx510_bl_match_events.player_id', '=',  $player->id)
                    ->orderByRaw('nx510_bl_matchday.id ASC')
                    ->select('player_id')
                    ->get();


                $redsTotal = array();

                foreach ($reds  as $m) {
                    array_push($redsTotal, $m->player_id);
                }

                $filtersRed = array_count_values($redsTotal);

                $player["red"] = "0";
                foreach ($filtersRed  as $key  => $val) {
                    $player["red"] = $val;
                }

                $blues = DB::table('nx510_bl_matchday')
                    ->join('nx510_bl_match', 'nx510_bl_matchday.id', '=', 'nx510_bl_match.m_id')
                    ->join('nx510_bl_match_events', 'nx510_bl_match.id', '=', 'nx510_bl_match_events.match_id')
                    ->where('nx510_bl_matchday.s_id', '=', $seasson)
                    ->where('nx510_bl_match.m_played', '=', '1')
                    ->where('nx510_bl_match_events.e_id', '=', '4')
                    ->where('nx510_bl_match_events.player_id', '=',  $player->id)
                    ->orderByRaw('nx510_bl_matchday.id ASC')
                    ->select('player_id')
                    ->get();


                $blueTotal = array();

                foreach ($blues  as $m) {
                    array_push($blueTotal, $m->player_id);
                }

                $filtersBlue = array_count_values($blueTotal);

                $player["blue"] = "0";
                foreach ($filtersBlue  as $key  => $val) {
                    $player["blue"] = $val;
                }

                $gols = DB::table('nx510_bl_matchday')
                ->join('nx510_bl_match', 'nx510_bl_matchday.id', '=', 'nx510_bl_match.m_id')
                ->join('nx510_bl_match_events', 'nx510_bl_match.id', '=', 'nx510_bl_match_events.match_id')
                ->where('nx510_bl_matchday.s_id', '=', $seasson)
                ->where('nx510_bl_match.m_played', '=', '1')
                ->where('nx510_bl_match_events.e_id', '=', '3')
                ->where('nx510_bl_match_events.player_id', '=',  $player->id)
                ->orderByRaw('nx510_bl_matchday.id ASC')
                ->select('player_id')
                ->get();


            $golsTotal = array();

            foreach ( $gols   as $m) {
                array_push($golsTotal , $m->player_id);
            }

            $filtersGols = array_count_values($golsTotal );

            $player["gols"] = "0";
            foreach ($filtersGols  as $key  => $val) {
                $player["gols"] = $val;
            }


            }
        }

        //updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'Operação realizada com sucesso',
            'data' => $data
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
        $data = Team::with('players')->where('id', '=', $id)->paginate();

        foreach ($data   as $teams) {

            foreach ($teams['players']  as $player) {

                $url = "https://ccfutebolsociety.com/api/v1/image?filename=https://ccfutebolsociety.com/storage/players/";
                $img = $player->def_img;
                $player->def_img =  $url . $img;
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
