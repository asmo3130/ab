<?php error_reporting( E_ERROR ); ?>
<?php
$reg = $_GET['reg'];
if (!isset($reg))
    {
        $reg = '0';
    }
if (isset($reg))
    {
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
						echo '"top": 10,';
						echo '"left": 10,';
						echo '"width": 80,';
						echo '"height": 40,';
						echo '"pixelMapperLogo": true,';
			echo '}';
			echo '],';
			echo '"areas": [';

// код карты            
          for ($p=0;$p<count($hot);$p++)
          {
              if ($p > "1") {echo ",";}
              $hat_ar = explode(";", $hot[$p]);
 //             echo "$hat_ar[0]<br>";
                    if ($p > "0"){
                    echo '{';
					echo '"id": "';
					echo "$hat_ar[0]";
					echo '",';
					echo '"title": "';
					echo "$hat_ar[1]";
					echo '",';
					echo '"color": "rgba(144,144,144,0.8)"';
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
						echo '"horizontalPadding": 0,';
						echo '"borderAlpha": 0,';
						echo '"borderThickness": 1,';
						echo '"verticalPadding": 0';
					echo '},';
					echo '"areasSettings": {';
						echo '"color": "rgba(94,94,94,1)",';
						echo '"outlineColor": "rgba(255,251,251,1)",';
						echo '"rollOverOutlineColor": "rgba(255,251,251,1)",';
						echo '"rollOverBrightness": 20,';
						echo '"selectedBrightness": 20,';
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
						echo '"zoomControlEnabled": true,';
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
		echo '<div id="map" style="width: 100%; height: 300px;"></div>';
	echo '</body>';
echo '</html>';


//код карты

       }
      if ($reg != "0")
      {
        // код графика
          include ("data/shablone.ini");
            $pfr = "data/$reg.ini";
            $hit = File($pfr);
            //echo "$pfr <br>";
echo ' <!DOCTYPE HTML>';
echo "\n";
echo '<html> <head> <meta charset="utf-8"> <title>IFRAME</title>';
echo "\n";
echo '<style> #chartdiv { width: 100%; height: 250px;} </style>';
echo "\n";
echo '<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>';
echo "\n";
echo '<script src="https://www.amcharts.com/lib/3/serial.js"></script>';
echo "\n";
echo '<script src="https://www.amcharts.com/lib/3/amstock.js"></script>';
echo "\n";
echo '<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>';
echo "\n";
echo '<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />';
echo "\n";
echo '<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>';
echo "\n";
echo '<script>';
        // код графика
        
            for($z=1;$z<$td1+1;$z++)
                {
                echo "\nvar chartData$z = [\n";
                
                    for($p=1;$p<count($hit);$p++)
                    {
                        if ($p > "1") {echo ",\n";}
                        $het_ar = explode(";", $hit[$p]);
                           echo "{";
                        	echo '"';
                        	echo "date";
                        	echo '": "';
                        	echo "$het_ar[0]";
                        	echo '",';
                        	echo '"';
                        	echo "$titleX";
                        	echo '" : "';
                        	echo "$het_ar[$z]";
                        	echo '",';
                        	echo '"';
                        	echo "$titleY";
                        	echo '": "';
                        	echo "$het_ar[$z]";
                            echo '"';
                    	    echo "}";
                        
                    }
                    echo "];\n";
                }
                echo 'var chart = AmCharts.makeChart( "chartdiv", {';
                  echo "\n";
                  echo '"type": "stock",';
                  echo "\n";
                  echo '"theme": "light",';
                  echo "\n";
                  echo '"dataDateFormat": "MM-DD-YYYY",';
                  echo "\n";
                  echo '"dataSets": [ ';
                for($z=1;$z<$td1+1;$z++)
                {
                    if ($z > "1") {echo ",\n";}
                    {echo "\n";
                     echo '{"title": "';
                      if($z == "1"){echo "$d1";}if($z == "2"){echo "$d2";}if($z == "3"){echo "$d3";}if($z == "4"){echo "$d4";}if($z == "5"){echo "$d5";}if($z == "6"){echo "$d6";}
                      echo '", "fieldMappings": [ {';
                        echo '"fromField": "';
                        echo "$titleX";
                        echo '", "toField": "';
                        echo "$titleX";
                        echo '"  }, {';
                    echo '"fromField": "';
                    echo "$titleY";
                    echo '", "toField": "';
                    echo "$titleY";
                    echo '"} ], "dataProvider":'; 
                           echo "chartData$z";
                        echo ', "categoryField": "date"}';
                        //echo "\n";
                     }
                     
                }
          // код графика
          echo "],\n";
            echo ' "panels": [ {';
    echo '"showCategoryAxis": false,';
    echo '"title": "';
    echo "$titleY";
    echo '", "percentHeight": 70,';
    echo '"stockGraphs": [ {';
      echo '"id": "g1", "valueField": "';
      echo "$titleY";
      echo '", "comparable": true,';
      echo '"compareField": "';
      echo "$titleY";
      echo '", "balloonText": "[[title]]:<b>[[';
            echo "$titleY";
          echo ']]</b>", "compareGraphBalloonText": "[[title]]:<b>[[';
            echo "$titleY";
            echo ']]</b>"';
    echo '} ],';
    echo '"stockLegend": {';
      echo '"periodValueTextComparing": "[[percents.value.close]]%",';
      echo '"periodValueTextRegular": "[[value.close]]"';
    echo "} }, {\n";
    echo '"title": "';
    echo "$titleY";
    echo '", "percentHeight": 30,';
    echo '"stockGraphs": [ {';
    echo '  "valueField": "';
      echo "$titleY";
      echo '", "type": "column",';
      echo '"showBalloon": false,';
      echo '"fillAlphas": 1';
    echo '} ],';
    echo '"stockLegend": {';
      echo '"periodValueTextRegular": "[[value.close]]"';
    echo '} } ],';
  echo '"chartScrollbarSettings": {';
    echo '"graph": "g1"';
  echo '},"chartCursorSettings": {';
    echo '"valueBalloonsEnabled": true,';
    echo '"fullWidth": true,';
    echo '"cursorAlpha": 0.1,';
    echo '"valueLineBalloonEnabled": true,';
    echo '"valueLineEnabled": true,';
    echo '"valueLineAlpha": 0.5';
  echo '}, "periodSelector": {';
    echo '"position": "bottom",';
    echo '"periods": [ {';
      echo '"period": "MM",';
      echo '"selected": true,';
      echo '"count": 1,';
      echo '"label": "1 місяць"';
    echo '}, {';
      echo '"period": "YYYY",';
      echo '"count": 1,';
      echo '"label": "1 рік"';
    echo '}, {';
      echo '"period": "YTD",';
      echo '"label": "YTD"';
    echo '}, {';
      echo '"period": "MAX",';
      echo '"label": "MAX"';
    echo '} ]  },';
  echo '"dataSetSelector": {';
    echo '"position": "bottom"';
  echo '},';
  echo '"export": {';
    echo '"enabled": false';
  echo '} } );';
echo '</script></head><body>  ';
//echo '<p style="text-align: center;"><strong>';
//    $pfd = "data/data.ini";
//    $hat = File($pfd);
//    for ($fd=0;$fd<count($hat);$fd++)
//        {
//          $hqt_ar = explode(";", $hat[$fd]);
//          if ($hqt_ar[0] == "$reg") {echo "$hqt_ar[1]";}
//        }
//echo '</strong></p>';
echo '<div id="chartdiv"></div>';
echo '</body></html>';
      
          // код графика
          
        //echo "$reg";
      }
    }

?>
