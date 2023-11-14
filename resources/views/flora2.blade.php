@extends('components.layout')
@section('body_class', 'the-flora2')

@section('header')
    <x-header :dark=false />
@endsection

@section('content')
<section>
    <div class="gallery-container">
        <div class="options">
            
        <div class="option active" style="--optionBackground: url('../images/backgrounds/the_kingdom.png');">
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <div class="info">
                        <div class="main">Dignissim</div>
                        <div class="sub">Augue ut lectus arcu bibendum</div>
                    </div>
                </div>
            </div>

            <div class="option" style="--optionBackground: url('../images/backgrounds/the_kingdom.png');">
            </div>
            
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_flora.png');">
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_people.png');">
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_fauna.png');">
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_fauna.png');">
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_fauna.png');">
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_fauna.png');">
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_fauna.png');">
            </div>
        </div>

        <div>
            <h1>the Flora</h1>
        </div>
    </div>

    <x-story-control :links="$links" :next-link="$nextLink"/>        


    <script>
        $(".option").click(function () {
            $(".option").removeClass("active");
            $(this).addClass("active");
        });
    </script>
</section>
@endsection

@section('nav')
<x-circular_nav background="" inner-border="border-white"/>
@endsection
