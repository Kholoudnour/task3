<?php
$points = 90;
if($points < 50) {
    echo "failed";
}elseif($points <=51-65) {
    echo "pass";
}elseif($points <=66-75) {
    echo "good";
}elseif($points <=76-90) {
    echo "very good";
}

else { echo "excellent" ;
}
echo "<br> good work";
?>
