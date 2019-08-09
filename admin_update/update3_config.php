<?php

$connection = "host=localhost port=5432 dbname=pharmacy user=postgres password=hegde234";

$db = pg_connect($connection);
if(!$db)
 {
 	
 	echo "<script type='text/javascript'>
			                alert('Welcome to Medicio!!!');
			                window.location.href='http://localhost/medicio/index.php'</script>";
			                 

 }


if(isset($_POST['update']))
{
		$myusername=$_POST['hospname'];
		$mydrugid=$_POST['hospid'];
		
		$myprice=$_POST['location'];
		
		$mytype=$_POST['email'];
		
		$myphone=$_POST['phone'];




		

		$mysubmit=$_POST['update'];


		$q = pg_query($db,"SELECT hospital_id FROM hospital WHERE hospital_id='$mydrugid'");
		$row = pg_fetch_array($q); 
		$did = $row['hospital_id'];


		echo "<br>";


			  if ($did == $mydrugid)
			  {
			      echo "<script type='text/javascript'>
			      alert('Hospital ID already exists...Please Check Once ')
			      window.location.href='http://localhost/medicio/admin_update/update3.php'
			      </script>";
			      


			      
			 }


			else
			{
				
			        $query = "INSERT INTO hospital (hospital_id,hosp_name,location,email,phone_no)
			        VALUES ('$mydrugid','$myusername','$myprice','$mytype','$myphone')";
			        
			        
			        echo "<script type='text/javascript'>
			                alert('Updated successfully.');
			                window.location.href='http://localhost/medicio/thuglife.html'

			        </script>";
			       
			        
			       


			}
			 pg_query($db,$query);


}

  pg_close($db);





?>
