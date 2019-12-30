<!DOCTYPE>
<html>
    <head>
        <title>File 1</title>
    </head>
    <body>
<?php 
$Name="Alex";
$Position="Support Coordinator and Manager";
?>
<a href="file2.php?Name=<?php echo $Name; ?>">Click</a><br>
<a href="file2.php?Name=<?php echo $Name; ?>&<?php echo $Position;?>">Click2</a><br>
<a href="file2.php?Name=<?php echo $Name; ?>&Position=<?php echo urlencode($Position);?>">Click3</a>
    </body>
</html>