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

    public function index($value = 'nomal'){

        $m_list=$this->model->m_list($value);

        return view('designer.list')->with('m_list',$m_list);

    }

    public function show($id){
        return view('designer.portlog')->with('m_num',$id);
    }

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
    public function intro($m_num){
        $intro=$this->model->intro($m_num);
        $name='소개';
        return view('designer.intro')
            ->with('name',$name)
            ->with('intro',$intro[0]);
    }

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

    public function career($m_num){
        $name='End Project';
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
    public function user_grade(Request $request){

        $m_num = $request->input('m_num');
        $pj_num = $request->input('pj_num');


        $one_grade=$this->model->end_grade($m_num,$pj_num);


        echo json_encode(array('grade',$one_grade[0]));

    }

    public function pf_view(Request $request)
    {
        $m_num=$request->input('m_num');
        $pf_num=$request->input('pf_num');

        $modal_view=$this->model->modal_view($m_num,$pf_num);


        echo json_encode($modal_view[0]);
    }

    public function pn_view(Request $request)
    {
        $pf_num=$request->input('pf_num');
        $button=$request->input('button');

        $pn_view = $this->model->pn_view($pf_num,$button);

        echo json_encode(array('pn_view',$pn_view[0]));

    }

}
