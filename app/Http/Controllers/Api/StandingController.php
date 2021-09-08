<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Matchday;
use App\Models\Group;
use App\Models\Season;
use App\Models\SeasonTeam;

class StandingController extends Controller
{
    public static function getStandingStart($seasonId)
    {
    }
        
    public static function getStanding($seasonId)
    {
        $seasson = Season::find($seasonId);

        //recuperar temporada
        $seasonTeams = SeasonTeam::where('season_id', '=', $seasonId)->get();

        $table_view = array();
        $equalpts_chk=true;
               
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
            $group_name="";
    
            foreach ($groupTeam as $group) {
                foreach ($group['groupteam'] as $gr) {
                    if ($gr->t_id==$team->id) {
                        $group_id = $gr->g_id;
                        $group_name=$gr->group_name;
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

            if (isset($matchday['matchs']) ? count($matchday['matchs']) : 0) {
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
            }

            

            $table_view[$i]['group_id'] = $group_id;
            $table_view[$i]['group_name'] = $group_name;
            $table_view[$i]['team_id'] = $team->id;
            $table_view[$i]['team_name'] = $team->t_name;
            $table_view[$i]['played'] = $wins + $drows + $loose +$wins_away+$drows_away+$loose_away;
            $table_view[$i]['win'] = $wins +$wins_away;
            $table_view[$i]['draw'] = $drows+$drows_away;
            $table_view[$i]['lost'] = $loose+$loose_away;
            $table_view[$i]['goals'] = ($homeSc + $awayRc);
            $table_view[$i]['points'] = $wins * 3 + $drows * 1 + $loose * 0 + $wins_away * 3 + $drows_away * 1 + $loose_away * 0 ;
            $table_view[$i]['goal_score'] = $homeSc +  $awayRc;
            $table_view[$i]['goals_conc'] = $homeRc + 	$awaySc;
            $table_view[$i]['goals_dif'] = ($homeSc +  $awayRc) - ($homeRc + 	$awaySc);
            $table_view[$i]['emblem']=$team->t_emblem;
        }

        if ($equalpts_chk) {
            $pts_arr = array();
            $pts_equal = array();
            foreach ($table_view as $tv) {
                if (!in_array($tv['points'], $pts_arr)) {
                    $pts_arr[] = $tv['points'];
                } else {
                    if (!in_array($tv['points'], $pts_equal)) {
                        $pts_equal[] = $tv['points'];
                    }
                }
            }
            $k = 0;
            $team_arr = array();
            foreach ($pts_equal as $pts) {
                foreach ($table_view as $tv) {
                    if ($tv['points'] == $pts) {
                        $team_arr[$k][] = $tv['team_id'];
                    }
                }
                $k++;
            }
        }

        $sort_arr = array();
        foreach ($table_view as $uniqid => $row) {
            foreach ($row as $key=>$value) {
                $sort_arr[$key][$uniqid] = $value;
            }
        }
        if (count($groups_exists)) {
            sort($groups_exists, SORT_NUMERIC);
        }
       

        array_multisort($sort_arr['group_id'], SORT_ASC, $sort_arr['points'], SORT_DESC, $sort_arr['win'], SORT_DESC, $sort_arr['goals_dif'], SORT_DESC, $sort_arr['goal_score'], SORT_DESC, $sort_arr['goals_dif'], SORT_DESC, $sort_arr['goal_score'], SORT_DESC, $table_view);
       

        $list =   $table_view;

        $cont=1;
        $classificacao = array();

        foreach ($list as $obj) {
            $obj["position"]=$cont;
            $obj["position"];
            $cont++;
            array_push($classificacao, $obj);
        }

        return $classificacao;
    }
}
