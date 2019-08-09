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
		$myusername=$_POST['aname2'];
		$mypharmaid=$_POST['phid3'];
		$mylocation=$_POST['aloc'];
		$mydate=$_POST['adate'];

		

		$mysubmit=$_POST['btnsubmit'];


		$q = pg_query($db,"SELECT pharma_id FROM pharma WHERE pharma_id='$mypharmaid'");
		$row = pg_fetch_array($q); 
		$pid = $row['pharma_id'];


		echo "<br>";


			  if ($pid == $mypharmaid)
			  {
			      echo "<script type='text/javascript'>
			      alert('User already exists...Please login to continue for next time ')
			      window.location.href='http://localhost/medicio/admin.php'
			      </script>";
			      


			      
			 }

			else
			{
			        $query = "INSERT INTO pharma (pharma_id,name,location,date)
			        VALUES ('$mypharmaid','$myusername','$mylocation','$mydate')";
			        
			        
			          echo "<script type='text/javascript'>
			                alert('Registration successful...Welcome to Medicio!!!');
			                window.location.href='http://localhost/medicio/thuglife.html'

			        </script>";
			        
			        
			        pg_query($db,$query);


			}


}
else if(isset($_POST['btnsubmit1']))
{
	$myusername1=$_POST['aname1'];
	$mypharmaid1=$_POST['phid1'];
	$mysubmit1=$_POST['btnsubmit1'];


		$q = pg_query($db,"SELECT pharma_id FROM pharma WHERE pharma_id='$mypharmaid1'");
		$row = pg_fetch_array($q); 
		$pid = $row['pharma_id'];


		echo "<br>";


			  if ($pid == $mypharmaid1)
			  {
			      echo "<script type='text/javascript'>
			      alert('Welcome to Medicio!!')
			      window.location.href='http://localhost/medicio/thuglife.html'
			      </script>";
			      


			      
			 }
			 else
			 {
			 	echo "<script type='text/javascript'>
			      alert('Please Enter valid data')
			      window.location.href='http://localhost/medicio/admin.php'
			      </script>";

			  pg_query($db,$query);
			}
  pg_close($db);

}



?>
