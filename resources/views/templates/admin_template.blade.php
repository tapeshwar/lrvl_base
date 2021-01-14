<?php
$controller =  class_basename(Route::current()->controller);
list(, $action) = explode('@', Route::getCurrentRoute()->getActionName());
$method = $action;
?>

@extends ('common.common_header')
@extends ('index')
