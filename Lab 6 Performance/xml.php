<!DOCTYPE html>
<html lang="en">
<head>
<title>XML File</title>


</head>
<body>
<a href="xml.php" class="button">Import XML</a>
</body>
</html>

<?php
$filename="tour.xml";
$xml = new XMLWriter();
    $xml->openMemory();
	$xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
	$xml->startElement('tour');
	 $xml->startElement("tours");
	  $xml->writeElement("tour");
include 'db_connection.php';
 
$conn = OpenCon();



$sql = "SELECT id, country_id, title, description FROM tour";
$result = $conn->query($sql);
$xml = new XMLWriter();
    $xml->openMemory();
	$xml->setIndent(true);
	$xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('tours');

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        
	  $xml->startElement("tour");
		$xml->writeElement("id",$row["id"]);
		$xml->writeElement("country",$row["country_id"]);
		$xml->writeElement("title",$row["title"]);
		$xml->writeElement("desc",$row["description"]);
		$xml->endElement();
		
		
		
		
    }
		$xml->endElement();
	$xml->endDocument();
	$file = $xml->outputMemory();
	 file_put_contents("tour.xml",$file,FILE_APPEND);
	
} else {
    echo "0 results";
}
 
CloseCon($conn);
 
?>
