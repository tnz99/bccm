<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|gs
*/

Route::get('/', function() {
    $cnavBg = "the-climate-cnav-bg";
    $cnavInnerBorder = "border-gray";

    return view('home')->with('darkThemeFlag', false)
                       ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/news-and-event', function() {
    return view('news');
});

Route::get('/contact', function() {
    $cnavBg = "the-spring-cnav-bg";
    $cnavInnerBorder = "border-white";

    return view('contact')->with('darkThemeFlag', true)
                          ->with('cnavBg', $cnavBg)
                          ->with('cnavInnerBorder', $cnavInnerBorder);
                        
                        
});
    

Route::get('/register', function() {
    return view('register')->with('darkThemeFlag', false);
});


Route::get('/the-kingdom2', function() {
    $links = ['/the-kingdom', '/the-kingdom2'];
    $nextLink = "the-flora";
    $cnavBg = "the-kingdom-cnav-bg";
    $cnavInnerBorder = "border-white";

    return view('kingdom2')->with('darkThemeFlag', true)
                           ->with('links', $links)
                           ->with('nextLink', $nextLink)
                           ->with('cnavBg', $cnavBg)
                           ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-flora2', function() {
    $links = ['/the-flora', '/the-flora2','/the-flora3', '/the-flora4', '/the-flora5'];
    $nextLink = "the-fauna";
    $cnavBg = "the-flora-cnav-bg";
    $cnavInnerBorder = "border-white";
   

    return view('flora2')->with('darkThemeFlag', false)
                         ->with('links', $links)
                         ->with('nextLink', $nextLink)
                         ->with('cnavBg', $cnavBg)
                         ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/the-flora3', function() {
    $links = ['/the-flora', '/the-flora2','/the-flora3', '/the-flora4', '/the-flora5'];
    $nextLink = "the-fauna";
    $cnavBg = "the-flora-cnav-bg";
    $cnavInnerBorder = "border-white";
   

    return view('flora3')->with('darkThemeFlag', false)
                         ->with('links', $links)
                         ->with('nextLink', $nextLink)
                         ->with('cnavBg', $cnavBg)
                         ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/the-flora4', function() {
    $links = ['/the-flora', '/the-flora2','/the-flora3', '/the-flora4', '/the-flora5'];
    $nextLink = "the-fauna";
    $cnavBg = "the-flora-cnav-bg";
    $cnavInnerBorder = "border-white";
   

    return view('flora4')->with('darkThemeFlag', false)
                         ->with('links', $links)
                         ->with('nextLink', $nextLink)
                         ->with('cnavBg', $cnavBg)
                         ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-flora5', function() {
    $links = ['/the-flora', '/the-flora2','/the-flora3', '/the-flora4', '/the-flora5'];
    $nextLink = "the-fauna";
    $cnavBg = "the-flora-cnav-bg";
    $cnavInnerBorder = "border-white";
   

    return view('flora5')->with('darkThemeFlag', false)
                         ->with('links', $links)
                         ->with('nextLink', $nextLink)
                         ->with('cnavBg', $cnavBg)
                         ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/laws/1995', function() {
    $year = 1995;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "Bhutan's Forest and Nature Conservation Act - Conservation and sustainable management of Bhutan's forests.";
    $story = "The act has helped in the conservation and sustainable management of Bhutan's forests, which cover over 70% of the country's land area.
        Bhutan has maintained a high forest coverage, which contributes to carbon sequestration and helps mitigate climate change.
        The act has facilitated the protection of biodiversity, including endangered species like the Bengal tiger and snow leopard.";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/laws/2001', function() {
    $year = 2001;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "The Alternative Renewable Energy Policy - “Encouraging the use of alternative renewable energy sources such as solar, wind, embedded hydro, and biogas.”";
    $story = "Helped Bhutan diversify its fuel mix and maintain its net-zero carbon emissions. Bhutan's electricity access rate improved from 61 per cent in 2006 to almost cent per cent in 2019, well ahead of the intended 2020 target.";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/laws/2009', function() {
    $year = 2009;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = " Bhutan Climate Change Policy (BCCP) - Addressing climate change and promoting sustainable development.";
    $story = "The policy has guided Bhutan's efforts in addressing climate change and promoting sustainable development.
    Bhutan has committed to remaining carbon neutral by maintaining its forest cover and utilizing renewable energy sources.
    The BCCP has facilitated the integration of climate change considerations into national development plans and policies.
    ";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/laws/2010', function() {
    $year = 2010;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "Bhutan National Environment Strategy (NES) - Comprehensive framework for environmental conservation and sustainable development. ";
    $story = "The NES provides a comprehensive framework for environmental conservation and sustainable development in Bhutan.
    It has helped in the effective management of natural resources and the protection of Bhutan's unique ecosystems.
    The NES has promoted sustainable agriculture practices, waste management, and the conservation of water resources.
    
    ";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/laws/2011', function() {
    $year = "2011-2013";
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "Bhutan Climate Change Policy - Reducing greenhouse gas emissions and enhancing resilience. ";
    $story = "The BCCAP outlined specific actions to address climate change impacts, such as promoting energy efficiency and sustainable transportation.
    It has contributed to the development and implementation of climate change mitigation and adaptation projects in Bhutan.
    The BCCAP has enhanced awareness and capacity building on climate change issues among various stakeholders.
    
    
    ";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/laws/2015', function() {
    $year = 2015;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "Bhutan's Intended Nationally Determined Contributions (INDCs) - Commitments to reduce emissions and adapt to climate change.";
    $story = "The INDCs demonstrate Bhutan's commitments to reducing greenhouse gas emissions and adapting to climate change.
    Bhutan aims to remain carbon neutral by maintaining its forest cover and implementing renewable energy projects.
    The INDCs have provided a framework for Bhutan's climate change actions and helped mobilize international support and funding.
    
    
    
    ";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/laws/2016', function() {
    $year = 2016;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "Bhutan's National Adaptation Plan (NAP) - Enhancing resilience and reducing vulnerability.";
    $story = "0% emissions: a net carbon sink.
    3 NAPA projects 10 adaptation needs identified in Nationally Determined Contribution (NDC).
    2% national budget on climate change (2012-2013).
    4 NAP Consultation Workshops held. ";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/laws/2017', function() {
    $year = 2017;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "Bhutan's Forest and Nature Conservation Rules and Regulations - Guidelines for sustainable forest management.";
    $story = "Helped in maintaining sustainable forest management, carbon sequestration, biodiversity conservation, and climate change adaptation in Bhutan";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/laws/2018', function() {
    $year = 2018;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "Bhutan's Renewable Energy Policy - Increasing the share of renewable energy sources.";
    $story = "Installed capacity of 2.33 GW, Bhutan over the years has successfully developed its hydropower resources, much of which is exported to India.
    The Bhutan Renewable Energy Master Plan estimates that the country could produce 12 gigawatts of solar and 760 megawatts of wind energy.
    ";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/laws/2019', function() {
    $year = 2019;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "Bhutan's National REDD+ Strategy - Reducing emissions through forest conservation.";
    $story = "Helped reducing emissions through forest conservation.
    ";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/laws/2020', function() {
    $year = 2020;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "/the-people";

    $subtext = "The Climate Change Policy of the Kingdom of Bhutan - Sustainable development and carbon neutrality.";
    $story = "	Helping to maintain sustainable development and the goal of achieving carbon neutrality.
    ";

    return view('components.yearly-story')->with('darkThemeFlag', false)
                                          ->with('links', $links)
                                          ->with('nextLink', $nextLink)
                                          ->with('bodyClass', 'the-laws-1')
                                          ->with('year', $year)
                                          ->with('subtext', $subtext)
                                          ->with('story', $story)
                                          ->with('cnavBg', $cnavBg)
                                          ->with('cnavInnerBorder', $cnavInnerBorder);
});



Route::get('/the-kingdom', function() {
    $description = "
    Bhutan is a leader in environmental sustainability, preserving vast forests as carbon sinks and biodiversity havens. Committed to carbon neutrality, the country emphasizes responsible forestry, hydropower, sustainable agriculture, and eco-friendly practices. Bhutan's unique approach integrates well-being and environmental conservation through the concept of Gross National Happiness.";
    $links = ['/the-kingdom', '/the-kingdom2'];
    $nextLink = "the-flora";
    $cnavBg = "the-kingdom-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $cnavBg = "the-kingdom-cnav-bg";
    $cnavInnerBorder = "border-gray";

    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-kingdom')
                        ->with('name', 'KINGDOM')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                        ->with('cnavInnerBorder', $cnavInnerBorder);
                        
});

Route::get('/the-flora', function() {
    $description = "Bhutan's flora is characterized by its incredible variety. The country's elevation gradient, ranging from subtropical valleys to snow-capped peaks, supports a wide array of plant life. Bhutan is home to over 5,500 species of vascular plants, including countless medicinal herbs, alpine flowers, and rare orchids. The country's rugged terrain and pristine environment have contributed to the preservation of many endemic species found nowhere else on Earth.";
    $links = ['/the-flora', '/the-flora2','/the-flora3', '/the-flora4', '/the-flora5'];
    $nextLink = "the-fauna";
    $cnavBg = "the-flora-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-flora')
                        ->with('name', 'FLORA')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-fauna', function() {
    $description = "The Kingdom of Bhutan is not only renowned for its breathtaking landscapes but also for its incredible biodiversity. The Kingdom of Bhutan is a sanctuary for a diverse array of wildlife, making it a dream destination for nature enthusiasts and conservationists alike.";
    $links = ['/the-fauna', '/the-mammals','/the-mammals2','/the-birds', '/the-birds2', '/the-butterfly2','/the-park'];
    $nextLink = "the-climate";
    $cnavBg = "the-fauna-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-fauna')
                        ->with('name', 'FAUNA')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-mammals', function() {
    $description = "Mammals - In Bhutan, there are records of 129 mammal species inhabiting the country, with 26 of them being globally endangered species. Furthermore, Bhutan boasts significant biodiversity in the realm of wild felids, with a total of 11 out of the 36 known global felid species residing within its borders. A study conducted in the compact area of Royal Manas National Park in 2012 documented the presence of six felid species, accounting for approximately 16 percent of the world's felid species. This finding reinforces Bhutan's status as a prominent habitat and hotspot for wild felids.";
    $links = ['/the-fauna', '/the-mammals', '/the-mammals2','/the-birds', '/the-birds2', '/the-butterfly2','/the-park'];
    $nextLink = "the-climate";
    $cnavBg = "the-fauna2-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-mammals')
                        ->with('name', 'Mammals')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/the-mammals2', function() {
    $links = ['/the-fauna', '/the-mammals', '/the-mammals2','/the-birds', '/the-birds2', '/the-butterfly2','/the-park'];
    $nextLink = "the-climate";
    $cnavBg = "the-fauna2-cnav-bg";
    $cnavInnerBorder = "border-white";
   

    return view('mammals2')->with('darkThemeFlag', true)
                         ->with('links', $links)
                         ->with('nextLink', $nextLink)
                         ->with('cnavBg', $cnavBg)
                         ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-birds', function() {
    $description ="Bhutan is recognized as a part of several globally important bird areas. Currently, around 736 species are recorded to be found in Bhutan out of which 30 are globally threatened. Of the four critically endangered species found in Bhutan";
    $links = ['/the-fauna', '/the-mammals', '/the-mammals2','/the-birds', '/the-birds2','/the-butterfly2','/the-park'];
    $nextLink = "the-climate";
    $cnavBg = "the-winter-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', false)
                        ->with('bodyClass', 'the-birds')
                        ->with('name', 'Birds')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-birds2', function() {
    $links = ['/the-fauna', '/the-mammals', '/the-mammals2','/the-birds', '/the-birds2','/the-butterfly2','/the-park'];
    $nextLink = "the-climate";
    $cnavBg = "the-climate-cnav-bg";
    $cnavInnerBorder = "border-white";
   

    return view('birds2')->with('darkThemeFlag', false)
                         ->with('links', $links)
                         ->with('nextLink', $nextLink)
                         ->with('cnavBg', $cnavBg)
                         ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-butterfly2', function() {
    $links = ['/the-fauna', '/the-mammals', '/the-mammals2','/the-birds', '/the-birds2','/the-butterfly2','/the-park'];
    $nextLink = "the-climate";
    $cnavBg = "the-fauna-cnav-bg";
    $cnavInnerBorder = "border-white";
   

    return view('butterfly2')->with('darkThemeFlag', false)
                         ->with('links', $links)
                         ->with('nextLink', $nextLink)
                         ->with('cnavBg', $cnavBg)
                         ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/the-park', function() {
    $links = ['/the-fauna', '/the-mammals', '/the-mammals2','/the-birds', '/the-birds2','/the-butterfly2','/the-park'];
    $nextLink = "the-climate";
    $cnavBg = "the-fauna-cnav-bg";
    $cnavInnerBorder = "border-white";
   

    return view('park')->with('darkThemeFlag', false)
                         ->with('links', $links)
                         ->with('nextLink', $nextLink)
                         ->with('cnavBg', $cnavBg)
                         ->with('cnavInnerBorder', $cnavInnerBorder);
});


Route::get('/the-climate', function() {
    $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "the-change";
    $cnavBg = "the-climate-cnav-bg";
    $cnavInnerBorder = "border-gray";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-climate')
                        ->with('name', 'CLIMATE')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-summer', function() {
    $description = "Bhutan's summer is a canvas of vibrant traditions and lush landscapes. From tending to crops and lively festivals to outdoor adventures against stunning mountains, it's a season of cultural richness. The community thrives with social gatherings, traditional attire, and fresh produce. Bhutan's summer is a celebration of heritage, community, and the breathtaking beauty of this Himalayan kingdom.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "the-change";
    $cnavBg = "the-change-cnav-bg";
    $cnavInnerBorder = "border-gray";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-summer')
                        ->with('name', 'SUMMER')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/the-winter', function() {
    $description = "Bhutanese winters are marked by festive gatherings and a cozy lifestyle. Traditional clothing keeps locals warm as they celebrate cultural richness. The serene landscapes blanketed in snow create a tranquil backdrop.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "the-change";
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";


    return view('story')->with('darkThemeFlag', false)
                        ->with('bodyClass', 'the-winter')
                        ->with('name', 'WINTER')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-spring', function() {
    $description = "Spring, brings a burst of color and life to Bhutan. The landscape transforms into a riot of blossoming flowers and vibrant greenery. This season is ideal for trekking and hiking as the weather becomes milder. Rhododendrons, the national flower, paint the hillsides in various hues. Farmers begin planting crops, and festivals celebrating renewal and vitality are common. Spring in Bhutan is a time of natural beauty and cultural vibrancy.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "the-change";
    $cnavBg = "the-spring-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', false)
                        ->with('bodyClass', 'the-spring')
                        ->with('name', 'SPRING')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/the-autumn', function() {
    $description = "Bhutan's autumn (September to November) is a masterpiece painted in gold and amber. The air is crisp, and the landscape glows with the warm colors of changing leaves. Harvest activities unfold against the backdrop of clear blue skies, offering a captivating setting for lively festivals. It's a season that beckons explorers to witness the captivating allure of Bhutan's cultural and natural wonders.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "the-change";
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-autumn')
                        ->with('name', 'AUTUMN')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-change', function() {
    $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
    $links = ['/the-change', '/the-change2'];
    $nextLink = "the-laws";
    $cnavBg = "the-change-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-change')
                        ->with('name', 'CHANGE')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/the-change2', function() {
   
    $links = ['/the-change', '/the-change2'];
    $nextLink = "the-laws";
    $cnavBg = "the-change-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('change2')->with('darkThemeFlag', true)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-laws', function() {
    $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
    $links = ['/the-laws', '/laws/1995'];
    $nextLink = "the-people";
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-white";

    return view('story')->with('darkThemeFlag', false)
                        ->with('bodyClass', 'the-laws')
                        ->with('name', 'LAWS')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-people', function() {
    $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
    $links = ['/the-people', '/the-people2'];
    $nextLink = "#";
    $cnavBg = "the-people-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-people')
                        ->with('name', 'PEOPLE')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                        ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-people2', function() {
   
    $links = ['/the-people', '/the-people2'];
    $nextLink = "#";
    $cnavBg = "the-people-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('people2')->with('darkThemeFlag', true)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});