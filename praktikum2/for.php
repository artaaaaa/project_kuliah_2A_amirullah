<!DOCTYPE html>
<html lang="en">
<head>
    <title>fadli_maulana</title>
</head>
<body>
<?php
echo "Mencari jumlah huruf vokal dalam suatu kata";
echo "<br>";
$jumlah = 0;
$kata="\"Belajar PHP\"";
$huruf="a";

for($i=0; $i<strlen($kata); $i++)
    {
        if(substr($kata, $i, 1) == $huruf)
        {
            $jumlah++;
        }
    }
    echo "Jumlah huruf " . $huruf . " dalam kata " . $kata . " : "; 
    echo "<br>";
    echo "ada $jumlah";
    ?>
</body>
</html>