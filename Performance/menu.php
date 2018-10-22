<html>
  <head>
       <title> Menu </title>
	   
  </head>
  
  
  
      <body>
	     
		 
		 
		 
		  <?php
		  
		  if(isset($_REQUEST['submit']))
			  
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
				 
			  }
		  ?>
		 <form action="menu.php" method="post">
		<table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="menu" placeholder="Menu Name"/></td>
        </tr>
        <tr>
            <td>Item</td>
            <td>:</td>
            <td><input type="text" name="item" placeholder="Item name"/></td>
        </tr>
		<tr>
		<td>Price</td>
            <td>:</td>
			 <td><input type="text" name="price" placeholder="Item Price"/></td>
		
		</tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"/></td>
            <td><input type="reset" /> </td>
            
        </tr>
    </table>
		 
	    
	  
	  
	  
	  </body>
</html>
