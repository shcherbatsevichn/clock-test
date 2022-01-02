var pieChart = document.getElementById("piechart");
pieChart.wight = 230;
pieChart.height = 230;

var ctx = pieChart.getContext("2d");

drawArcbg(ctx, 115, 115, 105, 0, 6.28319);

function drawArcbg(ctx, centerX, centerY, radius, startAngle, endAngle) {
    ctx.beginPath();
    ctx.arc(centerX, centerY, radius, startAngle, endAngle);
    ctx.strokeStyle = "#C1FBFF";
    ctx.lineWidth = 20;
    ctx.stroke();
}

function drawPieChart(ctx, centerX, centerY, radius, startAngle, endAngle) {
    ctx.clearRect(0, 0, 230, 230);
    drawArcbg(ctx, 115, 115, 105, 0, 6.28319);
    ctx.save();
    ctx.translate(115, 115)
    ctx.rotate(4.71239);
    ctx.beginPath();
    ctx.arc(centerX, centerY, radius, startAngle, endAngle, false);
    ctx.strokeStyle = "#F4B75B";
    ctx.lineWidth = 20;
    ctx.lineCap = "round";
    ctx.stroke();
    ctx.restore();
}

$(document).ready(function() {
    $("#btn").click(
        function() {
            sendAjaxForm('ajax_form', 'blocks/ajax.php');
            return false;
        }
    );
});

function sendAjaxForm(ajax_form, url) {
    $.ajax({
        url: url, //url страницы php
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" + ajax_form).serialize(), // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            result = $.parseJSON(response);
            drawPieChart(ctx, 0, 0, 105, 0, result.rad);

            $('#clock').html(result.clock);

        },
        error: function(response) { // Данные не отправлены
            $('#clock').html('Ошибка. Данные не отправлены.');
        }
    });
}