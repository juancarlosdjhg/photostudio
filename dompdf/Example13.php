<?php
 /*
     Example13: A 2D exploded pie graph
 */
	
 // Standard inclusions   
 include("../pChart/pchart/pData.class");
 include("../pchart/pChart/pChart.class");

 // Dataset definition 
 $DataSet = new pData;
 $DataSet->AddPoint(array(10,2,3,5,3,4,12),"Serie1");
 $DataSet->AddPoint(array("Jan","Feb","Mar","Apr","May","dec","nov"),"Serie2");
 $DataSet->AddAllSeries();
 $DataSet->SetAbsciseLabelSerie("Serie2");

 // Initialise the graph
 $Test = new pChart(300,200);
 $Test->setFontProperties("../pchart/Fonts/tahoma.ttf",8);


 // Draw the pie chart
 $Test->AntialiasQuality = 0;
 $Test->setShadowProperties(2,2,200,200,200);
 $Test->drawFlatPieGraphWithShadow($DataSet->GetData(),$DataSet->GetDataDescription(),120,100,60,PIE_PERCENTAGE,8);
 $Test->clearShadow();

 $Test->drawPieLegend(230,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);

 $Test->Render("example13.png");
?>