<!-- SCRAP DATA -->
<?php
if ($_GET) {
        // replace space with "-" to match with the URL of the Web target
        $keyword = str_replace(" ", "-", $_GET["country"]);

        $resultPage = file_get_contents("https://www.worldometers.info/coronavirus/country/" . $keyword);
        $pageArray = explode('<span style="color:#aaa">', $resultPage);

        $secondPageArray = explode('</span>', $pageArray[1]);
        $caseNumber = $secondPageArray[0];

        $thirdPageArray = explode('<span>', $secondPageArray[1]);
        $deathNumber = $thirdPageArray[1];

        $fourthPageArray = explode('<span>', $secondPageArray[2]);
        $recoveryNumber = $fourthPageArray[1];
}
?>

<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8, shrink-to-fit=yes">
        <title>Corona Checker</title>

        <!-- OPTIONAL -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">

        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
                html {
                        /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/bg.jfif) no-repeat center center fixed;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover; */
                }

                body {
                        /* background: none; */
                }

                .container {
                        /* color: white; */
                        text-align: center;
                        margin-top: 10%;
                        width: 500px;
                }

                label.form-control {
                        background: none;
                        border: none;
                }

                input {
                        margin-top: 20px;
                }

                .display-4 {
                        font-size: 43px;
                }

                .alert {
                        opacity: 0.85;
                }
        </style>

        <link rel="stylesheet" href="../../dynamic-ui-framework/css/dynamic-style.css" type="text/css">

</head>

<body>

        <div class="container">
                <div class="display-4">How many Corona cases?</div>

                <form method="get">
                        <div class="form-group">
                                <label for="country" class="form-control">Enter a country</label>
                                <input type="text" name="country" id="country" class="form-control" placeholder="E.g. Viet Nam, Poland, US...">
                        </div>
                        <button type="submit" class="btn btn-primary">Check</button>
                </form>

                <!-- RESULT -->
                <br>
                <?php include "result.php" ?>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script async src="../../dynamic-ui-framework/js/DynamicTheme.js" type="module"></script>
</body>

</html>