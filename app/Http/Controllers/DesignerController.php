<?php

namespace App\Http\Controllers;

use App\Http\Models\Designer_model;
use Illuminate\Http\Request;
use App\Http\Requests;
use Symfony\Component\Console\Input\Input;


class DesignerController extends Controller{
    public $model;

    public function __construct(){

        $this->model=new Designer_model();
    }

    //디자이너 리스트 뷰로 가는 곳
    public function index($value = 'nomal'){

        $m_list=$this->model->m_list($value);

        return view('designer.list')->with('m_list',$m_list);

    }

    //디자이너 포트로그 페이지
    //아직 디자인 단계
    public function show($id){
        return view('designer.portlog')->with('m_num',$id);
    }

    //디자이너 포트폴리오로 가는 부분
    //ajax 활용을 위해 각종 변수들을 계산해서 넘겨줌
    public function portfolio($m_num = null){

        if($m_num) {
            $name = 'Portfolio';
            $items_per_group = 9;
            $count = $this->model->count($m_num);
            $total_group = ceil($count[0]->count / $items_per_group);
            return view('designer.portfolio')->with('total_group', $total_group)
                ->with('name', $name)
                ->with('m_num',$m_num);
        }else{
            App::abort(404);
        }
    }

    //받은 변수들을 이용해 ajax 무한스크롤을 하는 부분
    public function post(Request $request){

        $group_no = $request->input('group_no');
        $m_num    = $request->input('m_num');
        $items_per_group = 9;

        $group_number = filter_var($group_no,FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
        $position = ($group_number * $items_per_group);
        $results = $this->model->select($m_num,$position, $items_per_group);

        foreach($results as $row){
            echo "<a id='picture' onclick='picture($row->m_num,$row->pf_num)'>";
            echo '<img id="pf_img" src="'.asset('img/portfolio/'.$row->pf_picture).'" alt="D&D">';
            echo "</a>";
        }

    }

    //디자이너 소개페이지로 가는 부분
    public function intro($m_num){
        $intro=$this->model->intro($m_num);
        $name='소개';
        return view('designer.intro')
            ->with('name',$name)
            ->with('intro',$intro[0]);
    }

    //디자이너 경력 페이지로 가는 부분
    public function school($m_num){
        $name='경력,학력';
        $academy_list=$this->model->academy($m_num);
        $career_list=$this->model->career($m_num);
        $skill_list=$this->model->skill($m_num);
        $prize_list=$this->model->prize($m_num);
        $licenese_list=$this->model->licenese($m_num);
        return view('designer.school')
            ->with('name',$name)
            ->with('academy_list',$academy_list)
            ->with('career_list',$career_list)
            ->with('skill_list',$skill_list)
            ->with('prize_list',$prize_list)
            ->with('licenese_list',$licenese_list);
    }

    //디자이너가 완료된 프로젝트로 가는부분
    //완료된 평점등을 확인가능
    public function career($m_num){
        $name='평점';
        $grade=$this->model->grade($m_num);
        $web_count=$this->model->web_count($m_num);
        $app_count=$this->model->app_count($m_num);
        $end_project=$this->model->end_project($m_num);

        return view('designer.career')->with('name',$name)
                                       ->with('grade',$grade[0])
                                       ->with('web_count',$web_count[0])
                                       ->with('app_count',$app_count[0])
                                       ->with('end_project',$end_project)
                                       ->with('m_num',$m_num);

    }


    //평점 페이지에서 끝난 프로젝트의
    //하나하나 평점확인 가능
    //ajax형식 활용
    public function user_grade(Request $request){

        $m_num = $request->input('m_num');
        $pj_num = $request->input('pj_num');
        $one_grade=$this->model->end_grade($m_num,$pj_num);

        echo json_encode(array('grade',$one_grade[0]));

    }


    //모달창을 눌렀을때 알맞은 그림을 ajax 형식을 통해
    //DB에서 불러와 json형식으로 보내주는 곳
    public function pf_view(Request $request)
    {
        $m_num=$request->input('m_num');
        $pf_num=$request->input('pf_num');

        $modal_view=$this->model->modal_view($m_num,$pf_num);

        echo json_encode($modal_view[0]);
    }

    //모달창을 띄어 버튼을 눌렀을때 ajax를 이용하여
    //그림이 바뀌도록 할수 있게 정보들을 DB 불러와 json형식으로 보내주는 곳
    public function pn_view(Request $request)
    {
        $pf_num=$request->input('pf_num');
        $button=$request->input('button');

        $pn_view = $this->model->pn_view($pf_num,$button);

        echo json_encode(array('pn_view',$pn_view[0]));

    }

}
