<?php
$dom = simplexml_load_file("Menu.xml");

foreach($dom->menu as $m)
{
	//echo "<h2>$h->name - $h->Stars</h2>"."<hr>";
	echo "<h4>menudata</h4>";
	
	foreach($m->menu->menudata as $f){
		echo "<li>".$n->name."</li>";
		
	}
	echo "<h4>Item:</h4>"."<br>";
		echo $m->item."<br>";
		echo $m->price;
	
	/* foreach($m->Available as $av){		
		if($av=="True"){
			echo "<h4>ROOM Available: YES</h4>"."<br><hr>"; 
		}
		else echo "<h4>ROOM Available: NO</h4>"."<br>"."<hr>";
	 */
	}

?>