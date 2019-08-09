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
		$myusername=$_POST['inspname'];
		$mydrugid=$_POST['inspid'];
		
		$myprice=$_POST['salary'];
		
		
		
		$myphone=$_POST['phone'];




		

		$mysubmit=$_POST['update'];


		$q = pg_query($db,"SELECT insp_id FROM drug_insp WHERE insp_id='$mydrugid'");
		$row = pg_fetch_array($q); 
		$did = $row['insp_id'];


		echo "<br>";


			  if ($did == $mydrugid)
			  {
			      echo "<script type='text/javascript'>
			      alert('Inspector ID already exists...Please Check Once ')
			      window.location.href='http://localhost/medicio/admin_update/update4.php'
			      </script>";
			      


			      
			 }


			else
			{
				
			        $query = "INSERT INTO drug_insp (insp_id,insp_name,salary,phone_no)
			        VALUES ('$mydrugid','$myusername','$myprice','$myphone')";
			        
			        
			        /*echo "<script type='text/javascript'>
			                alert('Updated successfully.');
			                window.location.href='http://localhost/medicio/thuglife.html'

			        </script>";*/
			       
			        
			       


			}
			 pg_query($db,$query);


}

  pg_close($db);





?>
