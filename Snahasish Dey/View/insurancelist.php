<?php 

	 require_once('../Controller/header.php');
	 require_once('../Model/insmodel.php');
	 $result = insview();
	 $count = mysqli_num_rows($result);
	 
?>
<html>
<head>
	<title>Insurance list</title>
</head>
<body align ="center"style="background-color:gray;">
		<a href="adminhome.php"> Back </a><hr> <br> 
		<a href="logout.php"> logout </a><hr>
		<br>
		<h1> Insurance List</h1>
		<table align ="center" border="3">
			<tr> 
				<th>Serial_No</th>
				<th>Creation_Date</th>
				<th>Category</th>
			</tr>

			<?php  
		
		    while($data = mysqli_fetch_assoc($result))
			 {
		  ?>

				<tr>

					<td><?php echo $data['Serial_No']?></td>
					<td><?php echo $data['Creation_Date']?></td>
					<td><?php echo $data['Category']?></td>
				
				   
			 </tr>
            
			 <?php
			 }

			 ?>
            
			
		</table>
</body>
</html>