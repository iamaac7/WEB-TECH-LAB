<html>
<title>
</title>
<body>
      <form name= "" method="post" action="">
	   
	      <?php echo '<pre>';
           print_r($_COOKIE);
           echo '</pre>';?>
	      <h1>Sucessfully Logged In !!</h1>
           <input type="button" value="Log Out" onclick="window.location.href='logout.php'" />

     	  
	  </form>
</body>
</html>