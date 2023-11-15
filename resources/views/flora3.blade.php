@extends('components.layout')
@section('body_class', 'the-flora3')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section>
    <div class="gallery-container">
        <div class="options">
            <div class="option active">
                <div class="image" style="background-image:url('../images/backgrounds/queen.jpeg');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name:</div>
                        <div class="sub">Meconopsis betonicifolia</div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="description" style="display: none;">
            <div class="image-content">The blue poppy is a highly exquisite and exceptionally rare flower in the nation and blooms in spring season, typically thriving at altitudes ranging from 3,000m to 4,000m above sea level. The blue poppy encompasses 13 distinct species and can also be encountered in shades of pink, white, and red within the country's borders.</div>
         </div>
        </div>

        
        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/poppy1.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name:</div>
                        <div class="sub">Meconopsis Superba (endemic To HAA)</div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="description" style="display: none;">
                <div class="image-content">The blue poppy is a highly exquisite and exceptionally rare flower in the nation and blooms in spring season, typically thriving at altitudes ranging from 3,000m to 4,000m above sea level. The blue poppy encompasses 13 distinct species and can also be encountered in shades of pink, white, and red within the country's borders.</div>
            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/poppy2.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name:</div>
                        <div class="sub">Meconopsis napaulensis</div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="description" style="display: none;">
                <div class="image-content">The blue poppy is a highly exquisite and exceptionally rare flower in the nation and blooms in spring season, typically thriving at altitudes ranging from 3,000m to 4,000m above sea level. The blue poppy encompasses 13 distinct species and can also be encountered in shades of pink, white, and red within the country's borders.</div>
            </div>
        </div>

        <div class="option">
            <div class="image" style="background-image: url('../images/backgrounds/poppy3.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Scientific name: </div>
                        <div class="sub">Meconopsis paniculata</div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="description" style="display: none;">
                <div class="image-content">The blue poppy is a highly exquisite and exceptionally rare flower in the nation and blooms in spring season, typically thriving at altitudes ranging from 3,000m to 4,000m above sea level. The blue poppy encompasses 13 distinct species and can also be encountered in shades of pink, white, and red within the country's borders.</div>
            </div>
        </div>

            
        </div>

        <div>
            <h1 class="text-white">the Rhododendron Species </h1>
        </div>
    </div>

    <x-story-control :links="$links" :next-link="$nextLink"/>
    <script>
        // $(".option").click(function () {
        //     $(".option").removeClass("active");
        //     $(this).addClass("active");
        // });
        $(document).ready(function () {
            $(".option").click(function () {
                $(".option").removeClass("active");
                $(this).addClass("active");
                $(".description").hide(); // Hide all descriptions
                $(this).find(".description").show(); // Show description of clicked image
            });
        });
    </script>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection





