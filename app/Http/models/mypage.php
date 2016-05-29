<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;
use DB;

class Mypage extends Model{

    /*
     * 개발사 개인페이지
     */

    // 개발사 정보
    public function select(){
        $result = DB::select("select * from development LEFT JOIN members ON members.m_num=development.m_num");
        return $result;
    }

    // 개발사 정보 수정
    public function info_update($request){
       $result = DB::table('members')
           ->where('members.m_num',$request['m_num'])
           ->join('development','member.m_num','=','development.m_num')
            ->update(array('members.m_name'=>$request['m_name'],
                            'members.m_phone'=>$request['m_phone'],
                            'members.m_email'=>$request['m_email'],
                            'development.cp_info'=>$request['cp_info'],
                            'development.cp_represent'=>$request['cp_represent']
            ));
        return $result;
    }
    // 개발사에 지원한 디자이너
    public function designer_list(){
        $result = DB::select("select p.pj_title,m.m_name,m.m_phone,m.m_area,p.pj_num
                              from project p,members m, support s
                              where s.m_num=m.m_num
                              AND s.pj_num=p.pj_num
                              ");
        return $result;
    }
    // 개발사의 등록 프로젝트
    public function project_list(){
        $result = DB::select("select * from development LEFT JOIN project ON project.m_num=development.m_num");
        return $result;
    }

    /*
     * 디자이너 개인 페이지
     */

    // 디자이너 정보
    public function designerpage($m_num){

        $result=  DB::table('designer')
            ->join('members','members.m_num','=','designer.m_num')
            ->where('members.m_num','=',$m_num)
            ->get();

         return $result;
    }

    // 디자이너 정보 수정
    public function info_update_designer($request){
        $result = DB::table('members')
            ->where('members.m_num',$request['m_num'])
            ->join('designer','members.m_num','=','designer.m_num')
            ->update(array('members.m_name'=>$request['m_name'],
                'members.m_phone'=>$request['m_phone'],
                'members.m_email'=>$request['m_email'],
                'designer.ds_info'=>$request['ds_info']
            ));
        return $result;
    }

}
?>