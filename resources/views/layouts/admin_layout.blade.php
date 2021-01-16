<?php
$controller =  class_basename(Route::current()->controller);
list(, $action) = explode('@', Route::getCurrentRoute()->getActionName());
$method = $action;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin Pro</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('public/assets/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/font-awesome/css/font-awesome.min.css') }}"/>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="https://www.bootstrapdash.com/demo/majestic-admin-pro/template/images/favicon.ico" />
</head>
<body>

@include ('common.common_header')

@include ('common.admin_sidebar')

@include ($controller.'/'.$method)

@include ('common.common_footer')

  
</body>

</html>
