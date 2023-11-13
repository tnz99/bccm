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

        <div class="d-flex align-items-center justify-content-between mt-46">
            <ul class="d-flex align-items-center justify-content-between list-none p-0 m-0">
                <li><a href="#" class="no-underline circle-xm d-flex justify-content-center align-items-center mr-10 border-0">1</a></li>
                <li class="only-border"><a href="#" class="no-underline circle-xm d-flex justify-content-center align-items-center border-0 circle-fill">2</a></li>
            </ul>

            <div class="d-flex align-items-center">
                <p class="p-0 m-0 fw-400 lh-norma">Next story</p>
                <div class="circle-xm d-flex justify-content-center align-items-center ml-9">
                    <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M38 17.0001C38 17.5636 37.7776 18.1042 37.3817 18.5026L22.6039 33.3777C21.7795 34.2075 20.4427 34.2075 19.6183 33.3777C18.794 32.5479 18.794 31.2023 19.6183 30.3725L30.7922 19.1251H2.11111C0.945145 19.1251 0 18.1737 0 17.0001C0 15.8264 0.945145 14.875 2.11111 14.875L30.7922 14.875L19.6183 3.62762C18.794 2.79774 18.794 1.45227 19.6183 0.622393C20.4427 -0.207464 21.7795 -0.207464 22.6039 0.622393L37.3817 15.4975C37.7776 15.8959 38 16.4365 38 17.0001Z" fill="black"/>
                        <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.704783 -0.709422 0.704783 -0.709422 25.3333 17.0001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                        <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(0.704783 -0.709422 -0.704783 -0.709422 10.9778 25.5001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </div>        
    </div>

 
    
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
