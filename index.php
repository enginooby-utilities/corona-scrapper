<!-- SCRAP DATA -->
<?php
if ($_GET) {
    // replace space with "-" to match with the URL of the Web target
    $keyword = str_replace(" ","-",$_GET["country"]); 

    $resultPage = file_get_contents("https://www.worldometers.info/coronavirus/country/" .$keyword);
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

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Corona Checker</title>
  <style>
    html {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/bg.jfif) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    body {
      background: none;
    }

    .container {
      color: white;
      text-align: center;
      margin-top: 10%;
      width: 500px;
    }

    label.form-control {
      background: none;
      border: none;
      color: white;
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>