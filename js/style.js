$(document).ready(function(){
    $(".submit", $("#order-detail")).on("click", function(){
        $("#order-detail").css({
            display:"none"
        });
        $("#info-cart").css({
            display:"block"
        });
        $(".submit", $("#info-cart")).on("click", function(){
            $("#info-cart").css({
                display:"none"
            });
            $("#notify").css({
                display:"block"
            });
        })
    })

})
