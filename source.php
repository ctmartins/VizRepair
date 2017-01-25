<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Class Information</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="leaflet.css" />
		<link rel="stylesheet" href="main-green.css">

        <script src="modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
	
    <body>
		<div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="span12 text-center">

<?php
	$keyAPI = '8b509b04-2216-49cf-a03f-59f60e63f067'; 
	include('openDB.php');
		$id = $_GET['sourceID'];
		$ontoId = $_GET['ontoID'];
		$onto = "";
		
		if($ontoId == 1){
			$onto = "BDO";
		} else if($ontoId == 2){
			$onto = "CCONT";
		} else if($ontoId == 3){
			$onto = "EFO";
		} else if($ontoId == 4){
			$onto = "EP";
		} else if($ontoId == 5){
			$onto = "FMA";
		} else if($ontoId == 6){
			$onto = "MA";
		} else if($ontoId == 7){
			$onto = "NCIT";
		} else if($ontoId == 8){
			$onto = "OMIM";
		} else if($ontoId == 9){
			$onto = "SDO";
		} else if($ontoId == 10){
			$onto = "UBERON";
		} else if($ontoId == 11){
			$onto = "ZFA";
		}	
		
		$query = 'SELECT b.uri FROM classInfo b WHERE b.classID='.$id;
		$result = mysql_query($query);
		
		$once = true;
		while($row = mysql_fetch_array($result)){
			echo "<h5><b>URI:</b> ".$row['uri']."</h5>";
			
			$trimmedURI1 = str_replace(":", "%3A", $row['uri']);
			$trimmedURI2 = str_replace("/", "%2F", $trimmedURI1);
			$trimmedFinal = str_replace("#", "%23", $trimmedURI2);
			
			$class = file_get_contents('http://data.bioontology.org/ontologies/'.$onto.'/classes/'.$trimmedFinal.'?apikey='.$keyAPI);				
			$classDec = json_decode($class);
			
			echo "<h5><b>Label:</b> ".$classDec->prefLabel."</h5>";
			
			echo "<h5><b>Synonym:</b> ";
			$syn=implode(",",$classDec->synonym);
			if(strcmp($syn,'')==0){
				echo "no synonym found";
			}else {
			echo $syn;
			}
			echo "</h5>";
			
			echo "<h5><b>Definition:</b> ";
			$def=implode(",",$classDec->definition);
			if(strcmp($def,'')==0){
				echo "no definition found";
			}else {
			echo $def;
			}
			echo "</h5>";
		}

	include('closeDB.php');
?>
    					
	        		</div>
	        	</div>
	        </div>
	    </div>
	</body>
</html>
