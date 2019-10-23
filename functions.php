<?php
  function safety_request($str){
    $str=trim($str);
    $str=stripslashes($str);
    $str=htmlspecialchars($str);
    return $str;
  }
?>
