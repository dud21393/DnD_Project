@extends('designer.header')
@section('d_style')
<style>
    .intro_container {
    margin: 80px auto;
    position: relative;
    width: 1000px;
    height: 600px;
    }
    #picture {
    width:300px;
    height:400px;
    background-color:gray;
    border-radius:10px;
    }
    #name{
    margin-top:20px;
    width:300px;
    height:100px;
    background-color:red;
    font-size:50px;
    text-align:center;
    line-height:100px;
    }
    #self_intro{
    width:500px;
    height:700px;
    background-color:lightgreen;
    }
    .left{
    float:left;
    }
    .right{
    float:right;
    }
</style>
@stop
@section('d_content')
    <div class="intro_container">
        <div class="left">
            <div id="picture">사진</div>
            <div id="name">{{$intro->m_name}}</div>
        </div>
        <div class="right">
            <div id="self_intro">{{$intro->ds_info}}</div>
        </div>
    </div>
@stop