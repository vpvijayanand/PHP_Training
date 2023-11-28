<?php
for ($i = 0; $i < 10; $i++) {
    if ($i == 4) {
        continue; // Skip the number 4
    }
    if ($i == 8) {
        break; // Exit the loop when i equals 8
    }
    echo "The number is: $i <br>";
}
?>
