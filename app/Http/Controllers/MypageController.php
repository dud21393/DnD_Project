<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\mypage;
use Illuminate\Support\Facades\Validator;
use Session;

class MypageController extends Controller{


   public function __construct()
    {
        $this->model = new mypage();
    }

    /*
     * 개발사 개인 페이지
     */

    // 개발사 정보
    public function companypage()
    {
        $results = $this->model->select(Session::get('m_num'));
        return view('mypage.companypage')->with('results',$results);
    }

    // 개발사 정보 수정
    public function modify(){

        $results = $this->model->select(Session::get('m_num'));
        return view('mypage.companypage_modify')->with('results',$results);
    }

    // 개발사 정보 수정(submit)
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

    // 개발사에 지원한 디자이너
    public function designer(){
        $results = $this->model->designer_list(Session::get('m_num'));
        return view('mypage.companypage_designer')->with('results',$results);
    }

    // 개발사의 등록 프로젝트
    public function development(){
        $results = $this->model->project_list(Session::get('m_num'));
        return view('mypage.companypage_development')->with('results',$results);
    }

    // 개발사 메시지 목록
    public function company_message(){
        $results = $this->model->company_message(Session::get('m_num'));
        return view('mypage.company_message')->with('results',$results);
    }

    //개발사 일정관리
    public function company_calendar(){
        $results = $this->model->company_calendar();
        return view('mypage.company_calendar')->with('results',$results);
    }

    /*
     * 디자이너 개인 페이지
     */

    // 디자이너 정보
    public function designerpage(){
        $results = $this->model->designerpage(Session::get('m_num'));
        return view('mypage.designerpage')->with('results',$results[0]);
    }

    // 디자이너 정보 수정
    public function designer_modify(){

        $designer_info = $this->model->designerpage(Session::get('m_num'));
        $designer= $this->model->designer(Session::get('m_num'));
        $skill=$this->model->skill(Session::get('m_num'));
        return view('mypage.designerpage_modify')
            ->with('results',$designer_info[0])
            ->with('designer',$designer[0])
            ->with('skill',$skill);

    }

    // 디자이너 정보 수정(submit)
    public function designerpage_update(Request $request){

        $m_info['m_num']=$request->input('m_num');
        $m_info['m_name']=$request->input('m_name');
        $m_info['m_phone']=$request->input('m_phone');
        $m_info['m_email']=$request->input('m_email');
        $m_info['ds_info']=$request->input('ds_info');

        $this->model->info_update_designer($m_info);

        return redirect()->action('MypageController@designerpage');
    }

    // 디자이너가 지원한 프로젝트
    public function support_list(){
        $results = $this->model->support_list(Session::get('m_num'));
        return view('mypage.support_list')->with('results',$results);
    }

    //디자이너 보유기술 추가 부분
    public function skill_modify(Request $request){
        $skill['sk_name']=$request->input('sk_name');
        $skill['sk_grade']=$request->input('sk_grade');
        $skill['sk_time']=$request->input('sk_time');
        $skill['m_num']=$request->input('m_num');
        $id=$this->model->add_skill($skill);
        echo json_encode(array($id));
    }

    //디자이너 보유기술 삭제 부분
    public function skill_delete(Request $request){
        $sk_num=$request->input('sk_num');
        $this->model->delete_skill($sk_num);
        echo json_encode('success');

    }
    //디자이너 학력 추가 부분
    public function school_delete(Request $request){
        $ac_num=$request->input('ac_num');
    }

    //디자이너 학력 삭제 부분
    public function school_modify(Request $request){
        $ac_num=$request->input('ac_num');
        $this->model->school_delete($ac_num);
        echo json_encode('success');
    }



    // 개발사 메시지
   public function chat(){
        return view('chat');
    }

    // main
    public function main(){
        $result = DB::select ("select * from members where m_id = '{$id}' and m_pw = '{$pw}'");
        dd($result);

        if($result)
        {

            Session::put('m_info', $result);
        }else{
            return view('/');
        }
        return redirect('/');
        return view('main.mainview');
    }


}
?>