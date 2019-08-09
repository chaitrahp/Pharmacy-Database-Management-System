<?php

$connection = "host=localhost port=5432 dbname=pharmacy user=postgres password=hegde234";

$db = pg_connect($connection);
if(!$db)
 {
 	
 	echo "<script type='text/javascript'>
			                alert('Welcome to Medicio!!!');
			                window.location.href='http://localhost/medicio/index.php'</script>";
			                 

 }


if(isset($_POST['btnsubmit']))
{
		$myusername=$_POST['name2'];
		$mypatientid=$_POST['pid2'];
		$mydisease=$_POST['disease'];
		$mygender=$_POST['gender'];
		$mydoctid=$_POST['doctid'];
		$myphone=$_POST['phno'];
		
		

		$mysubmit=$_POST['btnsubmit'];


		$q = pg_query($db,"SELECT patient_id FROM patient WHERE patient_id='$mypatientid'");
		$row = pg_fetch_array($q); 
		$pid = $row['patient_id'];


		echo "<br>";


			  if ($pid == $mypatientid)
			  {
			      echo "<script type='text/javascript'>
			      alert('User already exists...Please login to continue for next time ')
			      window.location.href='http://localhost/medicio/login.php'
			      </script>";
			      


			      
			 }

			else
			{
			        $query = "INSERT INTO patient (patient_id,patient_name,disease,gender,doct_id,phone_no)
			        VALUES ('$mypatientid','$myusername','$mydisease','$mygender','$mydoctid','$myphone')";
			        
			        
			          echo "<script type='text/javascript'>
			                alert('Registration successful...Welcome to Medicio!!!');
			                window.location.href='http://localhost/medicio/user1.html'

			        </script>";
			        
			        
			        pg_query($db,$query);


			}


}
else if(isset($_POST['btnsubmit1']))
{
	$myusername1=$_POST['name1'];
	$mypatientid1=$_POST['pid1'];
	$mysubmit1=$_POST['btnsubmit1'];


		$q = pg_query($db,"SELECT patient_id FROM patient WHERE patient_id='$mypatientid1'");
		$row = pg_fetch_array($q); 
		$pid = $row['patient_id'];


		echo "<br>";


			  if ($pid == $mypatientid1)
			  {
			      echo "<script type='text/javascript'>
			      alert('Welcome to Medicio!!')
			      window.location.href='http://localhost/medicio/user1.html'
			      </script>";
			      


			      
			 }
			 else
			 {
			 	echo "<script type='text/javascript'>
			      alert('Please Enter valid data')
			      window.location.href='http://localhost/medicio/login.php'
			      </script>";

			  pg_query($db,$query);
			}
  pg_close($db);

}



?>
