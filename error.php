<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="4.5;URL='register.php'" />
<style>
  div{
   
      margin-top: 30px;

  }
.alert {

  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>




<marquee width="60%" direction="down" height="1000px">
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong> The time slot has been choosed by some other one...Please choose different timings.</strong> 
</div>
</marquee>

</body>
</html>
