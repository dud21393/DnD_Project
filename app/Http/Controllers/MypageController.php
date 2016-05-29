<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Mypage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MypageController extends Controller{

    public $model;

    public function __construct()
    {
        $this->model = new mypage();
    }

    /*
     * 개발사 개인 페이지
     */

    public function companypage()
    {
        $results = $this->model->select();
        return view('mypage.companypage')->with('results',$results);
    }

    public function modify(){

        $results = $this->model->select();
        return view('mypage.companypage_modify')->with('results',$results);
    }

    public function update(Request $request){

        $m_info['m_num']=$request->input('m_num');
        $m_info['m_name']=$request->input('m_name');
        $m_info['m_phone']=$request->input('m_phone');
        $m_info['m_email']=$request->input('m_email');
        $m_info['cp_info']=$request->input('cp_info');
        $m_info['cp_represent']=$request->input('cp_represent');

        $this->model->info_update($m_info);

        return redirect()->action('MypageController@companypage');
    }

    public function designer(){
        $results = $this->model->designer_list();
        return view('mypage.companypage_designer')->with('results',$results);
    }

    public function development(){
        $results = $this->model->project_list();
        return view('mypage.companypage_development')->with('results',$results);
    }

    /*
     * 디자이너 개인 페이지
     */

    public function designer_page(){
        $results = $this->model->designerpage(Session::get('m_num'));
        return view('mypage.designerpage')->with('results',$results);
    }

    public function designer_modify(){

        $results = $this->model->designerpage();
        return view('mypage.designerpage_modify')->with('results',$results);
    }

    public function designerpage_update(Request $request){

        $m_info['m_num']=$request->input('m_num');
        $m_info['m_name']=$request->input('m_name');
        $m_info['m_phone']=$request->input('m_phone');
        $m_info['m_email']=$request->input('m_email');
        $m_info['ds_info']=$request->input('ds_info');

        $this->model->info_update_designer($m_info);

        return redirect()->action('MypageController@designerpage');
    }









}
?>