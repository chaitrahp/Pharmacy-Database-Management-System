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
		$myusername=$_POST['drugname'];
		$mydrugid=$_POST['drugid'];
		
		$myprice=$_POST['price'];
		
		$mytype=$_POST['type'];

		

		$mysubmit=$_POST['update'];


		$q = pg_query($db,"SELECT scientist_id FROM scientist WHERE scientist_id='$mydrugid'");
		$row = pg_fetch_array($q); 
		$did = $row['scientist_id'];


		echo "<br>";


			  if ($did == $mydrugid)
			  {
			      echo "<script type='text/javascript'>
			      alert('Scientist ID already exists...Please Check Once ')
			      window.location.href='http://localhost/medicio/admin_update/update1.php'
			      </script>";
			      


			      
			 }


			else
			{
				
			        $query = "INSERT INTO scientist (scientist_id,name,type,lab)
			        VALUES ('$mydrugid','$myusername','$mytype','$myprice')";
			        
			        
			          echo "<script type='text/javascript'>
			                alert('Updated successfully.');
			                window.location.href='http://localhost/medicio/thuglife.html'

			        </script>";
			        
			        
			       


			}
			 pg_query($db,$query);


}

  pg_close($db);





?>
