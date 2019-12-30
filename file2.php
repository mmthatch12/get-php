<!DOCTYPE>
<html>
    <head>
        <title>File 2</title>
    </head>
    <body>
<pre>
<?php 
print_r($_GET);
?>
</pre>
<br>
<?php
$Name=$_GET['Name'];
$Position=$_GET['Position'];
echo $Name."<br>";
echo $Position."<br>";
?>
    </body>
</html>