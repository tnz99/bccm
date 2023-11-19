@extends('components.layout')
@section('body_class', 'the-butterfly2')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section>
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background: #555536">
                <div class="image active-image" style="background-image:url('../images/backgrounds/park1.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Wangchuck Centennial </div>
                        <div class="sub">National Park</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
            <div class="image-content scroll text-white">It is located in northern Bhutan and is the largest protected area of 4914 square kilometers. The park area covers the popular districts of Gasa, Trongsa, Bumthang, Lhuntse and Wangdue Phodrang. It was established in honour of Wangchuck Dynasty, founded in 1907 for selflessly leading Bhutan for a century. The park accommodates nearly 244 species of rare vascular plants, 23 species of large mammals and 134 species of migratory and local birds</div>
         </div>
        </div>

        <div class="option" style="background: #555536">
            <div class="image" style="background-image: url('../images/backgrounds/park2.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Jigme Dorji </div>
                        <div class="sub">National Park </div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>It is located in the north western part of the country and is the second largest national park in Bhutan. The national park is spread across an area of 4349sq km covering the districts of Gasa, Thimphu, Paro, Wangduephodrang and Punakha. It is named after the late king Jigme Dorji Wangchuck and it was established in 1974.</div>
  
                </ul>
            </div>
        </div>

        

        <div class="option" style="background: #555536">
            <div class="image" style="background-image: url('../images/backgrounds/park3.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Jigme Singye Wangchuck  </div>
                        <div class="sub">National Park</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>It is the third largest park in the country covering an expanse of 1,723 sq. km. The park covers partially 5 of the districts - Tsirang, Sarpang, Wangduephodrang, Zhemgang and Trongsa. It is popular for an old chir pine forest</div>
                </ul>
            </div>
        </div>

        <div class="option" style="background: #555536">
            <div class="image" style="background-image: url('../images/backgrounds/park4.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Royal Manas </div>
                        <div class="sub">National Park </div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>It is the fourth largest national park in the country covering an area of 1057 sq km. The Royal Manas National Park covers most of the Sarpang district, the western half of Zhemgang district, and western Pemagatshel district in Bhutan.</div>
                </ul>    

            </div>
        </div>

        <div class="option" style="background: #555536">
            <div class="image" style="background-image: url('../images/backgrounds/park5.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Phrumsengla</div>
                        <div class="sub"> National Park </div>
                    </div>
                </div>
              
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>It is located in the eastern Bhutan within the boundaries of four districts, Bumthang, Mongar, Lhuentse and Zhemgang. The park covers a total area of 905 square kilometres.</div>
                </ul>
            </div>
        </div>

        <div class="option" style="background: #555536">
            <div class="image" style="background-image: url('../images/backgrounds/park6.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Jigme Khesar Strict</div>
                        <div class="sub">Nature Reserve</div>
                    </div>
                </div>
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                   <div>It is located in the northwest corner of the country and it covers 609.51 square kilometres, occupying most areas of Haa and Samtse districts. It is the only strict nature reserve or protected area in Bhutan that is uninhabited. The reserve grows only endemic poppies, the White Poppy.</div>
                </ul>
            </div>
        </div> 
        
        <div class="option" style="background: #555536">
            <div class="image" style="background-image: url('../images/backgrounds/park7.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Sakteng </div>
                        <div class="sub">Wildlife Sanctuary</div>
                    </div>
                </div>
              
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>It is located in the eastern most part of the country in Trashigang district. It encompasses a total area of 740.60 square kilometer covering almost three fourth of Merak and Sakteng under Trashigang and part of Lauri under Samdrup Jongkhar. It is one of Bhutan's protected areas. It was created in part to protect the migoi, a yeti-like creature whose existence remains unverified. Yeti is a mysterious creature said to live in the mountains and believed to be 8 feet tall, shaggy ape-man with huge feet and walks backwards.</div>
                </ul>
            </div>
        </div>
        
        <div class="option" style="background: #555536">
            <div class="image" style="background-image: url('../images/backgrounds/park8.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Bumdeling </div>
                        <div class="sub">Wildlife Sanctuary</div>
                    </div>
                </div>
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>It is located in the northeastern part of Bhutan, covering most of Tashi Yangtse district and parts of Lhuentse, and Mongar.  The sanctuary is spread in an area of 1538 sq. km.</div>
                </ul>
            </div>
        </div>

        <div class="option" style="background: #555536">
            <div class="image" style="background-image: url('../images/backgrounds/park9.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Phibsoo </div>
                        <div class="sub">Wildlife Sanctuary</div>
                        
                    </div>
                </div>
              
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>It is the second-smallest national park in Bhutan, encompassing an area of 269 square kilometres.  It is located in the Himalayan foothills of south-central Bhutan, (western Sarpang district and south-eastern Dagana district). There are about 637 species of flowering plants, 28 species of mammals and 132 species of birds recorded.</div>
                </ul>
            </div>
        </div>

        <div class="option" style="background: #555536">
            <div class="image" style="background-image: url('../images/backgrounds/park10.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Jomotshangkha </div>
                        <div class="sub">Wildlife Sanctuary</div>
                        
                    </div>
                </div>
              
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>It was previously known as Khaling Wildlife Sanctuary is located in south eastern Bhutan covering an area of 334.73 square kilometres. It lies entirely in Samdrup Jongkhar district.The sanctuary is one of the smallest protected areas after the Phibsoo Wildlife Sanctuary and it is the only non-operational park in Bhutan.</div>
                </ul>
            </div>
        </div>
</div>

        <div>
            <h1 class="text-black">the PARKS</h1>
        </div>

        <!-- <div class="d-flex align-items-center justify-content-between mt-46">
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
        </div>         -->
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