<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Title</title>
</head>
<body>
File Write:
<hr>
<form name="xmlwrite" method="post" action="write.php">
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name" placeholder="Menu Name"/></td>
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
            <td><input type="submit" name="ok" value="submit"/></td>
            <td><input type="reset" /> </td>
            
        </tr>
    </table>
</form>
<hr>
XML Read
<hr>
<a href='read.php'>Read XML</a>
</body>
</html>