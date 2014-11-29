$(document).ready(function(){
    $(".change",$("#order-detail")).on("click", function(){
        $(this).closest(".quantity").find(".change-quantity")
    })
})