<?php

$n=$_POST['name'];
$i=$_POST['item'];
$p=$_POST['price'];

/* $filename="Menu.xml";

$xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('menu');
    
      $xml->startElement("menudata");
	  $xml->writeElement("name",$n);
	  //$xml->endElement();
	  //$xml->startElement("item");
      $xml->writeElement("item",$i);
	  //$xml->endElement();
	  //$xml->startElement("price");
      $xml->writeElement("price",$p);
      $xml->endElement();
	
    $xml->endElement();
    $xml->endDocument();

    //header('Content-type: text/xml'); //print on screen no file output with output memory
    //echo $xml->outputMemory(); //print on screen no file output with output memory
    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file,FILE_APPEND);
    
    //$xml->flush(); //print on screen no file output
 */
 
 
 /*  if(isset($_REQUEST['submit']))
			  
			  {
				 $xml= new DOMDocument("1.0","UTF-8");
				 $xml->load("Menu.xml");
				 //$rootTag= $xml->getElementsByTagName["document"]->item(0);
				 $dataTag = $xml->createElement("data");
				 
				 $menuTag = $xml->createElement("menu",$_POST['menu']);
				 $itemTag = $xml->createElement("item",$_POST['item']);
				 $priceTag = $xml->createElement("Price",$_POST['price']);
				 
				 $dataTag->appendchild($menuTag);
				 $dataTag->appendchild($itemTag);
				 $dataTag->appendchild($priceTag);
				 
				 $xml->documentElement->appendchild($dataTag);
				 
				 $xml->save("Menu.xml");
				 
			  } */
 
 
 if(isset($_REQUEST['submit']))
{ 
     $xml=new DOMDocument("1.0","UTF-8");
	 $xml->load("Menu.xml");
	 
	// $rootTag= $xml->getElementsByTagName("document")->item(0);
	 
	 $dataTag=$xml->createElement("data");
	 $nTag=$xml->createElement("n",$_REQUEST['name']);
     $iTag=$xml->createElement("i",$_REQUEST['item']);
	 $pTag=$xml->createElement("p",$_REQUEST['price']);
	 
	 $dataTag->appendChild($nTag);
	 $dataTag->appendChild($iTag);
	 $dataTag->appendChild($pTag);
	 
	 $rootTag->appendChild($dataTag);
	 
	 $xml->save("Menu.xml");
}
echo "XML write successful! <a href='index.php'>go back</a>";

?>