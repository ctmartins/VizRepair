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

        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="main-green.css">

		<!-- START SIGMA IMPORTS -->
		<script src="modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="src/sigma.core.js"></script>
		<script src="src/conrad.js"></script>
		<script src="src/utils/sigma.utils.js"></script>
		<script src="src/utils/sigma.polyfills.js"></script>
		<script src="src/sigma.settings.js"></script>
		<script src="src/classes/sigma.classes.dispatcher.js"></script>
		<script src="src/classes/sigma.classes.configurable.js"></script>
		<script src="src/classes/sigma.classes.graph.js"></script>
		<script src="src/classes/sigma.classes.camera.js"></script>
		<script src="src/classes/sigma.classes.quad.js"></script>
		<script src="src/captors/sigma.captors.mouse.js"></script>
		<script src="src/captors/sigma.captors.touch.js"></script>
		<script src="src/renderers/sigma.renderers.canvas.js"></script>
		<script src="src/renderers/sigma.renderers.webgl.js"></script>
		<script src="src/renderers/sigma.renderers.svg.js"></script>
		<script src="src/renderers/sigma.renderers.def.js"></script>
		<script src="src/renderers/webgl/sigma.webgl.nodes.def.js"></script>
		<script src="src/renderers/webgl/sigma.webgl.nodes.fast.js"></script>
		<script src="src/renderers/webgl/sigma.webgl.edges.def.js"></script>
		<script src="src/renderers/webgl/sigma.webgl.edges.fast.js"></script>
		<script src="src/renderers/webgl/sigma.webgl.edges.arrow.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.labels.def.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.hovers.def.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.nodes.def.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.edges.def.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.edges.curve.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.edges.arrow.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.edges.curvedArrow.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.edgehovers.def.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.edgehovers.curve.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.edgehovers.arrow.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.edgehovers.curvedArrow.js"></script>
		<script src="src/renderers/canvas/sigma.canvas.extremities.def.js"></script>
		<script src="src/renderers/svg/sigma.svg.utils.js"></script>
		<script src="src/renderers/svg/sigma.svg.nodes.def.js"></script>
		<script src="src/renderers/svg/sigma.svg.edges.def.js"></script>
		<script src="src/renderers/svg/sigma.svg.edges.curve.js"></script>
		<script src="src/renderers/svg/sigma.svg.labels.def.js"></script>
		<script src="src/renderers/svg/sigma.svg.hovers.def.js"></script>
		<script src="src/middlewares/sigma.middlewares.rescale.js"></script>
		<script src="src/middlewares/sigma.middlewares.copy.js"></script>
		<script src="src/misc/sigma.misc.animation.js"></script>
		<script src="src/misc/sigma.misc.bindEvents.js"></script>
		<script src="src/misc/sigma.misc.bindDOMEvents.js"></script>
		<script src="src/misc/sigma.misc.drawHovers.js"></script>
		<!-- END SIGMA IMPORTS -->
		<script src="plugins/sigma.plugins.image.js"></script>
		
		<script src="plugins/settings.js"></script>
		<script src="plugins/sigma.plugins.dragNodes.js"></script>
		
		<script src="plugins/sigma.helpers.graph.js"></script>
		<script src="plugins/sigma.plugins.activeState.js"></script>
		<script src="plugins/sigma.plugins.select.js"></script>
		<script src="plugins/sigma.plugins.keyboard.js"></script>

		<script src="plugins/sigma.plugins.tooltips.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/0.8.1/mustache.min.js"></script>

		<script src="plugins/sigma.renderers.edgeLabels/settings.js"></script>
		<script src="plugins/sigma.canvas.edges.labels.def.js"></script>
		<script src="plugins/sigma.canvas.edges.labels.curve.js"></script>
		<script src="plugins/sigma.canvas.edges.labels.curvedArrow.js"></script>

		<script src="plugins/sigma.renderers.linkurious/settings.js"></script>
		<script src="plugins/sigma.canvas.labels.def.js"></script>
		<script src="plugins/sigma.canvas.hovers.def.js"></script>
		<script src="plugins/sigma.canvas.nodes.def.js"></script>
		<script src="plugins/sigma.canvas.nodes.cross.js"></script>
		<script src="plugins/sigma.canvas.nodes.diamond.js"></script>
		<script src="plugins/sigma.canvas.nodes.equilateral.js"></script>
		<script src="plugins/sigma.canvas.nodes.square.js"></script>
		<script src="plugins/sigma.canvas.nodes.star.js"></script>
		<script src="plugins/sigma.canvas.edges.def.js"></script>
		<script src="plugins/sigma.canvas.edges.curve.js"></script>
		<script src="plugins/sigma.canvas.edges.arrow.js"></script>
		<script src="plugins/sigma.canvas.edges.curvedArrow.js"></script>
		<script src="plugins/sigma.canvas.edgehovers.def.js"></script>
		<script src="plugins/sigma.canvas.edgehovers.curve.js"></script>
		<script src="plugins/sigma.canvas.edgehovers.arrow.js"></script>
		<script src="plugins/sigma.canvas.edgehovers.curvedArrow.js"></script>
		
		<script src="plugins/worker.js"></script>
		<script src="plugins/supervisor.js"></script>
		<script src="plugins/sigma.plugins.animate.js"></script>


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Navigation & Logo-->
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
		<div class="section-sigma" width: 1349px height: 660px;>
			<div id="container">
				<style>
					body {
					  color: #333;
					  font-size: 14px;
					  font-family: Lato, sans-serif;
					}
					#graph-container {
					  top: 0;
					  bottom: 0;
					  left: 0;
					  right: 0;
					  position: absolute;
					}
					#control-pane {
					  top: 10px;
					  /*bottom: 10px;*/
					  right: 10px;
					  position: absolute;
					  width: 240px;
					  background-color: rgb(249, 247, 237);
					  box-shadow: 0 2px 6px rgba(0,0,0,0.3);
					}
					#control-pane > div {
					  margin: 10px;
					  overflow-x: auto;
					}
					h2, h3, h4 {
					  padding: 0;
					  font-variant: small-caps;
					}
					 input[type=range] {
					  width: 160px;
					}
				</style>
				<div id="graph-container"></div>
				
					
						
<?php
	ini_set('display_errors','On');
	ini_set('html_errors',0);
	error_reporting(-1);
	
	include('openDB.php');
	
	$number = $_GET['number'];
	$max = $_GET['max'];
	$id = $_GET['conflictID'];
	$source = $_GET['source'];
	$target = $_GET['target'];
	$nextVar = $number+1;
	$prevVar = $number-1;

	//labels source
	if($source == 1){
		$sourceLabel = "BDO";
	}
	else if($source == 2){
		$sourceLabel = "CCONT";
	}
	else if($source == 3){
		$sourceLabel = "EFO";
	}
	else if($source == 4){
		$sourceLabel = "EP";
	}
	else if($source == 6){
		$sourceLabel = "MA";
	}
	else if($source == 8){
		$sourceLabel = "OMIM";
	}
	else if($source == 9){
		$sourceLabel = "SDO";
	}
	else if($source == 10){
		$sourceLabel = "UBERON";
	}
	else if($source == 11){
		$sourceLabel = "ZFA";
	}
		
	//labels target
	if($target == 3){
		$targetLabel = "EFO";
	}
	else if($target == 4){
		$targetLabel = "EP";
	}
	else if($target == 5){
		$targetLabel = "FMA";
	}
	else if($target == 7){
		$targetLabel = "NCIT";
	}
	
	echo "<div id='control-pane'>";
		echo "<div align='center'>";
			echo "<form method='post'>";
				echo "<label class='control-label'>Number of mappings:</label>";
					echo "<select name='number'>";
						echo "<option value = '4'>4</option>";
						echo "<option value = '6'>6</option>";
						echo "<option selected value = '8'>8</option>";
						echo "<option value = '10'>10</option>";
						echo "<option value = '20'>20</option>";
					echo "</select>";
				echo "<p><input type='submit' name='submit' value='Draw graph'/></p>";
			echo "</form>";
		echo "</div>";
		
		echo "<div align='center'>";
		 	echo "<button id='previous'>Previous</button>";
			echo "<button id='next'>Next</button>";
			echo "<script>
				if(".$number."!=".$max."){
					document.getElementById('next').onclick = function () {
						location.href = 'http://xldb.di.fc.ul.pt/biotools/vizrepair/graphTest-old.php?number=".$nextVar."&max=".$max."&conflictID=".$id."&source=".$source."&target=".$target."';
					};
				} else{
					document.getElementById('next').onclick = function () {
						location.href = 'http://xldb.di.fc.ul.pt/biotools/vizrepair/graphTest-old.php?number=1&max=".$max."&conflictID=".$id."&source='".$source."&target=".$target."';
					};
				}
				if(".$number."!= 1){
					document.getElementById('previous').onclick = function () {
						location.href = 'http://xldb.di.fc.ul.pt/biotools/vizrepair/graphTest-old.php?number='".$prevVar."&max=".$max."&conflictID=".$id."'&source='".$source."'&target='".$target."';
					};
				} else{
					document.getElementById('previous').onclick = function () {
						location.href = 'http://xldb.di.fc.ul.pt/biotools/vizrepair/graphTest-old.php?number='".$max."&conflictID=".$id."&source=".$source."'&target='".$target."';
					};
				}
			</script>";
		echo "</div>";
						
		echo "<div align='center'><kbd>spacebar</kbd> + <kbd>Del</kbd> Drop selected nodes or edges</div>";
						
		echo "<div align='center'>";
		 	echo "<form method='get' action='".$sourceLabel."_".$targetLabel.".rdf'>
				<button type='submit'>Dowload whole alignment</button>
			</form>";
			echo "<button type='submit'>Download corrected alignment</button>";
			echo "<button type='submit'>Upload alignment</button>";
		echo "</div>";
		echo "<div align='center'>";
			echo "<button id='snap-btn'>Download Image</button>";
		echo "</div>";
		echo "<div align='center'>";
		 	echo"<form method='get' action='http://xldb.di.fc.ul.pt/biotools/vizrepair/toolTest.php'>
				<button type='submit'>Restart</button>
			</form>";
		echo "</div>";
		echo "<div id='dump' class='hidden'></div>";
		echo "</div>";
		
//build the framework of the graph
echo" <script>
	var _ = {
		$: function (id) {
			return document.getElementById(id);
		}
	};
	sigma.renderers.def = sigma.renderers.canvas;
    var s = new sigma({
		renderer: {
			container: document.getElementById('graph-container'),
			type: 'canvas'
		},
		settings: {
			dragNodeStickiness: 0.01,
			borderSize: 2,
			outerBorderSize: 3,
			defaultNodeBorderColor: '#fff',
			defaultNodeOuterBorderColor: 'rgb(236, 81, 72)',
			maxEdgeSize:5,
			enableEdgeHovering: true,
			edgeHoverHighlightNodes: 'circle',
			edgeHoverColor: 'edge',
			defaultEdgeHoverColor: '#FF0000',
			edgeHoverSizeRatio: 1,
			edgeHoverExtremities: true,
			doubleClickEnabled: false,
			labelThreshold: 0,
		}
	});
</script>";

if (isset($_POST['submit'])) {
	$selected_val = $_POST['number'];
	
	//**SHARED VARIABLES**
	$repeatTotalSource = array();
	$repeatTotalTarget = array();

	//**ADD ALL DISJOINTS FOR THIS CONFLICTSET**
	$repeatDisjSource = array();
	$repeatDisjTarget = array();

$i = 1;
$query = 'SELECT a.uri as aURI, a.classID as aID, a.primary_Label as aLABEL, a.ontologyID as aONTO, b.uri as bURI, b.classID as bID, b.primary_Label as bLABEL, b.ontologyID as bONTO FROM classInfo a, classInfo b, disjointsInfo c where c.classID1=a.classID and c.classID2=b.classID and c.isDisjoint = 1 and c.conflictID = '.$id;
$result = mysql_query($query);
while($row= mysql_fetch_array($result)){
	echo" <script> var disj = 'disj' + ".$i.",
		disj1 = '' + ".$row['aID'].",
		disj2 = '' + ".$row['bID'].";
	</script>";
	
	//Add first node
	if($row['aONTO'] === $source){	
		echo "<script>
			s.graph.addNode({
				id: disj1,
				label: '".$row['aLABEL']."',
				x: Math.random(),
				y: Math.random(),
				size: 2,
				color: '#3300FF'
		});</script>";
		$repeatDisjSource[] = $row['aID'];
	}
	else{
		echo "<script>
			s.graph.addNode({
				id: disj1,
				label: '".$row['aLABEL']."',
				x: Math.random(),
				y: Math.random(),
				size: 2,
				color: '#FFA500'
		});</script>";
		$repeatDisjTarget[] = $row['aID'];
	}
	
	//Add second node
	if($row['bONTO'] === $source){	
		echo "<script>
			s.graph.addNode({
				id: disj2,
				label: '".$row['bLABEL']."',
				x: Math.random(),
				y: Math.random(),
				size: 2,
				color: '#3300FF'
		});</script>";
		$repeatDisjSource[] = $row['bID'];
	}
	else{
		echo "<script>
			s.graph.addNode({
				id: disj2,
				label: '".$row['bLABEL']."',
				x: Math.random(),
				y: Math.random(),
				size: 2,
				color: '#FFA500'
		});</script>";
		$repeatDisjTarget[] = $row['bID'];
	}
				
	
	//Add the edge between the source and target class of the mapping
	echo" <script>
		s.graph.addEdge({
			id: disj,
				source: disj1,
				target: disj2,
				size: 5,
				color: '#000'
			});
		s.refresh();
	</script>";
	
	$i += 1;
}

//CREATE A DIC WHERE WE WILL ITERATE
$ix = 0;
$iy = 0;

//Source
$disjClassesSource = array();

foreach ($repeatDisjSource as &$disjSource){
	$sourceClass = array();
	$query = 'SELECT a.uri as aURI, a.classID as aID, a.primary_Label as aLABEL, a.ontologyID as aONTO FROM classInfo a, disjointsInfo c where c.classID1=a.classID and c.classID2='.$disjSource.' and c.isDisjoint = 0 and c.conflictID = '.$id;
	$result = mysql_query($query);
	while($row= mysql_fetch_array($result)){
		$sourceClass[] = $row['aID'];
		$ix +=1;
	}
	$disjClassesSource[$disjSource] = $sourceClass;
}

//Target
$disjClassesTarget = array();

foreach ($repeatDisjTarget as &$disjTarget){
	$targetClass = array();
	$query = 'SELECT a.uri as aURI, a.classID as aID, a.primary_Label as aLABEL, a.ontologyID as aONTO FROM classInfo a, disjointsInfo c where c.classID1=a.classID and c.classID2='.$disjTarget.' and c.isDisjoint = 0 and c.conflictID = '.$id;
	$result = mysql_query($query);
	while($row= mysql_fetch_array($result)){
		$targetClass[] = $row['aID'];
		$iy +=1;
	}
	$disjClassesTarget[$disjTarget] = $targetClass;
}


//**ADD ALL X CLASSES RELATED TO THE DISJOINTS**

$ix = 0;
$iy = 0;

$repeatSource = array();
$repeatTarget = array();

$limitCount = 1;

$totalsize = 0;

foreach ($disjClassesSource as $disjSource => $classSource) {
		$totalsize += sizeof($classSource);
}
foreach ($disjClassesTarget as $disjTarget => $classTarget) {
		$totalsize += sizeof($classTarget);
}

//Source
if($totalsize <= $selected_val){
	foreach ($disjClassesSource as $disjSource => $classSource) {
		foreach ($classSource as $index => $classID) {
			$query = 'SELECT a.primary_Label as aLABEL FROM classInfo a where classID ='.$classID;
			$result = mysql_query($query);
			while($row= mysql_fetch_array($result)){
				echo" <script> var subDisjS = 'subDisjS' + ".$limitCount.",
					subDisjS1 = '' + ".$classID.",
					subDisjS2 = '' + ".$disjSource.";
				</script>";
				
				//Add missing node (related to the mapping)
				echo "<script>
					s.graph.addNode({
						id: subDisjS1,
						label: '".$row['aLABEL']."',
						x: Math.random(),
						y: Math.random(),
						size: 2,
						color: '#3300FF'
				});</script>";
				$repeatSource[] = $classID;
				
				//Add the edge between the source and target class of the mapping
				echo" <script>
					s.graph.addEdge({
						id: subDisjS,
							source: subDisjS1,
							target: subDisjS2,
							size: 5,
							type: (subDisjS1 === subDisjS2) ? 'curvedArrow' : 'arrow',
							color: '#3300FF'
						});
					s.refresh();
				</script>";
						
				$limitCount += 1;
			}
		}
	}
	
	$ix += 1;
	
	foreach ($disjClassesTarget as $disjTarget => $classTarget) {
		foreach ($classTarget as $index => $classID) {
			$query = 'SELECT a.primary_Label as aLABEL FROM classInfo a where classID ='.$classID;
			$result = mysql_query($query);
			while($row= mysql_fetch_array($result)){
				echo" <script> var subDisjT = 'subDisjT' + ".$limitCount.",
				subDisjT1 = '' + ".$classID.",
				subDisjT2 = '' + ".$disjTarget.";
				</script>";
				
				//Add missing node (related to the mapping)
				echo "<script>
					s.graph.addNode({
						id: subDisjT1,
						label: '".$row['aLABEL']."',
						x: Math.random(),
						y: Math.random(),
						size: 2,
						color: '#FFA500'
				});</script>";
				$repeatTarget[] = $classID;
				
				//Add the edge between the source and target class of the mapping
				echo" <script>
					s.graph.addEdge({
						id: subDisjT,
							source: subDisjT1,
							target: subDisjT2,
							size: 5,
							type: (subDisjT1 === subDisjT2) ? 'curvedArrow' : 'arrow',
							color: '#FFA500'
						});
					s.refresh();
				</script>";
					
				$limitCount += 1;
			}
		}
	}
	$iy += 1;	
}
else{
	while($limitCount < $selected_val){
	foreach ($disjClassesSource as $disjSource => $classSource) {
		if(!array_key_exists($ix, $classSource)){
			continue;
		}
		$query = 'SELECT a.primary_Label as aLABEL FROM classInfo a where classID ='.$classSource[$ix];
		$result = mysql_query($query);
		while($row= mysql_fetch_array($result)){
			echo" <script> var subDisjS = 'subDisjS' + ".$limitCount.",
				subDisjS1 = '' + ".$classSource[$ix].",
				subDisjS2 = '' + ".$disjSource.";
			</script>";
			
			//Add missing node (related to the mapping)
			echo "<script>
				s.graph.addNode({
					id: subDisjS1,
					label: '".$row['aLABEL']."',
					x: Math.random(),
					y: Math.random(),
					size: 2,
					color: '#3300FF'
			});</script>";
			$repeatSource[] = $classSource[$ix];
			
			//Add the edge between the source and target class of the mapping
			echo" <script>
				s.graph.addEdge({
					id: subDisjS,
						source: subDisjS1,
						target: subDisjS2,
						size: 5,
						type: (subDisjS1 === subDisjS2) ? 'curvedArrow' : 'arrow',
						color: '#3300FF'
					});
				s.refresh();
			</script>";
					
			$limitCount += 1;
		}
	}
	$ix += 1;
	
	foreach ($disjClassesTarget as $disjTarget => $classTarget) {
		if(!array_key_exists($iy,$classTarget)){
			continue;
		}
		$query = 'SELECT a.primary_Label as aLABEL FROM classInfo a where classID ='.$classTarget[$iy];
		$result = mysql_query($query);
		while($row= mysql_fetch_array($result)){
			echo" <script> var subDisjT = 'subDisjT' + ".$limitCount.",
			subDisjT1 = '' + ".$classTarget[$iy].",
			subDisjT2 = '' + ".$disjTarget.";
			</script>";
			
			//Add missing node (related to the mapping)
			echo "<script>
				s.graph.addNode({
					id: subDisjT1,
					label: '".$row['aLABEL']."',
					x: Math.random(),
					y: Math.random(),
					size: 2,
					color: '#FFA500'
			});</script>";
			$repeatTarget[] = $classTarget[$iy];
			
			//Add the edge between the source and target class of the mapping
			echo" <script>
				s.graph.addEdge({
					id: subDisjT,
						source: subDisjT1,
						target: subDisjT2,
						size: 5,
						type: (subDisjT1 === subDisjT2) ? 'curvedArrow' : 'arrow',
						color: '#FFA500'
					});
				s.refresh();
			</script>";
					
			$limitCount += 1;
		}
	}
	$iy += 1;
}
}

//**ADD ALL MAPPINGS INVOLVED WITH THE X CLASSES**
$i = 1;

//Source
foreach ($repeatSource as &$valueSource){	
	$query = 'SELECT DISTINCT b.uri as bURI, b.classID as bID, b.primary_Label as bLABEL FROM classInfo b, mappingInfo c, conflictSet d WHERE c.mappingID = d.mappingID and c.classID2=b.classID and c.classID1 = '.$valueSource.' and d.conflictID = '.$id;
	$result = mysql_query($query);
	while($row= mysql_fetch_array($result)){
		echo" <script> var mapS = 'mapS' + ".$i.",
			mapS1 = '' + ".$valueSource.",
			mapS2 = '' + ".$row['bID'].";
		</script>";
		
		echo "<script>  s.graph.addNode({
				id: mapS2,
				label: '".$row['bLABEL']."',
				x: Math.random(),
				y: Math.random(),
				size: 2,
				color: '#FFA500'
		});</script>";
		
		$repeatTotalTarget[] = $row['bID'];
						
		//Add the edge between the source and target class of the mapping
		echo" <script>
			s.graph.addEdge({
				id: mapS,
				source: mapS1,
				target: mapS2,
				size: 5,
				color: '#16A085'
			});
			s.refresh();
		</script>";
		
		$i += 1;
	}
}

$i = 1;

//Target
foreach ($repeatTarget as &$valueTarget){
	$query = 'SELECT DISTINCT a.uri as aURI, a.classID as aID, a.primary_Label as aLABEL FROM classInfo a, mappingInfo c, conflictSet d WHERE c.mappingID = d.mappingID and c.classID1=a.classID and c.classID2 = '.$valueTarget.' and d.conflictID = '.$id;
	$result = mysql_query($query);
	while($row= mysql_fetch_array($result)){
		echo" <script> var mapT = 'mapT' + ".$i.",
			mapT1 = '' + ".$row['aID'].",
			mapT2 = '' + ".$valueTarget.";
		</script>";
		
		echo "<script>  s.graph.addNode({
				id: mapT1,
				label: '".$row['aLABEL']."',
				x: Math.random(),
				y: Math.random(),
				size: 2,
				color: '#3300FF'
		});</script>";
		
		$repeatTotalSource[] = $row['aID'];
						
		//Add the edge between the source and target class of the mapping
		echo" <script>
			s.graph.addEdge({
				id: mapT,
				source: mapT1,
				target: mapT2,
				size: 5,
				color: '#16A085'
			});
			s.refresh();
		</script>";
		
		$i += 1;
	}
}


//**ADD SUBCLASSES RELATIONS**
$ix = 0;
$ux = 0;
$count = 1;

//SOURCE
foreach ($repeatTotalSource as &$a1){
	$querySubSource = 'SELECT c.classM as parent FROM subInfo c WHERE c.classF = '.$a1;
	$resultSubSource = mysql_query($querySubSource);
		if (mysql_num_rows($resultSubSource)) {
			while($rowSubSource= mysql_fetch_array($resultSubSource)){
				echo" <script> var w = 'w' + ".$ix.",
				source = '' + ".$a1.",
				target = '' + ".$rowSubSource['parent'].";</script>";

				echo" <script>
			    	s.graph.addEdge({
			      		id: w,
						source: '' + ".$a1.",
			     		target: '' + ".$rowSubSource['parent'].",
						size: 5,
						type: (source === target) ? 'curvedArrow' : 'arrow',
						color: '#3300FF'
			    	});

	    		s.refresh();
				</script>";
				$ix+=1;
			}
		}
}

//TARGET	
foreach ($repeatTotalTarget as &$b1){
	$querySubTarget = 'SELECT c.classM as parent FROM subInfo c WHERE c.classF = '.$b1;
	$resultSubTarget = mysql_query($querySubTarget);
		if (mysql_num_rows($resultSubTarget)) {
			while($rowSubTarget= mysql_fetch_array($resultSubTarget)){
				echo" <script> var z = 'z' + ".$ux.",
				source = '' + ".$b1.",
				target = '' + ".$rowSubTarget['parent'].";</script>";
				
				echo" <script>
			    	s.graph.addEdge({
			      		id: z,
						source: '' + ".$b1.",
			     		target: '' + ".$rowSubTarget['parent'].",
						size: 5,
						type: (source === target) ? 'curvedArrow' : 'arrow',
						color: '#FFA500'
			    	});
	    		s.refresh();
				</script>";
				$ux+=1;
			}
		}	
}

//ADD SHARED DESCENDANTS WHEN THEY EXIST
$countDesc = 1;
$repeatDesc = array();
//SOURCE
foreach ($repeatTotalSource as &$value1){
	foreach ($repeatTotalSource as &$value2){
		if($value1 == $value2){
			continue;
		}
		$queryDesc = 'SELECT f.classID as classF, f.uri as uriF, f.primary_Label as labelF from descInfo as d1, descInfo as d2, classInfo as f where d1.classF = d2.classF and d1.classF  = f.classID and d1.classM = '.$value1.' and d2.classM = '.$value2.' limit 1';
		$resultDesc = mysql_query($queryDesc);
		while($rowDesc= mysql_fetch_array($resultDesc)){
			if(in_array($rowDesc['classF'],$repeatTotalTarget)){
				echo" <script> var target ='' + ".$rowDesc['classF']."</script>";
			}
			elseif(in_array($rowDesc['classF'],$repeatDesc)) {
				echo" <script> var target ='descNode' + ".$rowDesc['classF']."</script>";
			}
			else{
				echo" <script> var target = 'descNode' + ".$rowDesc['classF'].";</script>"; 
				//create the node of the descendant
				echo" <script> s.graph.addNode({
					id: target,
					label: '".$rowDesc['labelF']."',
					x: Math.random(),
					y: Math.random(),
					size: 2,
					color: '#3300FF'
				});</script>";
				$repeatDesc[] = $rowDesc['classF'];
			}
			
			echo" <script> var descS = 'descS' + ".$countDesc.",
			descT = 'descT' + ".$countDesc.",
			source1 = '' + ".$value1.",
			source2 = '' + ".$value2.";</script>";
			
			echo" <script>
				s.graph.addEdge({
					id: descS,
					source: target,
					target: source1,
					size: 5,
					type: (target === source1) ? 'curvedArrow' : 'arrow',
					color: '#3300FF'
				}).addEdge({
					id: descT,
					source: target,
					target: source2,
					size: 5,
					type: (target === source2) ? 'curvedArrow' : 'arrow',
					color: '#3300FF'
				});
				s.refresh();
			</script>";
			$countDesc += 1;
		}
	}
}

//TARGET
foreach ($repeatTotalTarget as &$value3){
	foreach ($repeatTotalTarget as &$value4){
		if( $value3 == $value4){
			continue;
		}
		$queryDesc = 'SELECT f.classID as classF, f.uri as uriF, f.primary_Label as labelF from descInfo as d1, descInfo as d2, classInfo as f where d1.classF = d2.classF and d1.classF  = f.classID and d1.classM = '.$value3.' and d2.classM = '.$value4.' limit 1';
		$resultDesc = mysql_query($queryDesc);
		while($rowDesc= mysql_fetch_array($resultDesc)){
			if(in_array($rowDesc['classF'],$repeatTotalSource)){
				echo" <script> var target ='' + ".$rowDesc['classF']."</script>";
			}
			elseif(in_array($rowDesc['classF'],$repeatDesc)) {
				echo" <script> var target ='descNode' + ".$rowDesc['classF']."</script>";
			}
			else{
				echo" <script> var target = 'descNode' + ".$rowDesc['classF'].";</script>"; 
				//create the node of the high descendant
				echo" <script> s.graph.addNode({
					id: target,
					label: '".$rowDesc['labelF']."',
					x: Math.random(),
					y: Math.random(),
					size: 2,
					color: '#FFA500'
				});</script>";
				$repeatDesc[] = $rowDesc['classF'];
			}
			
			echo" <script> var descS = 'descS' + ".$countDesc.",
			descT = 'descT' + ".$countDesc.",
			source1 = '' + ".$value3.",
			source2 = '' + ".$value4.";</script>";
			
			echo" <script>
				s.graph.addEdge({
					id: descS,
					source: target,
					target: source1,
					size: 5,
					type: (target === source1) ? 'curvedArrow' : 'arrow',
					color: '#FFA500'
				}).addEdge({
					id: descT,
					source: target,
					target: source2,
					size: 5,
					type: (target === source2) ? 'curvedArrow' : 'arrow',
					color: '#FFA500'
				});
				s.refresh();
			</script>";
			$countDesc += 1;
		}
	}
}
		}
//ANIMATIONS
echo" <script>
//DRAG NODES
// Instanciate the ActiveState plugin:
var activeState = sigma.plugins.activeState(s);

// Initialize the dragNodes plugin:
var dragListener = sigma.plugins.dragNodes(s, s.renderers[0], activeState);

// Initialize the Select plugin:
var select = sigma.plugins.select(s, activeState);

// Initialize the Keyboard plugin:
var keyboard = sigma.plugins.keyboard(s, s.renderers[0]);

// Bind the Keyboard plugin to the Select plugin:
select.bindKeyboard(keyboard);

if (sigma.plugins.keyboard) {
  document.getElementsByClassName('container')[0].style.display = 'block';
}

dragListener.bind('startdrag', function(event) {
  console.log(event);
});
dragListener.bind('drag', function(event) {
  console.log(event);
});
dragListener.bind('drop', function(event) {
  console.log(event);
});
dragListener.bind('dragend', function(event) {
  console.log(event);
});

//FORCELINK
// Configure the ForceLink algorithm:
var fa = sigma.layouts.configForceLink(s, {
worker: true,
autoStop: true,
background: true,
scaleRatio: 30,
gravity: 3,
easing: 'cubicInOut'
});
fa.bind('start', function(e) {	
console.log(e.type);

//DOWNLOAD IMAGE
function generateImage(mouse, clip) {
	sigma.plugins.image(s, s.renderers[0], {
		download: true,
		margin: 50,
		background: \"#FFFFFF\",
		clip: clip,
		zoomRatio: 1,
		labels: true
	  });
}
_.$('snap-btn').addEventListener(\"click\", generateImage);
_.$('snapClip-btn').addEventListener(\"click\", function(event) {
generateImage(event, true)
});	
document.getElementById('layout-notification').style.visibility = '';
if (e.type == 'start') {
  document.getElementById('layout-notification').style.visibility = 'visible'; 
}
else{
}
});

// Start the ForceLink algorithm:
sigma.layouts.startForceLink();
sigma.layouts.stopForceLink();

</script>";

include('closeDB.php');


echo "</div>
		</div>
		</div>

		<div class='section'>
			<div class='container' align='center'>

				<h4><b>
				<span class='glyphicon glyphicon-minus' aria-hidden='true' style='color:#16A085'></span> <font color='#16A085'>Mapping</font>
				<span class='glyphicon glyphicon-asterisk' aria-hidden='true' style='color:#3300FF'></span> <font color='#3300FF'>".$sourceLabel." Class</font>
				<span class='glyphicon glyphicon-asterisk' aria-hidden='true' style='color:#FFA500'></span> <font color='#FFA500'>".$targetLabel." Class</font>
				<span class='glyphicon glyphicon-minus' aria-hidden='true' style='color:#3300FF'></span> <font color='#3300FF'>Subclass_of_".$sourceLabel."</font>
				<span class='glyphicon glyphicon-minus' aria-hidden='true' style='color:#FFA500'></span> <font color='#FFA500'>Subclass_of_".$targetLabel."</font>
				<span class='glyphicon glyphicon-minus' aria-hidden='true' style='color:#000'></span> <font color='#000'>Disjoints</font>
				</b></h4>
				<br></br>";
		
?>

				<script>				
					function goBack() {
   					 	window.history.back();
					}
				</script>

			</div>
		</div>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="jquery-1.9.1.min.js"><\/script>')</script>
        <script src="bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="jquery.fitvids.js"></script>
        <script src="jquery.sequence-min.js"></script>
        <script src="jquery.bxslider.js"></script>
        <script src="main-menu.js"></script>
        <script src="template.js"></script>

    </body>
</html>
