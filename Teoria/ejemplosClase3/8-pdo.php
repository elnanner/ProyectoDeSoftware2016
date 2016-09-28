<?php
foreach(PDO::getAvailableDrivers() as $driver) { echo "<br>".$driver; }
?>
