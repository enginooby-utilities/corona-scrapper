<?php
// hide error on web page
error_reporting(0);
ini_set('display_errors', 0);

$country = $_GET['country'];

if ($country) {
        // replace space with "-" to match with the URL of the Web target
        $keyword = str_replace(" ", "-", $country);

        $resultPage = file_get_contents("https://www.worldometers.info/coronavirus/country/" . $keyword);
        $pageArray = explode('<span style="color:#aaa">', $resultPage);

        $secondPageArray = explode('</span>', $pageArray[1]);
        $caseNumber = $secondPageArray[0];

        $thirdPageArray = explode('<span>', $secondPageArray[1]);
        $deathNumber = $thirdPageArray[1];

        $fourthPageArray = explode('<span>', $secondPageArray[2]);
        $recoveryNumber = $fourthPageArray[1];

        $country = strtoupper($country);
        if ($caseNumber) {
                include "result.php";
        } else {
                echo '<h4>No result</h4>';
        }
}
