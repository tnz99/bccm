@extends('components.layout')
@section('body_class', 'the-law')
@section('header')
    <x-header :dark=true />
@endsection
@section('content')
<section class="d-flex flex-column z-3">
    <div class="text-white ml-139 w-495">
        <h2 class="fs-96 fw-700 lh-normal font-normal">the</h2>
        <h2 class="fs-96 fw-700 lh-normal font-normal">Laws</h2>
        <p class="fw-400 fs-20 lh-normal font-normal">In the serene Kingdom of Bhutan, nestled in the Eastern Himalayas, the profound philosophy of Gross National Happiness (GNH) not only shapes the nation's approach to well-being but also guides its stance on environmental conservation and climate change. Bhutan, a carbon-negative country, has set a remarkable example for the world by prioritizing sustainability over economic growth.</p>
    </div>

    <x-story-control link-one="laws" link-two="the-laws-1" next-link=""/>
</section>
@endsection

@section('nav')
    <x-circular_nav background="the-law-cnav-bg" inner-border="border-gray"/>
@endsection
