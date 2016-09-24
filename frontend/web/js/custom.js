/**
 * Created by ryakoviv on 11.09.2016.
 */
$(document).ready(function() {
    $('#price .price_grid .content_btn').on("click", function (e) {
        var getHtmlFromSelect = function (arr) {
            for (var i=0; i<arr.length; i++){
                arr[i] = $(arr[i]).text();
            }
            return arr;
        };

        e.preventDefault();
        var parent = $(e.target).parent();
        var arrSize = getHtmlFromSelect($(parent).find(".picture-size option"));
        var selectedSize = $(parent).find(".picture-size").find(":selected").text();
        var selectedSizeNumber = $.inArray(selectedSize, arrSize);
        var arrPeople = getHtmlFromSelect($(parent).find(".picture-people-number option"));
        var selectedPeople = $(parent).find(".picture-people-number").find(":selected").text();
        var selectedPeopleNumber = $.inArray(selectedPeople, arrPeople);
        var error = $(parent).find(".error-block");
        var prices = [];
        switch ($(parent).attr("id")){
            case "price-pencil":
                prices[0] = [0, 0, 0, 0];
                prices[1] = [0, 30, 50, 75];
                prices[2] = [0, 0, 75, 130];
                prices[3] = [0, 0, 0, 170];
                break;
            case "price-pop-art":
                prices[0] = [0, 0, 0, 0];
                prices[1] = [0, 330, 450, 600];
                prices[2] = [0, 350, 500, 650];
                prices[3] = [0, 0, 550, 700];
                break;
        }

        var endPrice = prices[selectedPeopleNumber][selectedSizeNumber];
        if (endPrice){
            $(error).addClass("hidden");
            $(this).addClass("price-value").removeClass("content_btn").html(endPrice+"грн");
        }
        else if(!endPrice && selectedPeopleNumber && selectedSizeNumber) {
            $(error).removeClass("hidden");
        }
    });

    $('#price .price_grid select').on("click", function (e) {
        $(e.target).parents(".price_grid").find(".error-block").addClass("hidden");
        $(e.target).parents(".price_grid").find(".price-calc-btn").addClass("content_btn").removeClass("price-value").html("Визначити ціну");
    });
});