<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script type="text/javascript" src="vendor/angular-1.2.16/angular.min.js"></script>
      <script type="text/javascript" src="vendor/angular-1.2.16/angular-route.min.js"></script>
      <script type="text/javascript" src="js/controllers.js"></script>
      <link rel="stylesheet" href="vendor/font-awesome-4.1.0/css/font-awesome.min.css" />
      <link href="http://fonts.googleapis.com/css?family=Raleway:700,500,400,300,200" rel="stylesheet" />
      <link rel="stylesheet" href="styles/foundation.css" />
      <link rel="stylesheet" href="styles/normalize.css" />
      <link type="text/css" rel="stylesheet" href="styles/bluewild.css" />
      <link type="image/x-icon" rel="SHORTCUT ICON" href="favicon.ico" />
      <title>Blue Wild - Scuba Diving</title>
   </head>
   <body data-ng-app="bw2">
      <header>
         <div class="row offset-top">
            <div class="small-12 medium-6 large-6 columns no-padding small-only-text-center">
               <h3>dive the blue wild</h3>
            </div>
            <div class="small-12 medium-6 large-6 columns contact-info small-only-text-center">
               <a href="tel:19542135067"><i class="fa fa-phone"></i> : (954) 213-5067</a>&nbsp;&nbsp;
               <br class="show-for-small-only" />
               <br class="show-for-small-only" />
               <a href="mailto:bluewildscuba@gmail.com" target="_blank">
               <i class="fa fa-envelope"></i> : bluewildscuba@gmail.com</a>
            </div>
         </div>
      </header>
      <div data-ng-view></div>
   </body>
</html>