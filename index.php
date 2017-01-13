<!--

http://www.jqueryscript.net/slider/Slim-jQuery-UI-Range-Slider-with-jQuery-CSS3.html

-->

<html>
<head>
    <title>Range Slider | Example</title>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/rangeslider.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Multiple Range Slider Example</h2>
    <table align="center">
        <thead>
        <tr>
            <td>
                <div id="1" class="rangeBar"></div>
            </td>
            <td style="vertical-align: middle;"><input type="text" value="0" class="rangeValue" id="v1"/></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <div id="2" class="rangeBar"></div>
            </td>
            <td style="vertical-align: middle;"><input type="text" value="0" class="rangeValue" id="v2"/></td>

        </tr>
        <tr>
            <td>
                <div id="3" class="rangeBar"></div>
            </td>
            <td style="vertical-align: middle;"><input type="text" value="0" class="rangeValue" id="v3"/></td>

        </tr>
        <tr>
            <td>
                <div id="4" class="rangeBar"></div>
            </td>
            <td style="vertical-align: middle;"><input type="text" value="0" class="rangeValue" id="v4"/></td>

        </tr>
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-success" id="getvalue">Get Value</button>
    </div>
</div>
</body>
<script>
    $(document).ready(function () {
        $('.rangeBar').each(function () {
            $(".rangeBar").slider({
                range: "min",
                max: 100,
                slide: function (e, ui) {
                    $('#v' + this.id).val(ui.value);
                }
            });
        });

        $('#getvalue').click(function () {
            var show = [];
            $('.rangeValue').each(function () {
                show.push($(this).val());
            });
            console.log(show);
        });

    });
</script>
</html>