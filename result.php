<?php
if ($_GET&&$caseNumber){
    echo "<h3>".$_GET["country"]."</h3>";
    echo 
    '<div class="row">
    <div class="col">
      <div class="alert alert-warning" role="alert">
        <b>Total</b><br>
        '.$caseNumber.'
      </div>
    </div>
    <div class="col">
      <div class="alert alert-danger" role="alert">
        <b>Deaths</b><br>
        '.$deathNumber.'
      </div>
    </div>
    <div class="col">
      <div class="alert alert-success" role="alert">
        <b>Recovered</b><br>
        '.$recoveryNumber.'
      </div>
    </div>
  </div>';

} elseif($_GET&&!$caseNumber) {
    echo "<h3>No result</h3>";
}

?>