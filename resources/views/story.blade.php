@extends('components.layout')
@section('body_class',$bodyClass)
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<section class="d-flex flex-column z-3 story-section">
    <div class="text-white story-header">
        <h2 class="story-header-text">the</h2>
        <h2 class="story-header-text">{{ $name }}</h2>
        <p class="story-header-description">{{ $description }}</p>
    </div>
    <x-story-control :links="$links" :next-link="$nextLink"/>
</section>
@endsection

@section('nav')
    <x-circular_nav background="the-law-cnav-bg" inner-border=""/>
@endsection
