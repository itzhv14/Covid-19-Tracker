<?php
     session_start();
     // echo $_SESSION["scorepass3"];
     // echo $_SESSION["riskpass"];
    
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<nav class="navbar navbar-expand-lg nav_styles">
  <div class="logo">
        <img src="./resources/img/logo.png" alt="" />
</div>
  <a class="navbar-brand" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form.html">Lets Test!</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Symptoms</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="page1.html">Prevention</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="graph.html">Statistics</a>
      </li>
    </ul>
  </div>
</nav>
<br>


<div class="container">

  <div class="jumbotron">
  <div class="justify-content-center" style="background-color: lightgreen; height: 100px; border-radius:5px; margin-top:auto;"><h1 class="display-4" style="text-align: center; padding-top: 16px;
">LOW</h1></div>
  <p class="lead"><!-- This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. --></p>
  <hr class="my-4">
  <p></p>
  <p class="lead">
    Based on your inputs, we advise the following:<b>
Stay home and take care of yourself in home isolation</b>
</p>
    <p class="lead"> Prevention and precautions: </p>
    <div id="demo"> <button type="button" class="btn btn-dark" onclick="loadDoc()">Click Here</button></div>
 

</div>
</div>

<script type="text/javascript">
	function loadDoc() {
    document.getElementById("demo").innerHTML = ''
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "low.txt", true);
  xhttp.send();
}
</script>
</body>
</html>