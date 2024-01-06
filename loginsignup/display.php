<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body  >
<!-- style="background: linear-gradient(to right, #e96443, #904e95);" -->
<div class="container-fluid ">   
	<p class="text-center h1 p-3">Registered Users</p>         
	  <table class="table table-hover">
	    <thead>
	      <tr>
	      	<th >Id</th> 
	        <th >Username</th>
	        <th >Email</th>
	        <th >City</th>
	        <th>Phone No</th>
	        <th >Password</th>
	        <th >Update</th>
	        <th >Delete</th>
	      </tr>
	    </thead>
	    <tbody>
		  <?php

			include 'connection.php';

			$selectquery = "select * from users";
			$query = mysqli_query($con, $selectquery);

			$nums = mysqli_num_rows($query);

			while ($res = mysqli_fetch_array($query)) {

			?> 
				<tr>
						<td ><?php echo $res['id']?></td>
		        <td ><?php echo $res['username']?></td>
		        <td ><?php echo $res['email']?></td>
		        <td ><?php echo $res['city']?></td>
		        <td ><?php echo $res['phno']?></td>
		        <td ><?php echo $res['password_1']?></td>
		        <td ><a href="#" data-toggle="tooltip" data-placement="top" title="Update" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
		        <td ><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
		      	</tr>

		<?php
		    }  
			?>
	      
	    </tbody>
	  </table>
</div>

</body>
</html>
