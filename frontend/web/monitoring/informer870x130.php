<?php
//grain data begin
$datagrain="grain/data/";
$namegrain="Зернові культури";
$titlegrain="грн/т";
//$td_grain=4;
$d1_grain="Пшениця-2кл";
$d2_grain="Пшениця-3кл";
$d3_grain="Пшениця-6кл";
$d4_grain="Кукурудза-3кл";
//grain data end

//flour data begin
$dataflour="flour/data/";
$namefluor="Борошно";
$titleflour="Ціна, грн/т";
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
echo '<LINK href=style_info.css rel=stylesheet />';
echo '<a class=normal>';

// find date for grain
$pfr = "$datagrain$reg.ini";
$hit = File($pfr);
//echo "$pfr <br>";
$kolvo = "0";
    for($p=1;$p<count($hit);$p++)
        {
            $kolvo++;
                }
$hit_ar = explode(";", $hit[$kolvo]);

//echo "$hit_ar[0] <br>";
//echo "$d1_grain : $hit_ar[1] <br>";
//echo "$d2_grain : $hit_ar[2] <br>";
//echo "$d3_grain : $hit_ar[3] <br>";
//echo "$d4_grain : $hit_ar[4] <br>";
$date_ar = explode(".", $hit_ar[0]);
$date = "$date_ar[1].$date_ar[0].$date_ar[2]";
//echo "$date";
// find date for grain


echo '</a>';
echo '</head><body>';
echo '<table align=center width=865px height=125px border=0px style="background:linear-gradient(to right, #F3F9FF 15%, #D3E8FF)">';
echo "<tbody>";
echo "<tr>";
echo "<td width=240px;>";
echo '<img src="http://agrex.gov.ua/wp-content/uploads/2017/03/logo_ab_mini.png" alt="Logo AB">';
echo "</td>";
echo "<td>";
echo "<table width=100% border=0px height=120px>";
echo "<tbody>";
echo "<tr>";
echo "<td height=25px align=center bgcolor=#6897e5 colspan=3>";
echo "<a class=normal2>";
    $pfd = "grain/data/data.ini";
    $hat = File($pfd);
    for ($fd=0;$fd<count($hat);$fd++)
        {
          $hqt_ar = explode(";", $hat[$fd]);
          if ($hqt_ar[0] == "$reg") {echo "$hqt_ar[1] "; echo " &nbsp;&nbsp;ціни на $date";}
        }
echo "</a></td><tr>";
echo "<td>";
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

//echo "$hit_ar[0] <br>";
//echo "$d1_grain : $hit_ar[1] <br>";
//echo "$d2_grain : $hit_ar[2] <br>";
//echo "$d3_grain : $hit_ar[3] <br>";
//echo "$d4_grain : $hit_ar[4] <br>";

echo "<table width=203px border=0px height=85px>";
echo "<tbody>";
echo "<tr class=table_title>";
echo "<td align=center>";
echo "$namegrain&nbsp;&nbsp; $titlegrain";
echo "</td>";
echo "</tr>";
echo "<tr class=table>";
echo "<td align=center>$d1_grain &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $hit_ar[1]";
echo "</td>";
echo "</tr>";
echo "<tr class=table>";
echo "<td align=center>$d2_grain &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $hit_ar[2]";
echo "</td>";
echo "</tr>";
echo "</tbody></table>";
echo "</td>";

echo "<td>";
echo "<table width=203px border=0px height=85px>";
echo "<tbody>";
echo "<tr class=table_title>";
echo "<td align=center>";
echo "$namegrain&nbsp;&nbsp; $titlegrain";
echo "</td>";
echo "</tr>";
echo "<tr class=table>";
echo "<td align=center>$d3_grain &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $hit_ar[3]";
echo "</td>";
echo "</tr>";
echo "<tr class=table>";
echo "<td align=center>$d4_grain &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $hit_ar[4]";
echo "</td>";
echo "</tr>";
echo "</tbody></table>";
// grain

echo "</td>";
echo "<td>";

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

//echo "$hit_ar[0] <br>";
//echo "$d1_flour : $hit_ar[1] <br>";
//echo "$d2_flour : $hit_ar[2] <br>";
//echo "$hit_ar[3] <br>";
//echo "$hit_ar[4] <br>";
echo "<table width=203px border=0px height=85px>";
echo "<tbody>";
echo "<tr class=table_title>";
echo "<td align=center>";
echo "$namefluor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $titlegrain</a>";
echo "</td>";
echo "</tr>";
echo "<tr class=table>";
if ($hit_ar[1] == 0 or $hit_ar[1] == NULL)
{
echo "<td align=center>$d1_flour &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0";
}
else
{
echo "<td align=center>$d1_flour &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $hit_ar[1]";
}
echo "</td>";
echo "</tr>";
echo "<tr class=table>";
if ($hit_ar[2] == 0 or $hit_ar[2] == NULL)
{
echo "<td align=center>$d2_flour &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0";
}
else
{
echo "<td align=center>$d2_flour &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $hit_ar[2]";

}
echo "</td>";
echo "</tr>";
echo "</tbody></table>";
// flour

echo "</td>";

echo "</tr>";
echo "</tbody></table>";
echo "</td>";
echo "</tr>";
echo "</tbody></table>";
echo '</body></html>';
         
        //echo "$reg";
      }
    }

?>
