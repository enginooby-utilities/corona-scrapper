<?php
if ($_GET && $caseNumber) {
        echo "<h4>" . $_GET["country"] . "</h4>";
        echo
        '<div class="row mt-4">
    <div class="col-4">
    <div class="box-border">
      <div class="alert  background-colorfull2" role="alert">
              <b>Total</b><br>
        ' . $caseNumber . '
      </div>
      </div>
    </div>
    <div class="col-4">
        <div class="box-border">
      <div class="alert background-colorfull3" role="alert">
        <b>Deaths</b><br>
        ' . $deathNumber . '
      </div>
            </div>
    </div>
    <div class="col-4">
            <div class="box-border">
      <div class="alert  background-colorfull1" role="alert">
        <b>Recovered</b><br>
        ' . $recoveryNumber . '
      </div>
                  </div>
    </div>
  </div>';
} elseif ($_GET && !$caseNumber) {
        echo "<h4>No result</h4>";
}
