@extends('components.layout')
@section('body_class', 'the-law')
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<section class="d-flex flex-column z-3">
    <div class="text-white ml-139 w-495">
        <h2 class="fs-96 fw-700 lh-normal font-normal">the</h2>
        <h2 class="fs-96 fw-700 lh-normal font-normal">{{ $name }}</h2>
        <p class="fw-400 fs-20 lh-normal font-normal">{{ $description }}</p>
    </div>

    <x-story-control :link-one="$linkOne" :link-two="$linkTwo" :next-link="$nextLink"/>
</section>
@endsection

@section('nav')
    <x-circular_nav background="the-law-cnav-bg" inner-border=""/>
@endsection
