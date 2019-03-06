
var current = 1;
var next = 2;
var prev = 3;


$(document).ready(function(e){
    $('.circle').click(function(e){
        let id = e.target.id;
        let target = id.substring(id.length - 1, id.length);
        Hide(current);
        Show(target);
        current = target;

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