<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tool Name - Tool Name Extended</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

      <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="main-green.css">
		<link href="scrollUpButton.css" rel="stylesheet">

        <script src="modernizr-2.6.2-respond-1.1.0.min.js"></script>
<style>
.scrollUpButton {
 	display: none;
 	opacity: 0.6;
 	position: fixed;
 	bottom: 10px;
 	right: 10px;
 	display: none;
 	background: #000;
 	color: #fff;
 	font-size: 1.5em;
 	text-decoration: none;
 	padding: 5px 10px 5px 10px;
}
.scrollUpButton:hover {
 	text-decoration: none;
 	color: #fff;
 	opacity: 1;
}
</style>
	
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <div class="mainmenu-wrapper">
	        <div class="container">
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="toolTest.php">Tool</a>
						</li>
						<li>
							<a href="contacts.html">Contacts</a>
						</li>
					</ul>
			</nav>
		</div>
	</div>

	<div class="section">
		<div class="container">
    
<form method="post" action="">
 <label class="control-label">Select the Alignment:</label>
	<select name="align">
		<option value = "1 7">BDO_NCIT</option>
		<option value = "2 7">CCONT_NCIT</option>
		<option value = "3 7">EFO_NCIT</option>
		<option value = "4 5">EP_FMA</option>
		<option value = "4 7">EP_NCIT</option>
		<option value = "6 5">MA_FMA</option>
		<option value = "8 7">OMIM_NCIT</option>
		<option value = "9 4">SDO_EP</option>
		<option value = "10 5">UBERON_FMA</option>
		<option value = "11 3">ZFA_EFO</option>
	</select>
 <p><input type="submit" name="submit" value="Submit"/></p>
</form>

<?php
ini_set('display_errors','On');
ini_set('html_errors',0);
error_reporting(-1);
	include('openDB.php');
	if (isset($_POST['submit'])) {
		$selected_val = $_POST['align'];
		list($one, $two) = explode(" ", $selected_val, 2);


		echo "<table class=\"table table-bordered\">";
		echo "<thead>";
		echo "<tr bgcolor=\"#16A085\">";
		echo "<th class=\"text-center\" style =\"vertical-align:middle\"><font color=\"#fff\">Conflict Set</font></th>";
		echo "<th class=\"text-center\" style =\"vertical-align:middle\"><font color=\"#fff\">Source Class Name</font></th>";
		echo "<th class=\"text-center\" style =\"vertical-align:middle\"><font color=\"#fff\">Target Class Name</font></th>";
		echo "<th></th>";

		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";

		//VARIABLES
		$now = "";
		$first = true;
		$count = 1;
		$number = 0;
		$size = 0;

		$remove= array('7','43','50','55','63','68','92','94','146','171','188','206','240','260','271','279','298','338','400','505','513','519');
		
		$listMappings = array();
		
		$query = 'SELECT DISTINCT a.primary_Label as a, a.classID as a1, b.primary_Label as b, b.classID as b1, d.conflictID FROM classInfo a, classInfo b, mappingInfo c, conflictSet d WHERE a.classID=c.classID1 and b.classID=c.classID2 and a.ontologyID=' . $one . ' and b.ontologyID=' . $two . ' and c.mappingID = d.mappingID ORDER BY conflictID';
		$result = mysql_query($query);
		
		//CREATE A LIST OF MAPPINGS WITHOUTH THE ONES TO REMOVE
	   	while($row = mysql_fetch_array($result)){
	   		if (in_array($row['conflictID'], $remove)){
	   			continue;
	   		}
			else{
				$listMappings[] = $row;
			}
		}
		
		$size = count($listMappings);
		
		//ITERATE THE LIST TO CREATE A TABLE
		foreach ($listMappings as $mapp){	
			if ($now != $mapp['conflictID']){
				$count=1;
				$number += 1;
			}

			if($count <=10){
				echo "<tr>";
			}	
			else{
				echo  '<tr class="collapse out '.$mapp['conflictID'].'collapsed">';
				echo '<td></td>';
			}
			
			$query2 = 'SELECT COUNT(*) as c FROM conflictSet WHERE conflictID='.$mapp['conflictID'];
			$result2 = mysql_query($query2);
			$row2 = mysql_fetch_array($result2);
			
			$rowspan=$row2['c'];
			if ($row2['c']>10){
				$rowspan=10;
			}
			
			if ($first == true || $now != $mapp['conflictID']){	
				echo '<td class="text-center" style ="vertical-align:middle" rowspan='.$rowspan.'>';
				echo $number;
				echo "</td>";
				
				echo '<td class="text-center" style ="vertical-align:middle" >';
				echo '<a href="javascript:void(0);" NAME="Source Information" title="Class Information" onClick=\'window.open("source.php?sourceID='.$mapp['a1'].'&ontoID='.$one.'","Ratting", "left=150,top=200,width=600,height=300,0,status=0,");\'>'.$mapp['a'].'</a>';
				echo "</td>";

				echo '<td class="text-center" style ="vertical-align:middle">';
				echo '<a href="javascript:void(0);"NAME="Target Information" title=" Class Information " onClick=\'window.open("target.php?targetID='.$mapp['b1'].'&ontoID='.$two.'","Ratting", "left=150,top=200,width=600,height=300,0,status=0,");\'>'.$mapp['b'].'</a>';				
				echo "</td>";
	
				echo '<td class="text-center" style ="vertical-align:middle" rowspan='.$rowspan.'>';
				echo '<a class="btn btn-default" href="graphTest-old.php?number='.$number.'&max='.$size.'&conflictID='.$mapp['conflictID'].'&source='.$one.'&target='.$two.'" role="button">View in graph</a>';	
				echo "</td>";

				$now = $mapp['conflictID'];

				$first = false;
			}
			else{
					echo '<td class="text-center" style ="vertical-align:middle" >';
					echo '<a href="javascript:void(0);"NAME="Source Information" title=" Class Information " 
						onClick=\'window.open("source.php?sourceID='.$mapp['a1'].'&ontoID='.$one.'","Ratting",
						"left=150,top=200,width=600,height=300,0,status=0,");\'>'.$mapp['a'].'</a>';
					echo "</td>";

					echo '<td class="text-center" style ="vertical-align:middle">';
					echo '<a href="javascript:void(0);"NAME="Target Information" title=" Class Information " 
						onClick=\'window.open("target.php?targetID='.$mapp['b1'].'&ontoID='.$two.'","Ratting",
						"left=150,top=200,width=600,height=300,0,status=0,");\'>'.$mapp['b'].'</a>';				
					echo "</td>";		
			}
				
			echo "</tr>";

			if($count == 10){
				echo '<tr >';
					echo '<td class="text-center" colspan=4 class="clickable" data-toggle="collapse" id="1" data-target=".'.$mapp['conflictID'].'collapsed">
					<a href="javascript:void(0);">Show/Hide</a></td>';
			    echo '</tr>';
			}
			
			$count += 1;
			
		}
		
		echo "</tbody></table>";			
	}
	include('closeDB.php');


?>
    <a href="#" class="scrollUpButton"><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span></a>


		</div>
	</div>
<span id="top-link-block" class="hidden">
    <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="glyphicon glyphicon-chevron-up"></i> Back to Top
    </a>
</span>
		
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2015, LaSIGE, FCUL. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
       
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="jquery.fitvids.js"></script>
        <script src="jquery.sequence-min.js"></script>
        <script src="jquery.bxslider.js"></script>
        <script src="main-menu.js"></script>
        <script src="template.js"></script>
        <script src="scrollUpButton.js"></script>
<script>
 
$(document).ready(function(){
  $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
          $('.scrollUpButton').fadeIn();
      } else {
          $('.scrollUpButton').fadeOut();
      }
  });
  $('.scrollUpButton').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 500);
      return false;
  });
 });   
    
    </script>

    </body>
</html>
