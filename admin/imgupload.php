<?php

?>
<!DOCTYPE html>
<!-- Website template form http://www.cssmoban.com/ -->
<html>
<head>
<meta charset="UTF-8">

</head>
<body>
	
		<form action="server.php" method="post" enctype="multipart/form-data">
		<table width="680px" height="920px" border="4" >
			
			<tr height="30px">
				<td width="100px" align="center">图片:</td>
				<td align="center"  colspan="4">
				<input type="file" id="upfile" name="upfile" style="height:20px;font-size:20px" size="43">
				
				</td>
			</tr>
			
			
			
			<tr height="50px" align="center">
				<td colspan="5">
					<input type="submit" name="submit" id="submit" value="确认" style="height:35px;width:70px;font-size:20px">&nbsp;&nbsp;
					<input type="reset" name="reset" id="reset" value="重置" style="height:35px;width:70px;font-size:20px">
				</td>
			</tr>
			
		</table>
		</form>
		
</body>
</html>