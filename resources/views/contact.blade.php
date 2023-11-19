@extends('components.layout')

@section('body_class', 'contact')

@section('header')
    <x-header :dark=$darkThemeFlag />   
@endsection

@section('content')
<section class="d-flex" style="justify-content: center; gap: 12%; margin-top: 12%;">
    <div class="">
        <h1 class="text-white">we are <span class="text-uppercase">SOCIAL</span></h1>
        <div class="d-flex flex-column" style="justify-content: center; align-items: center;">
            <img src="../images/social.png" />
        </div>
    </div>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection
