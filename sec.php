<?php include("dbconn.php"); ?>

<?php 
    if(isset($_POST['register'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $service = $_POST['service'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $message = $_POST['message'];
        $query=mysqli_query($conn, "SELECT * FROM appointment WHERE time='$time'");
       if(mysqli_num_rows($query)>0)
       {
          include 'error.php';
       }

       else
       {
        $inserted = mysqli_query($conn, "INSERT INTO appointment (`firstname`, `lastname`, `service`, `phone`, `date`, `time`, `message`) values ('".$fname."', '".$lname."', '".$service."', '".$phone."', '".$date."', '".$time."', '".$message."')");

          include 'registered.php';
        if($inserted){
            echo "";
        }
        else{

            echo "";
        }
      }
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   
  
   
 </head>
 <body>
 
 </body>
 </html>
<!--<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="3.5;URL='index.php'" />    
 
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen - Success Message</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>
    .success-message {
  text-align: center;
  max-width: 500px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.success-message__icon {
  max-width: 75px;
}

.success-message__title {
  color: #3DC480;
  transform: translateY(25px);
  opacity: 0;
  transition: all 200ms ease;
}
.active .success-message__title {
  transform: translateY(0);
  opacity: 1;
}

.success-message__content {
  color: #B8BABB;
  transform: translateY(25px);
  opacity: 0;
  transition: all 200ms ease;
  transition-delay: 50ms;
}
.active .success-message__content {
  transform: translateY(0);
  opacity: 1;
}

.icon-checkmark circle {
  fill: #3DC480;
  transform-origin: 50% 50%;
  transform: scale(0);
  transition: transform 200ms cubic-bezier(0.22, 0.96, 0.38, 0.98);
}
.icon-checkmark path {
  transition: stroke-dashoffset 350ms ease;
  transition-delay: 100ms;
}
.active .icon-checkmark circle {
  transform: scale(1);
}

  </style>
<script>
  window.console = window.console || function(t) {};
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<div class="success-message">
<svg viewBox="0 0 76 76" class="success-message__icon icon-checkmark">
<circle cx="38" cy="38" r="36" />
<path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M17.7,40.9l10.9,10.9l28.7-28.7" />
</svg>
<h1 class="success-message__title">Message Received</h1>
<div class="success-message__content">
<p>We will respond within 24 Hours.</p>
</div>
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script id="rendered-js">
      function PathLoader(el) {
  this.el = el;
  this.strokeLength = el.getTotalLength();

  // set dash offset to 0
  this.el.style.strokeDasharray =
  this.el.style.strokeDashoffset = this.strokeLength;
}

PathLoader.prototype._draw = function (val) {
  this.el.style.strokeDashoffset = this.strokeLength * (1 - val);
};

PathLoader.prototype.setProgress = function (val, cb) {
  this._draw(val);
  if (cb && typeof cb === 'function') cb();
};

PathLoader.prototype.setProgressFn = function (fn) {
  if (typeof fn === 'function') fn(this);
};

var body = document.body,
svg = document.querySelector('svg path');

if (svg !== null) {
  svg = new PathLoader(svg);

  setTimeout(function () {
    document.body.classList.add('active');
    svg.setProgress(1);
  }, 200);
}

document.addEventListener('click', function () {

  if (document.body.classList.contains('active')) {
    document.body.classList.remove('active');
    svg.setProgress(0);
    return;
  }
  document.body.classList.add('active');
  svg.setProgress(1);
});
      //# sourceURL=pen.js
    </script>
</body>
</html>-->