<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="vendor/angular-1.2.16/angular.min.js"></script>
<script type="text/javascript" src="vendor/angular-1.2.16/angular-route.min.js"></script>
<script type="text/javascript" src="js/controllers.js"></script>
<link rel="stylesheet" href="vendor/font-awesome-4.1.0/css/font-awesome.min.css" />
<link href="http://fonts.googleapis.com/css?family=Raleway:700,500,400,300,200" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="styles/bluewild.css" />
<link rel="stylesheet" href="styles/bluewild-devices.css" />
<link rel="stylesheet" href="styles/normalize.css" />
<link rel="SHORTCUT ICON" href="favicon.ico" />
<title>Blue Wild - Scuba Diving</title>
</head>
<body data-ng-app="bw2">
<header>
    <div class="header-wrapper">
      <h1 id="logo">dive the blue wild</h1>
      <div class="contact-info">
         <a href="tel:19542135067"><i class="fa fa-phone"></i> : (954) 213-5067</a>&nbsp;&nbsp;
         <br class="rw-break" />
         <a href="mailto:bluewildscuba@gmail.com" target="_blank">
            <i class="fa fa-envelope"></i> : bluewildscuba@gmail.com</a>
      </div>
    </div>
</header>

<div data-ng-view></div>

</body>
</html>
