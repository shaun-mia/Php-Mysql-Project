
<html>
<head>
<title>Contact Book</title>
<!-- <link rel="stylesheet" href="style.css"> -->
<style>
  <?php include "style.css" ?>

      .column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: rgba(240, 136, 136, 0.795);
    transition: 0.3s
}


.container {
  padding: 0 16px;
}


.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
  text-weight:bold;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
  
}
</style>
</head>
<body>
<div id = "main">
  <h1> Contact Book</h1>
  <?php 
  
  include_once 'menu-main.php';
  ?>
  


<div class="column">
  <div class="card">

    <div class="container">
      <br>
      <h2>Shaun </h2>
      <p>All Contribution by Shaun </p>
      <p>shaun15-3200@diu.edu.bd</p>
      <p>ID: 201-15-3200</p>
      <p><button class="button">Contact</button></p>
    </div>
  </div>
</div>
</div>
</body>
</html>
