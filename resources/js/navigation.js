var sideMenuVis = false;

$(document).ready(function(e){
    $('.scroll-link').on('click', function(e)
    {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        
        $('html, body').animate({'scrollTop': $target.offset().top}, 1000, 'swing');
    });

    $(window).scroll(function(e){
        if(!($('#top-menu').visible()) && !sideMenuVis) ToggleSideMenu();
        else if($('#top-menu').visible() && sideMenuVis) ToggleSideMenu();
    });

});

function ToggleSideMenu(){
    document.getElementById("side-menu").style.right = !sideMenuVis ? "0" : "-100%";
    sideMenuVis = !sideMenuVis ? true : false;
}


