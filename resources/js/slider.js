
var current = 1;
var next = 2;
var prev = 3;


$(document).ready(function(e){
    $('.circle').click(function(e){
        let id = e.target.id;
        let target = id.substring(id.length - 1, id.length);
        Hide(current);
        Show(target);
        ValidateNextPrev(target);      
        

    });

    $('.prev').click(function(e){
        Hide(current);
        console.log(prev);
        Show(prev);
        ValidateNextPrev(prev);
        
    });

    $('.next').click(function(e){
        Hide(current);
        console.log(next);
        Show(next);
        ValidateNextPrev(next);
    });
});


function Hide(target){
    $('#' + target).css('visibility', 'hidden');
    $('#' + target).css('opacity', '0');
    $('#' + target).css('left', '-500px');

}

function Show(target){
    $('#' + target).css('visibility', 'visible');
    $('#' + target).css('opacity', '1');    
    $('#' + target).css('left', '0');
}

function ValidateNextPrev(pCurrent){
    prev = pCurrent - 1 < 1 ? 3 : pCurrent - 1;
    next = pCurrent + 1 > 3 ? 1 : pCurrent + 1;
    current = pCurrent;
    
}