@extends('components.layout')
@section('body_class', 'the-laws-1')
@section('header')
    <x-header :dark=false />
@endsection
@section('content')
<div class="d-flex">
    <div>
        <div id="main-section" class="d-flex justify-content-between vw-65 year-story-wrapper">
            <div class="ml-146">
                <div class="p-0">
                    <h2 class="text-black fw-700">1995</h2>
                    <p class="text-black fs-20 fw-700 font-normal lh-normal mt-22" style="width: 25ch;">Bhutan's Forest and Nature Conservation Act - "Conservation and sustainable management of Bhutan's forests."</p>
                </div>
            </div>
            
            <div class="mt-14 ml-9">
                <ul class="m-0 text-black fw-400 lh-normal font-normal fs-14" style="width: 35ch;">
                    <li class="p-1">The act has helped in the conservation and sustainable management of Bhutan's forests, which cover over 70% of the country's land area.</li>
                    <li class="p-1">Bhutan has maintained a high forest coverage, which contributes to carbon sequestration and helps mitigate climate change.</li>
                    <li class="p-1">The act has facilitated the protection of biodiversity, including endangered species like the Bengal tiger and snow leopard.</li>
                </ul>
            </div>
        </div>

        <div>
            <div class="year-nav-wrapper">
                <ul class="year-nav-list">
                    <li class="year-nav-list-item"><a href="/the-laws-1" class="spin-button year-nav-link">1999</a></li>
                    <li class="year-nav-list-item"><a href="/laws-2000" class="spin-button year-nav-link">2000</a></li>
                    <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2001</a></li>
                    <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2002</a></li>
                    <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2003</a></li>
                    <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2004</a></li>
                    <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2005</a></li>
                    <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2006</a></li>
                    <li class="year-nav-list-item"><a href="" class="spin-button year-nav-link">2007</a></li>
                </ul>
            </div>

            <x-story-control link-one="laws" link-two="the-laws-1" next-link=""/>
        </div> 
    </div>   

    <img id="prayer-wheel" src="{{ asset('images/prayer-wheel/1.png') }}" alt="prayer wheel" class="position"  >
</div>
@endsection

@section('nav')
    <x-circular_nav background="the-law-cnav-bg" inner-border="broder-gray"/>
@endsection
