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
    return view('contact');
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

Route::get('/laws/1999', function() {
    $year = 1999;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1999'];
    $nextLink = "#";

    $subtext = "Bhutan's Forest and Nature Conservation Act - Conservation and sustainable management of Bhutan/'s forests.";
    $story = "The act has helped in the conservation and sustainable management of Bhutan's forests, which cover over 70% of the country's land area
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

Route::get('/laws/2000', function() {
    $year = 2000;
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $links = ['/the-laws', '/laws/1999'];
    $nextLink = "#";

    $subtext = "Bhutan's Forest and Nature Conservation Act - Conservation and sustainable management of Bhutan/'s forests.";
    $story = "The act has helped in the conservation and sustainable management of Bhutan's forests, which cover over 70% of the country's land area
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


Route::get('/the-kingdom', function() {
    $description = "Bhutan, as a kingdom, has taken remarkable steps to tackle climate change and exemplifies 
    an unwavering commitment to environmental sustainability. Its unique approach includes the preservation of
    vast forested areas, which act as vital carbon sinks and biodiversity havens. Bhutan has pledged to remain 
    carbon neutral,actively working to absorb more carbon dioxide than it emits through responsible forestry 
    practices and hydropower production, which provides clean energy and reduces the nation's reliance on fossil fuels. 
    the Bhutanese government also emphasizes sustainable agriculture, eco-friendly transportation, and renewable energy adoption,
    fostering a holistic approach to mitigating climate change. Additionally, Bhutan's pioneering concept of Gross National Happiness (GNH)
    places well-being, cultural preservation, and environmental conservation at the core of its development agenda, ensuring that climate action is integrated into the very fabric of the kingdom's policies and practices.";
    $links = ['/the-kingdom', '/the-kingdom2'];
    $nextLink = "the-flora";
    $cnavBg = "the-kingdom-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $cnavBg = "the-kingdom-cnav-bg";
    $cnavInnerBorder = "border-gray";

    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-kingdom')
                        ->with('name', 'Kingdom')
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
                        ->with('name', 'flora')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-fauna', function() {
    $description = "The Kingdom of Bhutan is not only renowned for its breathtaking landscapes but also for its incredible biodiversity. The Kingdom of Bhutan is a sanctuary for a diverse array of wildlife, making it a dream destination for nature enthusiasts and conservationists alike.";
    $links = ['/the-fauna', '/the-mammals','/the-mammals2'];
    $nextLink = "the-climate";
    $cnavBg = "the-fauna-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-fauna')
                        ->with('name', 'fauna')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-mammals', function() {
    $description = "Mammals - In Bhutan, there are records of 129 mammal species inhabiting the country, with 26 of them being globally endangered species. Furthermore, Bhutan boasts significant biodiversity in the realm of wild felids, with a total of 11 out of the 36 known global felid species residing within its borders. A study conducted in the compact area of Royal Manas National Park in 2012 documented the presence of six felid species, accounting for approximately 16 percent of the world's felid species. This finding reinforces Bhutan's status as a prominent habitat and hotspot for wild felids.";
    $links = ['/the-fauna', '/the-mammals', '/the-mammals2'];
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
    $links = ['/the-fauna', '/the-mammals', '/the-mammals2'];
    $nextLink = "the-climate";
    $cnavBg = "the-fauna2-cnav-bg";
    $cnavInnerBorder = "border-white";
   

    return view('mammals2')->with('darkThemeFlag', false)
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
                        ->with('name', 'climate')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-summer', function() {
    $description = "Bhutan's summers beckon with open arms, inviting you to a world where the air is filled with the scent of wildflowers and the echoes of ancient traditions.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "the-change";
    $cnavBg = "the-change-cnav-bg";
    $cnavInnerBorder = "border-gray";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-summer')
                        ->with('name', 'summer')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/the-winter', function() {
    $description = "Embrace the cozy charm of Bhutanese winters, where snow-capped peaks stand tall, and the crisp mountain air carries the promise of adventure and tranquility.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "the-change";
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";


    return view('story')->with('darkThemeFlag', false)
                        ->with('bodyClass', 'the-winter')
                        ->with('name', 'winter')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-spring', function() {
    $description = "Awakening from winter's embrace, step into this captivating scene where cherry blossoms and dzongs come together, inviting you to witness not just a seasonal transformation but an enchanting fusion of nature's fleeting beauty and Bhutan's enduring cultural heritage.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "the-change";
    $cnavBg = "the-spring-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', false)
                        ->with('bodyClass', 'the-spring')
                        ->with('name', 'spring')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});
Route::get('/the-autumn', function() {
    $description = "As summer bids farewell, Bhutan's autumn unveils a breathtaking spectacle, with golden leaves carpeting the ground and the clear skies framing the majestic Himalayas.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "the-change";
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-autumn')
                        ->with('name', 'autumn')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-change', function() {
    $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
    $links = ['/the-change', '/the-r'];
    $nextLink = "the-laws";
    $cnavBg = "the-change-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-change')
                        ->with('name', 'change')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-laws', function() {
    $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
    $links = ['/the-laws', '/laws/1999'];
    $nextLink = "the-people";
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-white";

    return view('story')->with('darkThemeFlag', false)
                        ->with('bodyClass', 'the-laws')
                        ->with('name', 'laws')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                       ->with('cnavInnerBorder', $cnavInnerBorder);
});

Route::get('/the-people', function() {
    $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
    $links = ['/the-people', '/the-laws-1'];
    $nextLink = "#";
    $cnavBg = "the-people-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', true)
                        ->with('bodyClass', 'the-people')
                        ->with('name', 'people')
                        ->with('description', $description)
                        ->with('links', $links)
                        ->with('nextLink', $nextLink)
                        ->with('cnavBg', $cnavBg)
                        ->with('cnavInnerBorder', $cnavInnerBorder);
});