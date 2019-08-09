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
		$myusername=$_POST['doctname'];
		$mydrugid=$_POST['doctid'];
		
		$myprice=$_POST['speciality'];
		
		$mytype=$_POST['email'];
		$mysalary=$_POST['salary'];
		$myhosp=$_POST['hospid'];
		$myphone=$_POST['phoneno'];




		

		$mysubmit=$_POST['update'];


		$q = pg_query($db,"SELECT doctor_id FROM doctor WHERE doctor_id='$mydrugid'");
		$row = pg_fetch_array($q); 
		$did = $row['doctor_id'];


		echo "<br>";


			  if ($did == $mydrugid)
			  {
			      echo "<script type='text/javascript'>
			      alert('Doctor ID already exists...Please Check Once ')
			      window.location.href='http://localhost/medicio/admin_update/update2.php'
			      </script>";
			      


			      
			 }


			else
			{
				
			        $query = "INSERT INTO doctor (doctor_id,doct_name,speciality,email,salary,hosp_id,phone_no)
			        VALUES ('$mydrugid','$myusername','$mytype','$myprice','$mysalary','$myhosp','$myphone')";
			        
			        
			        echo "<script type='text/javascript'>
			                alert('Updated successfully.');
			                window.location.href='http://localhost/medicio/thuglife.html'

			        </script>";
			       
			        
			       


			}
			 pg_query($db,$query);


}

  pg_close($db);





?>
