

<html ng-app="myApp">
<head>
    <title>Welcome to CMS</title>
    <link rel="stylesheet" type="text/css" href="/assets/FrontEnd/css/style.css">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/app.css" rel="stylesheet" />

    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <script src="/assets/FrontEnd/js/shopping.js"></script>
    <script src="/assets/FrontEnd/js/angularjs/angular.js"></script>
    <script src="/assets/FrontEnd/js/angularjs/controllers.js"></script>
    <script type="text/javascript">


        var myApp = angular.module('myApp', []);

        // listing data with search
        myApp.controller('ProductListCtrl', function ($scope,$http) {

            var $url =  "<?php echo base_url()?>Products/productList";

            $http.post($url).success(function(data) {
                $scope.products = data
            });
        });
        // To conform clear all data in cart.
        function clear_cart() {
            var result = confirm('Are you sure want to clear all bookings?');

            if (result) {
                window.location = "<?php echo base_url(); ?>index.php/shopping/remove/all";
            } else {
                return false; // cancel button
            }
        }
    </script>
</head>
<body>
<div id='content'>

    <?php echo $content_for_layout; ?>
</div>
</body>
</html>
