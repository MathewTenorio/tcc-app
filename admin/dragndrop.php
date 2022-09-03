<?php include('db_connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
    <style>
      .main-fuck{
        position: relative;
      }
      .taklob{
        position: absolute;
        display: float-right;
        background-color: #F3F3F3;
        border-top: 1px  solid #c0c0c0;
        border-left: 1px  solid #c0c0c0;
        margin-top: 0px ;
        margin-left: 0px;
        width: 60px;
        height: 30px;
        z-index: 1;
      }
    </style>
    <script src="js/daypilot/daypilot-all.min.js"></script>
    <div><a href="https://javascript.daypilot.org/"></a></div>
<body>
<div class="containe-fluid" id="general_container">
  <div class="card">
    <div class="card-body">
          <div class=" "></div>
          <div class="main-fuck">
            <?php include 'drag.html'?>
          </div>
          

          </div> 
    </div>
  </div>

</body>
</html>

<script src="condition.js"></script>