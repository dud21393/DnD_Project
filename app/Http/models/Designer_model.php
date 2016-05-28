<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Pagination\Paginator;

class Designer_model extends Model
{

    //디자이너의 인원수를 구해준다.
    public function m_list($value){
        //바로들어갔을때
        if($value == 'nomal'){
            $result = DB::table('members')
                ->select(DB::raw('(select count(m_num)
                                           from   portfolio
                                           where  members.m_num=portfolio.m_num) as pt_count,
                              (select  count(c.m_num)
		                                   from contract c,projects p
		                                   where c.pj_num=p.pj_num AND p.st_num=5 AND members.m_num=c.m_num
                                           group by c.m_num) as pj_count, m_num , m_name'))
                ->where('div_member', '=', '1')->paginate(2);
        //프로젝트의 갯수가 많은 순으로
        }elseif($value =='project'){
            $result = DB::table('members')
                ->select(DB::raw('(select count(m_num)
                                           from   portfolio
                                           where  members.m_num=portfolio.m_num) as pt_count,
                              (select  count(c.m_num)
		                                   from contract c,projects p
		                                   where c.pj_num=p.pj_num AND p.st_num=5 AND members.m_num=c.m_num
                                           group by c.m_num) as pj_count, m_num , m_name'))
                ->where('div_member', '=', '1')
                ->orderBy('pt_count','desc')->paginate(2);
            //포트폴리오의 갯수가 많은 순으로
        }elseif($value =='portfolio'){
            $result = DB::table('members')
                ->select(DB::raw('(select count(m_num)
                                           from   portfolio
                                           where  members.m_num=portfolio.m_num) as pt_count,
                              (select  count(c.m_num)
		                                   from contract c,projects p
		                                   where c.pj_num=p.pj_num AND p.st_num=5 AND members.m_num=c.m_num
                                           group by c.m_num) as pj_count, m_num , m_name'))
                ->where('div_members', '=', '1')
                ->orderBy('pj_count','desc')
                ->paginate(2);
        }

        return $result;
    }

    //디자이너 경력 학력 등을 불러온다.
    public function academy($m_num){
        $result=DB::table('academy')
            ->where('m_num','=',$m_num)->get();

        return $result;

    }

    //디자이너 스킬을 불러온다.
    public function skill($m_num){
        $result=DB::table('skill')
            ->where('m_num','=',$m_num)->get();

        return $result;

    }

    //디자이너 경력을 불러온다.
    public function career($m_num){
        $result=DB::table('career')
            ->where('m_num','=',$m_num)->get();

        return $result;

    }

    //디자이너 수상 경력을 불러온다.
    public function prize($m_num){
        $result=DB::table('prize')
            ->where('m_num','=',$m_num)->get();

        return $result;
    }

    //디자이너의 자격증 등을 불러온다.
    public function licenese($m_num){
        $result=DB::table('licenese')
            ->where('m_num','=',$m_num)->get();

        return $result;
    }

    //디자이너의 소개페이지에서 디자이너의 정보를 불러올때 사용
    public function intro($m_num){

        $result=DB::table('members')
            ->join('designer','designer.m_num','=','members.m_num')
            ->where('designer.m_num','=',$m_num)
            ->select('members.m_num','members.m_name','designer.ds_info')->get();

        return $result;
    }

    //현재 보류단계
    /*public function m_list_grade(){
        $result=DB::select('select m_num,round(avg(gd_professional),2) as gd_professional,round(avg(gd_plan),2) as gd_plan, round(avg(gd_satisfaction),2) as gd_satisfaction
                            from grade
                            group by m_num');
        return $result;
    }*/

    //디자이너의 포트폴리오를 가져올때 사용 =>ajax이용한것임
    public function select($m_num,$position,$items_per_group){
        $result=DB::select('select * from portfolio  where m_num='.$m_num.' limit '.$position.','.$items_per_group);
        return $result;
    }

    //디자이너의 포트폴리오 총 갯수를 가져옴
   /* public function portfolio(){
        $result=DB::select('select * from portfolio where m_num=1');
        return $result;
    }*/

    //디자이너의 포트폴리오가 총 몇개인지 보여준다.
    public function count($m_num){
        $result=DB::select('select count(*) count from portfolio where m_num='.$m_num);
        return $result;
    }

    //디자이너가 지금까지 했던 총 평점을 계산해서 평균을 구해준다.
    public function grade($m_num){
        $result=DB::select('select round(avg(gd_professional),2) as gd_professional,round(avg(gd_plan),2) as gd_plan,round(avg(gd_satisfaction),2) as gd_satisfaction from grade where m_num='.$m_num);
        return $result;
    }

    //디자이너가 총 몇개의 웹을 만들었는지 카운터 해서 보여준다.
    public function web_count($m_num){
        $result=DB::select('select count(sc_num) as web_count
                            from projects p , contract c
                            where p.pj_num=c.pj_num AND p.st_num=5 AND c.m_num='.$m_num.' AND sc_num=1');
        return $result;
    }

    //디자이너가 총 몇개의 앱을 만들었는지 카운터 해서 보여준다.
    public function app_count($m_num){
        $result=DB::select('select count(sc_num) as app_count
                            from projects p , contract c
                            where p.pj_num=c.pj_num AND p.st_num=5 AND c.m_num='.$m_num.' AND sc_num=2');
        return $result;
    }

    //끝난 프로젝트를 보여준다.
    public function end_project($m_num){
        $result= DB::table('contract')
                ->join('projects','contract.pj_num','=','projects.pj_num')
                ->join('members','projects.m_num','=','members.m_num')
                ->where('projects.st_num','=','5')
                ->where('contract.m_num','=',$m_num)->paginate(3);

        return $result;
    }

    //사용자의 평점을 볼때 하나의 프로젝트 평점 점수를 가져온다.
    public function end_grade($m_num,$pj_num){
        $result=DB::table('grade')
            ->where('m_num','=',$m_num)
            ->where('pj_num','=',$pj_num)->paginate(3);
        return $result;
    }

    //모달창을 띄울때 필요한 뷰정보를 가져온다.
    public function modal_view($m_num,$pf_num){
        $result=DB::table('portfolio')
            ->where('m_num','=',$m_num)
            ->where('pf_num','=',$pf_num)->get();
        return $result;
    }

    //이전 뷰나 다음뷰의 정보를 가져온다.
    public function pn_view($pf_num,$button){

        if($button =='left') {

            $result = DB::select('select *,@num:=@num+1 as num
                            from portfolio,(SELECT @num:=0) num
                            where m_num=1 AND pf_num < ' . $pf_num . '
                            order by pf_num desc');

        }elseif($button =='right') {
            $result = DB::select('select *,@num:=@num+1 as num
                            from portfolio,(SELECT @num:=0) num
                            where m_num=1 AND pf_num > ' . $pf_num);
        }

        return $result;
    }
}
