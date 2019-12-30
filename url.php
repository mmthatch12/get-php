<!DOCTYPE>
<html>
    <head>
        <title>Url</title>
    </head>
    <body>
<?php 
$web="Google Pakistan";
$search="Jazeb Akram Onlice Courses & Website";
// rawurlencode is best for first part of search, urlencode is best for second part
$Result="http://".rawurlencode($web)."?search=".urlencode($search);
echo $Result
?>
    </body>
</html>