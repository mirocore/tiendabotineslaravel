$(document).ready(function(){
    $("#btn-menu").on("click", function(){
        $("#navMobile").toggleClass("mostrar");
    });
});

$(window).on("scroll", function(){
    if($(window).scrollTop()){
        $("#top").addClass("reducir");
    }
    else{
        $("#top").removeClass("reducir");
    }
})

let cantidad = document.getElementById('cantidad');
let sumar = document.getElementById('sumar');
let restar = document.getElementById('restar');

sumar.addEventListener('click', function(){
    cantidad.value++
})

restar.addEventListener('click', function(){
    cantidad.value--
})


