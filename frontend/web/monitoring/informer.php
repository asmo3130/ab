<?php
//grain data begin
$datagrain="grain/data/";
//$namegrain="Зернові культури";
//$titlegrain="Ціна, грн/т";
//$td_grain=4;
$d1_grain="Пшениця-2кл";
$d2_grain="Пшениця-3кл";
$d3_grain="Пшениця-6кл";
$d4_grain="Кукурудза-3кл";
//grain data end

//flour data begin
$dataflour="flour/data/";
//$namefluor="Борошно";
//$titleflour="Ціна, грн/т";
//$td_flour1=2;
$d1_flour="Борошно В/Г";
$d2_flour="Борошно 1/Г";
//flour data end

$reg = $_GET['reg'];
if (!isset($reg))
    {
        $reg = 'UA-32';
    }
if (isset($reg))
    {
      if ($reg != "0")
      {
echo ' <!DOCTYPE HTML>';
echo "\n";
echo '<html> <head> <meta charset="utf-8"> <title>Informer</title>';
echo '<p style="text-align: center;"><strong>';
    $pfd = "grain/data/data.ini";
    $hat = File($pfd);
    for ($fd=0;$fd<count($hat);$fd++)
        {
          $hqt_ar = explode(";", $hat[$fd]);
          if ($hqt_ar[0] == "$reg") {echo "$hqt_ar[1]";}
        }
echo "<br><br>";        
// grain
$pfr = "$datagrain$reg.ini";
$hit = File($pfr);
//echo "$pfr <br>";
$kolvo = "0";
    for($p=1;$p<count($hit);$p++)
        {
            $kolvo++;
                }
$hit_ar = explode(";", $hit[$kolvo]);

echo "$hit_ar[0] <br>";
echo "$d1_grain : $hit_ar[1] <br>";
echo "$d2_grain : $hit_ar[2] <br>";
echo "$d3_grain : $hit_ar[3] <br>";
echo "$d4_grain : $hit_ar[4] <br>";
echo "<br>";
// grain

// flour
$pfr = "$dataflour$reg.ini";
$hit = File($pfr);
//echo "$pfr <br>";
$kolvo = "0";
    for($p=1;$p<count($hit);$p++)
        {
            $kolvo++;
                }
$hit_ar = explode(";", $hit[$kolvo]);

echo "$hit_ar[0] <br>";
echo "$d1_flour : $hit_ar[1] <br>";
echo "$d2_flour : $hit_ar[2] <br>";
echo "$hit_ar[3] <br>";
echo "$hit_ar[4] <br>";
// flour

echo '</strong></p>';
echo '</head><body>  ';
echo '</body></html>';
         
        //echo "$reg";
      }
    }

?>
