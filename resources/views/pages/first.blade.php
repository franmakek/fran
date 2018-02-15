@extends('base')
@section('css')
<style>
    .u{
    background-color:red !important;
    }
</style>
@stop
@section('content')
    <div class="container">
        <img src="images/prvi.jpg">
        <div class="link-block">
             <a href="javascript:void(0)" class="okrugli-link" data-role="random"><p class="s"></p></a>
             <a href="javascript:void(0)" class="okrugli-link u" data-role="random"><p class="s"></p></a>
        </div>
        
        
    </div>
@stop
