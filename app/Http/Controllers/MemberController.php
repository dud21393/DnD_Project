<?php
namespace App\Http\Controllers;

use App\Events\BeautyLogined;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\member;
use Illuminate\Http\Request;
use DB;
use Session;

class MemberController extends Controller{
    

    public function signin(Request $request)
    {
        $id = $request->input('m_id');
        $pw = $request->input('m_pw');
        
        $result = DB::select ("select * from members where m_id = '{$id}' and m_pw = '{$pw}'");
        //dd($result);

        if($result)
        {
            Session::put('m_info', $result);
            Event::fire(new BeautyLogined($request->ip()));
        }else{
            return view('layouts.MemberError');
        }


        return redirect('/');
    }

    public function signup(Request $request)
    {


        //dd($request->all());

        $id      = $request->input('m_id');
        $pw      = $request->input('m_pw');
        $name    = $request->input('m_name');
        $tel     = $request->input('m_phone');
        $mail    = $request->input('m_email');
        $area    = $request->input('m_area');
        $assort  = $request->input('div_member');

        member::create([
            'm_id'=>$id,
            'm_pw'=>$pw,
            'm_name'=>$name,
            'm_phone'=>$tel,
            'm_email'=>$mail,
            'm_area'=>$area,
            'div_member'=>$assort
        ]);

        return redirect('/');

    }

    public function logout(Request $request){
        $request->session()->forget('m_info');
        $request->session()->flush();

        return redirect('/');
    }

    public function id_check(Request $request){

        //dd($request->all());

        $id = $request->input('m_id');

        $result = DB::select ("select * from members where m_id = '{$id}'");

        if($result){
            echo 1;
        }else{
            echo 0;
        }

    }
}