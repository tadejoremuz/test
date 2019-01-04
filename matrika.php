<?php

$matrix = array(
    array(0, 1, 2, 3, 4, 5, 6, 7),
    array(5, 3, 4, 6, 6, 2, 0, 8),
);

function checkMatrix($matrica) {
  for($x = 0; $x < sizeof($matrica); $x++) {
    if (in_array(1, $matrica[$x])) {
      for($y = 0; $y < sizeof($matrica[$x]); $y++) {
        $matrica[$x][$y] = "X";
      }
    }
  }
  print_r($matrica);
}

echo "Input matrix: ";
print_r($matrix);
echo "<br><br>Output: ";
checkMatrix($matrix);

?>
