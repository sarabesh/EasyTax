<!DOCTYPE html>
<html>
<head>
    
    <title>Income Tax Calculator</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</head>
<body><hr><br><br>
<div class="container">
<?php

$gen=$_POST['gender'];
$an=$_POST['annual'];
$ot=$_POST['other'];
$fd=$_POST['fd'];

$hi=$_POST['hi'];
$mt=$_POST['mt'];
$landt=$_POST['landt'];

$rent=$_POST['rent'];

if($gen=='male')
	$a=1;
elseif ($gen=='female') {
	$a=2;
}
elseif ($gen=='senior') {
	$a=3;
}

$b=$an;
$c=$ot;
$f=$fd;
$g=$hi;
$h=$mt;
$i=$landt;
$j=$rent;
$d=$b+$c;


 if ($a == 1) {

            if ($d <= 250000)

                $e = 0;
            else if ($d >= 250010 && $d <= 500000)
                $e = (float)($d * 0.1);
            else if ($d >= 500010 && $d <= 1000000)
                $e = (float) (25000 + (($d - 500000) * 0.2));
            else
                $e = (float) (125000 + (($d - 100000) * 0.3));
            echo "your tax without any deductions:".$e."<br>";
            {
                if (($g >= 0) && ($g <= 15000)) {
                    $e = $e - $g;
                } else {
                    $e = $e - 15000;
                }
            }
            echo "your tax after deductions from health insurance:".$e."<br>";
            {
                if (($h >= 0) && ($h <= 50000)) {
                    $e = $e - $g;
                } else {
                    $h = $h - 50000;
                }
            }
            echo "your tax after deductions from medical treatment:".$e."<br>";

        } else if ($a == 2) {
            if ($d <= 250000)

                $e = 0;
            else if ($d >= 250010 && $d <= 500000)
                $e = (float) ($d * 0.1);
            else if ($d >= 500010 && $d <= 1000000)
                $e = (float) (25000 + (($d - 500000) * 0.2));
            else
                $e = (float) (125000 + (($d - 100000) * 0.3));
            echo "your tax without any deductions:".$e."<br>";
            {
                if (($g >= 0) && ($g <= 15000)) {
                    $e = $e - $g;
                } else {
                    $e = $e - 15000;
                }
            }
            echo "your tax after deductions from health insurance:".$e."<br>";
            {
                if (($h >= 0) && ($h <= 50000)) {
                    $e = $e - $g;
                } else {
                    $h = $h - 50000;
                }
            }
            echo "your tax after deductions from medical treatment:".$e."<br>";
        } else {
            if ($d <= 300000)

                $e = 0;
            else if ($d >= 300010 && $d <= 500000)
                $e = (float) ($d * 0.1);
            else if ($d >= 500010 && $d <= 1000000)
                $e = (float) (20000 + (($d - 500000) * 0.2));
            else
                $e = (float) (120000 + (($d - 100000) * 0.3));
            echo "your tax without any deductions:".$e."<br>";
            {
                if (($g >= 0) && ($g <= 15000)) {
                    $e = $e - $g;
                } else {
                    $e = $e - 20000;
                }
            }
            echo "your tax after deductions from health insurance:".$e."<br>";
            {
                if (($h >= 0) && ($h <= 750000)) {
                    $e = $e - $g;
                } else {
                   $h = $h - 50000;
                }
            }
            echo "your tax after deductions from medical treatment:".$e."<br>";
        }
        $e = $e - $f;
        $e = $e - (1 / 3 * $j);
        $e = $e - $i;
       echo "after deductions from loans and rents:";
echo "<div>tax predicted=".$e."</div>";

?>
  </div>  
</body>
</html>

