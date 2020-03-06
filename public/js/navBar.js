$(document).ready(function(){
    var isSideMenuOpen = 1;

    if($(window).width()<780){
        hideSideNav();
    }

    $(window).resize(function() {
        if($(window).width()<780){
            hideSideNav();
            $('.close-btn').hide();
        }else{
            showSideNav();
            showTopMenu();
            $('.close-btn').hide();
        }
    });

    $(".burger").click(function(){
        if(isSideMenuOpen==1){
            hideSideNav();
        }else{
            showSideNav();
        }
    });

    $('.close-btn').click(function(){
        if(isSideMenuOpen==1){
            hideSideNav();
        }else{
            showSideNav();
        }
    });

    function hideSideNav(){
        $("#sideNav").hide();
        isSideMenuOpen = 0;
        $('.close-btn').hide();
        showTopMenu();
    }

    function showSideNav() {
        $("#sideNav").show();
        isSideMenuOpen = 1;
        $('.close-btn').show();
        hideTopMenu();
    }

    function showTopMenu() {
        $("#topmenu").show();
    }
    function hideTopMenu() {
        $("#topmenu").hide();
    }
});
