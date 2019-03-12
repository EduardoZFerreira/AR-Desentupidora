
var current = 1;
var next = 2;
var prev = 3;
var visible = 'desentupidora';
var loop = window.setInterval(Next, 4000);

$(document).ready(function(e){
    $('#' + prev).css('left', '-100%');
    $('#' + next).css('left', '100%');
    $('.circle').click(function(e){
        let id = e.target.id;
        current = parseInt(id.substring(id.length - 1, id.length), 10);
        ValidateNextPrev();      
        
    });

    $(".selector-serv").click(function(e){
        
        let idString = e.target.id;
        let selectedServ = idString.replace('serv-btn-','') == 'desen' ? 'desentupidora' : 'construcao';

        
        $('#' + visible).css("opacity", "0");
        $('#' + visible).css("visibility", "hidden");
        $('#' + visible).css("left", "100%");

        $('#' + selectedServ).css("opacity", "1");
        $('#' + selectedServ).css("visibility", "visible");
        $('#' + selectedServ).css("left", "0");
        visible = selectedServ;
    });

    $('.prev').click(function(e){
        current = prev;
        ValidateNextPrev();        
    });

    $('.next').click(Next);
    
});

function Next(){
    current = next;
    ValidateNextPrev();
}

function ValidateNextPrev(){
    prev = current - 1 < 1 ? 3 : current - 1;
    next = current + 1 > 3 ? 1 : current + 1;
    Toggle();    
}

function Toggle(){
    window.clearInterval(loop);
    SlideLeft();
    SlideRight();
    $(".circle").css("opacity", ".5");
    $("#slider-btn-" + current).css("opacity", "1");
    loop = window.setInterval(Next, 4000);
}

function SlideLeft(){
    $('#' + prev).css('z-index', '-999');
    $('#' + prev).css('visibility', 'hidden');
    $('#' + prev).css('opacity', '0');
    $('#' + prev).css('left', '-100%');
    
    
}

function SlideRight(){
    $('#' + current).css('z-index', '0');
    $('#' + current).css('visibility', 'visible');
    $('#' + current).css('opacity', '1');    
    $('#' + current).css('left', '0');
    $('#' + next).css('left', '100%');
}