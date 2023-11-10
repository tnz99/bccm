<!DOCTYPE html>
<html lang="en">
    <!--

    @Programith

    //-->

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/image-gallery.css') }}">

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </head>
    <body>
        <div class="gallery-container">
    <!-- Your existing image gallery HTML here -->


        <div class="options">
            <div class="option active" style="--optionBackground: url('../images/backgrounds/the_kingdom.png');">
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="info">
                        <div class="main">Ultricies</div>
                        <div class="sub">Elit ut aliquam purus sit</div>
                    </div>
                </div>
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_kingdom.png');">
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <div class="info">
                        <div class="main">Luctus</div>
                        <div class="sub">Arcu cursus vitae congue mauris</div>
                    </div>
                </div>
            </div>
        
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_flora.png');">
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <div class="info">
                        <div class="main">Purus</div>
                        <div class="sub">Neque vitae tempus quam pellentesque</div>
                    </div>
                </div>
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_people.png');">
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <div class="info">
                        <div class="main">Accumsan</div>
                        <div class="sub">Aagittis id consectetur purus ut</div>
                    </div>
                </div>
            </div>
            <div class="option" style="--optionBackground: url('../images/backgrounds/the_fauna.png');">
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
        </div>
        </div>

        <script>
            $(".option").click(function () {
                $(".option").removeClass("active");
                $(this).addClass("active");
            });
        </script>
    </body>
</html>