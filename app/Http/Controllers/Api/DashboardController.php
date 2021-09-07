<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Matchs;
use App\Models\Team;
use App\Models\Matchday;
use App\Models\Group;
use App\Models\GroupTeam;
use App\Models\Season;
use App\Models\SeasonTeam;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
   
    public function show($seasonId)
    {
        $seasson = Season::find($seasonId);

        if (!$seasson) {
            return response()->json(['error' => 'Temporada não encontrada!'], 200);
        }

        //recuperar temporada
        $seasonTeams = SeasonTeam::where('season_id', '=', $seasonId)->get();
               
        //times da temporada
        $seasson['teamsSeason'] = $seasonTeams;

        $pontosVitoria =$seasson->s_win_point;
        $pontosDerrota =$seasson->s_lost_point;
        $empate =$seasson->s_draw_point;

        $season_par    = "";
        $groups_exists = array();
        $table_view    = array();

        $i=0;
        
        foreach ($seasson['teamsSeason'] as $t) {
            $i++;

            $team = Team::find($t->team_id);
         
            $tid = $team->id;
            $teams_name = $team->t_name;
            $teams_your = $team->t_yteam;
            $emblems = $team->t_emblem;

            //updated, return success response
            $bonus_point = $t->bonus_point;

            $groupTeam = Group::with('groupteam')->where('s_id', '=', $seasonId)->get();
           
            $group_id="";
    
            foreach ($groupTeam as $group) {
                foreach ($group['groupteam'] as $gr) {
                    if ($gr->t_id==$team->id) {
                        $group_id = $gr->g_id;
                        $groups_exists[] = $group_id;
                    }
                }
            }

            $matchday = Matchday::with('matchs')->where('s_id', '=', $seasonId)->first();

            //home score
            $homeSc = 0;
            $homeRc = 0;

            //away
            $awaySc = 0;
            $awayRc = 0;

            $wins=0;
            $drows=0;
            $loose=0;
            
            $wins_away=0;
            $loose_away=0;
            $drows_away=0;

            foreach ($matchday['matchs'] as $match) {
               
                //gols home
                if ($match->published=="1" && $matchday->is_playoff =="0" && $match->is_extra=="0" && $match->m_played=="1" && $match->team1_id==$team->id) {
                    $homeSc = $homeSc+$match->score1;
                    $homeRc = $homeRc + $match->score2;

                    if ($match->score1 > $match->score2) {
                        $wins++;
                    }

                    if ($match->score1 == $match->score2) {
                        $drows++;
                    }

                    if ($match->score1 < $match->score2) {
                        $loose++;
                    }
                }

                //gols fora
                if ($match->published=="1" && $matchday->is_playoff =="0" && $match->is_extra=="0" && $match->m_played=="1" && $match->team2_id==$team->id) {
                    $awaySc = $awaySc+$match->score1;
                    $awayRc = $awayRc + $match->score2;

                    if ($match->score1 > $match->score2) {
                        $loose++;
                        $loose_away++;
                    }

                    if ($match->score1 == $match->score2) {
                        $drows++;
                        $drows_away++;
                    }

                    if ($match->score1 < $match->score2) {
                        $wins++;
                        $wins_away++;
                    }
                }
            }



            //updated, return success response
            return response()->json([
            'success' => true,
            'message' => 'Consasaulta ao dashboard realizado com sucesso',
            'data' => $matchday
        ], Response::HTTP_OK);
        }
    }
}
