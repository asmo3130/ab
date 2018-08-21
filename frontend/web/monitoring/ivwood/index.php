<?php
$reg = $_GET['reg'];
if (!isset($reg)) {$reg = '0';}
$lg = $_GET['lg'];
if (!isset($lg) or $lg == NULL) {$lg = '0';}
$pd = $_GET['pd'];
if (!isset($pd) or $pd == NULL) {$pd = '0';}

if (isset($reg))
    {
      if ($reg == NULL) {$reg="0";}
      if ($reg == "0")
      {
          $pfm = "data/data.ini";
          $hot = File($pfm);
          
        // код карты
            echo '<!DOCTYPE html>';
            echo '<html>';
	        echo '<head>';
	    	echo '<title>map created with amCharts | amCharts</title>';
	    	echo '<meta name="description" content="map created using amCharts pixel map generator" />';
	    	echo '<script type="text/javascript" src="https://www.amcharts.com/lib/3/ammap.js"></script>';
	    	echo '<script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/ukraineLow.js"></script>';
	    	echo '<script type="text/javascript">';
	    		echo 'AmCharts.makeChart("map",{';
					echo '"type": "map",';
					echo '"pathToImages": "http://www.amcharts.com/lib/3/images/",';
					echo '"addClassNames": true,';
					echo '"fontSize": 15,';
					echo '"color": "#000000",';
					echo '"projection": "mercator",';
					echo '"backgroundAlpha": 1,';
					echo '"backgroundColor": "rgba(255,255,255,1)",';
					echo '"dataProvider": {';
					echo '"map": "ukraineLow",';
					echo '"getAreasFromMap": true,';
					echo '"images": [';
						echo '{';
						echo '"top": 40,';
						echo '"left": 60,';
						echo '"width": 80,';
						echo '"height": 40,';
						echo '"pixelMapperLogo": false,';
						echo '"imageURL": "http://pixelmap.amcharts.com/static/img/logo-black.svg"';
			echo '}';
			echo '],';
			echo '"areas": [';
        
        // код карты            
          for ($p=0;$p<count($hot);$p++)
          {
              if ($p > "1") {echo ",";}
              $hat_ar = explode(";", $hot[$p]);
         //     echo "$hat_ar[0]<br>";
                    if ($p > "0"){
                    echo '{';
					echo '"id": "';
					echo "$hat_ar[0]";
					echo '",';
					echo '"title": "';
					echo "$hat_ar[1]";
					echo '",';
					if ($hat_ar[2] == "0"){echo '"color": "rgba(164,164,164,1)"';}
					if ($hat_ar[2] == "1"){echo '"color": "rgba(124,124,124,1)"';}
					if ($hat_ar[2] == "1"){				
					echo ' , "url": ';
					echo "$hat_ar[3]";
					}
					echo '}';
					}
         }
        //код карты
                echo ']';
				    echo '},';
					echo '"balloon": {';
						echo '"horizontalPadding": 15,';
						echo '"borderAlpha": 0,';
						echo '"borderThickness": 1,';
						echo '"verticalPadding": 15';
					echo '},';
					echo '"areasSettings": {';
						echo '"color": "rgba(94,94,94,1)",';
						echo '"outlineColor": "rgba(255,251,251,1)",';
						echo '"rollOverOutlineColor": "rgba(255,251,251,1)",';
						echo '"rollOverBrightness": 40,';
						echo '"selectedBrightness": 40,';
					    echo '"selectable": true,';
						echo '"unlistedAreasAlpha": 0,';
						echo '"unlistedAreasOutlineAlpha": 0';
					echo '},';
					echo '"imagesSettings": {';
						echo '"alpha": 1,';
						echo '"color": "rgba(94,94,94,1)",';
					    echo '"outlineAlpha": 0,';
						echo '"rollOverOutlineAlpha": 0,';
						echo '"outlineColor": "rgba(255,251,251,1)",';
						echo '"rollOverBrightness": 20,';
						echo '"selectedBrightness": 20,';
						echo '"selectable": true';
					echo '},';
					echo '"linesSettings": {';
						echo '"color": "rgba(94,94,94,1)",';
						echo '"selectable": true,';
						echo '"rollOverBrightness": 20,';
						echo '"selectedBrightness": 20';
					echo '},';
					echo '"zoomControl": {';
						echo '"zoomControlEnabled": false,';
						echo '"homeButtonEnabled": false,';
						echo '"panControlEnabled": false,';
						echo '"right": 38,';
						echo '"bottom": 30,';
						echo '"minZoomLevel": 0.25,';
						echo '"gridHeight": 100,';
					    echo '"gridAlpha": 0.1,';
						echo '"gridBackgroundAlpha": 0,';
						echo '"gridColor": "#FFFFFF",';
						echo '"draggerAlpha": 1,';
						echo '"buttonCornerRadius": 2';
					echo '}';
				echo '});';
		echo '</script>';
	    echo '</head>';
	    echo '<body style="margin: 0;background-color: rgba(255,251,251,1);">';
		echo '<div id="map" style="width: 100%; height: 648px;"></div>';
	    echo '</body>';
        echo '</html>';


//код карты

       }
      if ($reg != "0" and $lg == "0")
      {
        // код графика
          //include ("data/shablone.ini");
            $pfy = "data/shablone.ini";
            $pfr = "data/$reg.ini";
            $hyt = File($pfy);
            $hit = File($pfr);
            //echo "$pfr <br>";
        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<head>';
    	echo '<title>map created with amCharts | amCharts</title>';
	    echo '</head>';
	    echo '<body>';
	    echo '<p style="text-align: center; font-family: sans-serif; font-size: 16pt;"><strong>';
            $pfd = "data/data.ini";
            $hat = File($pfd);
            for ($fd=0;$fd<count($hat);$fd++)
                {
                    $hqt_ar = explode(";", $hat[$fd]);
                    if ($hqt_ar[0] == "$reg") {echo "$hqt_ar[1]";}
                }
echo '</strong></p>';
echo '<table style="border-color: #808080; border-width: 1px; width: 70%; border-style: solid; font-family: sans-serif; font-size: 10pt;" align="center"><tbody>';
echo '<tr height=30px; bgcolor=grey>';
echo '<td style="border-color: #808080; border-style: solid; border-width: 1px;" align="center" valign="middle"><strong>Назва підприємства</strong></td>';
echo '<td style="border-color: #808080; border-style: solid; border-width: 1px;" align="center" valign="middle"><strong>Хвойні породи</strong></td>';
echo '<td style="border-color: #808080; border-style: solid; border-width: 1px;" align="center" valign="middle"><strong>Листяні породи</strong></td>';
echo '</tr>';
            for ($les=0;$les<count($hyt);$les++)
                {   $hyt_ar = explode(";", $hyt[$les]);
                    if ($hyt_ar[0] == "$reg" and $hyt_ar[2] == "1")
                    {
                        echo"<tr height=30px;>";
                        echo '<td style="border-color: #808080; border-style: solid; border-width: 1px;" valign="middle">&nbsp';
                        echo "$hyt_ar[1]";
                        echo"</td>\n";
                        echo '<td style="border-color: #808080; border-style: solid; border-width: 1px;" align="center" valign="middle">';
                        if ($hyt_ar[4] == "1")
                        {
                        echo '<a href=';
                        echo "index.php?reg=$reg&lg=$hyt_ar[3]&pd=1";
                        echo " ";
                        echo 'style="text-decoration: none;">Переглянути</a>';
                        }
                        echo '</td>';
                        echo '<td style="border-color: #808080; border-style: solid; border-width: 1px;" align="center" valign="middle">';
                        if ($hyt_ar[5] == "1")
                        {
                        echo '<a href=';
                        echo "index.php?reg=$reg&lg=$hyt_ar[3]&pd=2";
                        echo " ";
                        echo 'style="text-decoration: none;">Переглянути</a>';
                        }
                        echo '</td>';
                        echo "</tr>";

                        }
                    
                    }
echo "</tbody></table>";
echo '<p style="text-align: center;"><a href=index.php style="text-decoration: none;">повернутися до мапи</a><strong>';
	    echo '</body>';
        echo '</html>';
          
      }
      if ($reg != "0" and $lg != "0")
      {
            $pfy = "data/shablone.ini";
            $pfr = "data/$reg.ini";
            $hyt = File($pfy);
            $hit = File($pfr);

        if ($pd == 1)
            {
                echo '<html><head><title>chart created with amCharts | amCharts</title>';
		        echo '<meta name="description" content="chart created using amCharts live editor">';
		        echo '<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>';
		        echo '<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>';
//график
		echo '<script type="text/javascript">';
			echo 'AmCharts.makeChart("chartdiv",';
				echo '{';
					echo '"type": "serial",';
					echo '"categoryField": "category",';
					echo '"rotate": true,';
					echo '"angle": 30,';
					echo '"depth3D": 30,';
					echo '"startDuration": 1,';
					echo '"handDrawThickness": 3,';
					echo '"tapToActivate": false,';
					echo '"categoryAxis": {';
						echo '"gridPosition": "start",';
						echo '"position": "right",';
						echo '"axisAlpha": 0,';
						echo '"axisThickness": 0,';
						echo '"fillColor": "#8080FF",';
						echo '"fontSize": 15,';
						echo '"inside": true,';
						echo '"minHorizontalGap": 63,';
						echo '"minVerticalGap": 32';
					echo '},';
					echo '"trendLines": [],';
					echo '"graphs": [';
						echo '{';
							echo '"balloonText": "[[title]]  [[category]] - [[value]]",';
							echo '"fillAlphas": 1,';
							echo '"id": "AmGraph-1",';
							echo '"title": "Стартова ціна",';
							echo '"type": "column",';
							echo '"valueField": "column-1"';
						echo '},';
						echo '{';
							echo '"balloonText": "[[title]]  [[category]] - [[value]]",';
							echo '"fillAlphas": 1,';
							echo '"id": "AmGraph-2",';
							echo '"title": "Ціна продажу",';
							echo '"type": "column",';
							echo '"valueField": "column-2",';
							echo '"visibleInLegend": false';
						echo '},';
						echo '{';
							echo '"balloonText": "[[title]]  [[category]] - [[value]]",';
							echo '"fillAlphas": 1,';
							echo '"id": "AmGraph-3",';
							echo '"title": "Средня ціна продажу",';
							echo '"type": "column",';
							echo '"valueField": "column-3",';
							echo '"visibleInLegend": false';
						echo '}';
					echo '],';
					echo '"guides": [],';
					echo '"valueAxes": [';
						echo '{';
							echo '"axisFrequency": 0,';
							echo '"axisTitleOffset": 11,';
							echo '"id": "ValueAxis-1",';
							echo '"zeroGridAlpha": 0,';
							echo '"color": "#000000",';
							echo '"fillColor": "#FF0000",';
							echo '"gridCount": 6,';
							echo '"title": "",';
							echo '"titleColor": "#000000"';
						echo '}';
					echo '],';
					echo '"allLabels": [],';
					echo '"balloon": {},';
					echo '"titles": [';
						echo '{';
							echo '"id": "Title-1",';
							echo '"size": 15,';
							echo '"text": "';
				for ($les=0;$les<count($hyt);$les++)
					{
					    $hyt_ar = explode(";", $hyt[$les]);
                            if ($hyt_ar[0] == "$reg" and $hyt_ar[3] == "$lg")
                                {
					                echo "$hyt_ar[1]";
                                }		
					            }
							echo '"';
						echo '}';
					echo '],';
					echo '"dataProvider": [';
					$ppp = "0";	
					for ($l=0;$l<count($hit);$l++)
					    {
					        $hit_ar = explode(";", $hit[$l]);
					        if ($hit_ar[0] == "$lg" and $hit_ar[1] == "$pd")
					        {
					            if ($ppp > "0") {$ppp++; echo ",";}
					            if ($ppp == "0") {$ppp++;}
					            echo '{"category": "';
					            echo "$hit_ar[2]";
					            echo '", "column-1": "';
					            echo "$hit_ar[3]";
					            echo '", "column-2": "';
					            echo "$hit_ar[4]";
					            echo '", "column-3": "';
					            echo "$hit_ar[5]";
					            echo '" }'; 
					        }
					    } 
					echo ']';
				echo '}';
			echo ');';
echo "</script></head><body>";
	    echo '<p style="text-align: center; font-family: sans-serif; font-size: 16pt;"><strong>';
            $pfd = "data/data.ini";
            $hat = File($pfd);
            for ($fd=0;$fd<count($hat);$fd++)
                {
                    $hqt_ar = explode(";", $hat[$fd]);
                    if ($hqt_ar[0] == "$reg") {echo "$hqt_ar[1]";}
                }
$ppp = $ppp*70+100;                
echo '</strong></p>';
echo '<div id="chartdiv" style="width: 100%; height: ';
echo "$ppp";
echo 'px; background-color: #FFFFFF;" ></div>';
echo '<p style="text-align: center;"><a href=index.php?reg=';
echo "$reg>повернутися до списку.</a><strong>";
echo '<p style="text-align: center;"><a href=index.php>повернутися до мапи</a><strong>';
echo "</body></html>";
            }
        if ($pd == 2)
            {
                echo '<html><head><title>chart created with amCharts | amCharts</title>';
		        echo '<meta name="description" content="chart created using amCharts live editor">';
		        echo '<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>';
		        echo '<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>';
//график
		echo '<script type="text/javascript">';
			echo 'AmCharts.makeChart("chartdiv",';
				echo '{';
					echo '"type": "serial",';
					echo '"categoryField": "category",';
					echo '"rotate": true,';
					echo '"angle": 30,';
					echo '"depth3D": 30,';
					echo '"startDuration": 1,';
					echo '"handDrawThickness": 3,';
					echo '"tapToActivate": false,';
					echo '"categoryAxis": {';
						echo '"gridPosition": "start",';
						echo '"position": "right",';
						echo '"axisAlpha": 0,';
						echo '"axisThickness": 0,';
						echo '"fillColor": "#8080FF",';
						echo '"fontSize": 15,';
						echo '"inside": true,';
						echo '"minHorizontalGap": 63,';
						echo '"minVerticalGap": 32';
					echo '},';
					echo '"trendLines": [],';
					echo '"graphs": [';
						echo '{';
							echo '"balloonText": "[[title]]  [[category]] - [[value]]",';
							echo '"fillAlphas": 1,';
							echo '"id": "AmGraph-1",';
							echo '"fillColors": "#8080FF",';
							echo '"lineColor": "#8080FF",';
							echo '"title": "Стартова ціна",';
							echo '"type": "column",';
							echo '"valueField": "column-1"';
						echo '},';
						echo '{';
							echo '"balloonText": "[[title]]  [[category]] - [[value]]",';
							echo '"fillAlphas": 1,';
							echo '"id": "AmGraph-2",';
							echo '"title": "Ціна продажу",';
							echo '"type": "column",';
							echo '"valueField": "column-2",';
							echo '"visibleInLegend": false';
						echo '},';
						echo '{';
							echo '"balloonText": "[[title]]  [[category]] - [[value]]",';
							echo '"fillAlphas": 1,';
							echo '"id": "AmGraph-3",';
							echo '"fillColors": "#92EB0E",';
							echo '"lineColor": "#92EB0E",';
							echo '"title": "Средня ціна продажу",';
							echo '"type": "column",';
							echo '"valueField": "column-3",';
							echo '"visibleInLegend": false';
						echo '}';
					echo '],';
					echo '"guides": [],';
					echo '"valueAxes": [';
						echo '{';
							echo '"axisFrequency": 0,';
							echo '"axisTitleOffset": 11,';
							echo '"id": "ValueAxis-1",';
							echo '"zeroGridAlpha": 0,';
							echo '"color": "#000000",';
							echo '"fillColor": "#FF0000",';
							echo '"gridCount": 6,';
							echo '"title": "",';
							echo '"titleColor": "#000000"';
						echo '}';
					echo '],';
					echo '"allLabels": [],';
					echo '"balloon": {},';
					echo '"titles": [';
						echo '{';
							echo '"id": "Title-1",';
							echo '"size": 15,';
							echo '"text": "';
				for ($les=0;$les<count($hyt);$les++)
					{
					    $hyt_ar = explode(";", $hyt[$les]);
                            if ($hyt_ar[0] == "$reg" and $hyt_ar[3] == "$lg")
                                {
					                echo "$hyt_ar[1]";
                                }		
					            }
							echo '"';
						echo '}';
					echo '],';
					echo '"dataProvider": [';
					$ppp = "0";	
					for ($l=0;$l<count($hit);$l++)
					    {
					        $hit_ar = explode(";", $hit[$l]);
					        if ($hit_ar[0] == "$lg" and $hit_ar[1] == "$pd")
					        {
					            if ($ppp > "0") {$ppp++; echo ",";}
					            if ($ppp == "0") {$ppp++;}
					            echo '{"category": "';
					            echo "$hit_ar[2]";
					            echo '", "column-1": "';
					            echo "$hit_ar[3]";
					            echo '", "column-2": "';
					            echo "$hit_ar[4]";
					            echo '", "column-3": "';
					            echo "$hit_ar[5]";
					            echo '" }'; 
					        }
					    } 
					echo ']';
				echo '}';
			echo ');';
echo "</script></head><body>";
	    echo '<p style="text-align: center; font-family: sans-serif; font-size: 16pt;"><strong>';
            $pfd = "data/data.ini";
            $hat = File($pfd);
            for ($fd=0;$fd<count($hat);$fd++)
                {
                    $hqt_ar = explode(";", $hat[$fd]);
                    if ($hqt_ar[0] == "$reg") {echo "$hqt_ar[1]";}
                }
$ppp = $ppp*70+100;                
echo '</strong></p>';
echo '<div id="chartdiv" style="width: 100%; height: ';
echo "$ppp";
echo 'px; background-color: #FFFFFF;" ></div>';
echo '<p style="text-align: center;"><a href=index.php?reg=';
echo "$reg>повернутися до списку.</a><strong>";
echo '<p style="text-align: center;"><a href=index.php>повернутися до мапи</a><strong>';
echo "</body></html>";
            }
      }    
    }

?>











