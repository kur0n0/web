<?php
session_start();
echo 'user id = '.$_SESSION['uid'].'<br>';
echo 'access token = '.$_SESSION['access_token'].'<br>';
echo 'username = '.$_SESSION['name'].'<br>';
echo 'surname = '.$_SESSION['name_family'].'<br>';
?>