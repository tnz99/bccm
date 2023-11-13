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
|
*/


Route::get('/', function() {
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-gray";

    return view('home')->with('cnavBg', $cnavBg)
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
    return view('register');
});

Route::get('/the-kingdom2', function() {
    return view('kingdom2');
});

Route::get('/the-laws-1', function() {
    $links = ['/the-laws', '/the-laws-1'];
    $nextLink = "#";
    return view('laws_1') ->with('links', $links)
                          ->with('nextLink', $nextLink);
});

// Route::get('/laws', function() {
//     return view('laws');
// });

Route::get('/the-people', function() {
    return view('people');
});
Route::get('/imgs', function() {
    return view('image_gallery');
});
Route::get('/the-flora2', function() {
    return view('flora2');
});

Route::get('/the-kingdom', function() {
    $description = "Visionary Kings of Bhutan have played essential roles in ensuring that Bhutan remains a shining example of environmental conservation and sustainability. Their leadership has helped the country maintain its carbon-neutral status and preserve its breathtaking natural landscapes for generations to come.";
    $links = ['/the-kingdom', '/the-kingdom2'];
    $nextLink = "#";
    $cnavBg = "the-kingdom-cnav-bg";
    $cnavInnerBorder = "border-gray";

    $cnavBg = "the-law-cnav-bg";
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
    $links = ['/the-flora', '/the-flora2'];
    $nextLink = "#";
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
    $links = ['/the-fauna', '/the-fauna2'];
    $nextLink = "#";
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

Route::get('/the-climate', function() {
    $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
    $links = ['/the-climate', '/the-summer','/the-winter','/the-spring','/the-autumn'];
    $nextLink = "#";
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
    $nextLink = "#";
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
    $nextLink = "#";
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
    $nextLink = "#";
    $cnavBg = "the-spring-cnav-bg";
    $cnavInnerBorder = "border-gray";


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
    $nextLink = "#";
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
    $nextLink = "#";
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
    $links = ['/the-laws', '/the-laws-1'];
    $nextLink = "#";
    $cnavBg = "the-law-cnav-bg";
    $cnavInnerBorder = "border-white";


    return view('story')->with('darkThemeFlag', true)
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