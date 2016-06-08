<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//메인
Route::get('/', 'MainController@index');


//로그인 / 회원가입 / 로그아웃 / id체크
Route::post('member/signup','MemberController@signup');

Route::post('member/signin','MemberController@signin');

Route::get('member/logout','MemberController@logout');

Route::post('member/id_check','MemberController@id_check');

// 소개
Route::get('/intro', 'IntroController@index');

//협업
Route::get('/work', 'WorkController@index');
Route::get('/work/uid', 'WorkController@uid');

//고객센터
Route::get('help/index','HelpController@index');

//프로젝트 라우터//
Route::get('projectList',[
    'as' => 'projectList',
    'uses'=> 'ProjectController@index'
]);
Route::post('projectregister',[
    'as' => 'projectregister',
    'uses' => 'ProjectController@register'
]);

Route::get('projectwrite',[
    'as' => 'projectwrite',
    'uses'=> 'ProjectController@writeview'
]);

Route::post('divisionlist',[
    'as' => 'divisionlist',
    'uses' => 'ProjectController@pj_division'
]);


Route::get('projectView/{pj_num}', [

    'as' => 'projectView/{pj_num}',
    'uses' => 'ProjectController@view'
]);

//파일다운로드 라우터
Route::get('projectView/{id}download', [
    'as' => 'projectView/{id}download',
    'uses' => 'ProjectController@getDownload'
]);

Route::get('projectList/arrangePrice/{post}',[
    'as' => 'projectList/arrangePrice/{post}',
    'uses'=> 'ProjectController@priceArrange'
]);

// 개발사 개인 페이지
Route::get('companypage','MypageController@companypage');
//Route::get('companypage/modify','MypageController@modify');
Route::get('companypage/modify',[
    'as' => 'company_modify',
    'uses' => 'MypageController@modify'
]);
Route::post('companypage/update/{m_num}',[
    'as' => 'update',
    'uses' => 'MypageController@update'
]);
Route::get('companypage/designer','MypageController@designer');
Route::get('companypage/development','MypageController@development');
Route::get('companypage/calendar','MypageController@company_calendar');
Route::get('designerpage','MypageController@designerpage');

// 디자이너 개인 페이지
Route::get('designerpage','MypageController@designerpage');
Route::get('designerpage/modify','MypageController@designer_modify');
Route::post('designerpage/modify/{m_num}',[
    'as' => 'designerpage_update',
    'uses' => 'MypageController@designerpage_update'
]);


Route::get('designer/portfolio2','DesignerController@portfolio2');

// 디자이너 & 포트로그
Route::post('designer/pf_view','DesignerController@pf_view');
Route::post('designer/pn_view','DesignerController@pn_view');
Route::get('designer/index/{value?}','DesignerController@index');
Route::get('designer/modal','DesignerController@modal');
Route::get('designer/career/{m_num?}','DesignerController@career');
Route::post('designer/user_grade/{m_num?}','DesignerController@user_grade');
Route::get('designer/school/{m_num?}','DesignerController@school');
Route::get('designer/portfolio/{m_num?}','DesignerController@portfolio');
Route::post('designer/post','DesignerController@post');
Route::get('designer/intro/{m_num?}','DesignerController@intro');
//디자이너 학력 삭제
Route::post('designer/academy_delete','DesignerController@academy_delete');
//디자이너 학력 추가 라우터
Route::post('designer/academy_add','DesignerController@academy_add');
//디자이너 경력 추가 라우터
Route::post('designer/career_add','DesignerController@career_add');
//디자이너 경력 삭제 라우터
Route::post('designer/career_delete','DesignerController@career_delete');
//디자이너 자격증 추가 라우터
Route::post('designer/licenese_add','DesignerController@licenese_add');
//디자이너 자격증 삭제 라우터
Route::post('designer/licenese_delete','DesignerController@licenese_delete');
//디자이너 찾기 라우터
Route::post('designer/search','DesignerController@designer_search');
//디자이너 INTRO 수정
Route::post('designer/intro_modify','DesignerController@intro_modify');

//새로만들고 있는 디자이너 포트폴리오

// 디자이너 개인 페이지
Route::post('designer/skill_modify','DesignerController@skill_modify');
Route::post('designer/skill_delete','DesignerController@skill_delete');

Route::resource('designer','DesignerController');
