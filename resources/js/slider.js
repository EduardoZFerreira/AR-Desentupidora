
var current = 1;
var next = 2;
var prev = 3;


$(document).ready(function(e){
    $('.circle').click(function(e){
        let id = e.target.id;
        let target = id.substring(id.length - 1, id.length);
        ValidateNextPrev(target);      
    });

    $('.prev').click(function(e){
        current = prev;
        ValidateNextPrev(prev);
        
    });

    $('.next').click(function(e){
        current = next;
        ValidateNextPrev(next);
    });
});

function ValidateNextPrev(pCurrent){
    prev = current - 1 < 1 ? 3 : current - 1;
    next = current + 1 > 3 ? 1 : current + 1;
    Toggle();    
}

function Toggle(){
    SlideLeft();
    SlideRight();
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