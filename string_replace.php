<?php

$str = "cokoooooladaaaa";

function replaceString($string) {
  $repeated ="";
  $size =  strlen($string);
  for($x = 0; $x < $size; $x++) {
    if (strcmp(substr($string, $x, 1),substr($string, $x+1, 1)) == 0 ){
      $repeated = $repeated . substr($string, $x+1, 1);
    } else {
        $repeated = $repeated . substr($repeated, 0, 1);
        $repeatedchar = substr($repeated, 0, 1) . strlen($repeated);
        $string = str_replace($repeated, $repeatedchar, $string);
        $repeated="";
      }
  }

  echo "Output: " . $string;
}
echo "Original string: " . $str . "<br>";
replaceString($str);

?>
