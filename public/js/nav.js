$(function() {
    $('#open-menu').click(function() {
        $('#open-menu').hide();
        $(".header-nav-list").show();
    })

    $('#close-nav').click(function() {
        $('#open-menu').show();
        $(".header-nav-list").hide();
    })

    // story nav

    $('#story-nav-btn').click( function() {
        $('#fullpage-story-menu').show();
    })
});