<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>

<?php
$x = $_GET['x'];
$y = $_GET['y'];
$z = $_GET['z'];

$escaped_x = escapeshellarg($x);
$escaped_y = escapeshellarg($y);
$escaped_z = escapeshellarg($z);

$command = "python3 /var/www/html/process_input.py $escaped_x $escaped_y $escaped_z";

$output = shell_exec($command);
    
echo "<h2>Python Results</h2>";
echo "<pre>$output</pre>";

echo "<h2>Original Values</h2>";
echo "<p>x = " . htmlspecialchars($x) . "</p>";
echo "<p>y = " . htmlspecialchars($y) . "</p>";
echo "<p>z = " . htmlspecialchars($z) . "</p>";
?>
</body>
</html>

