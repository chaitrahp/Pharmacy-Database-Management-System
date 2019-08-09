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
		$mymfg=$_POST['mfgdate'];
		$myexp=$_POST['expdate'];
		$mydosage=$_POST['dosage'];
		$myprice=$_POST['price'];
		$mydoct=$_POST['doctid'];
		$mypharma=$_POST['pharmaid'];
		$mycomp=$_POST['compid'];
		$mytype=$_POST['type'];

		

		$mysubmit=$_POST['update'];


		$q = pg_query($db,"SELECT drug_id FROM drug WHERE drug_id='$mydrugid'");
		$row = pg_fetch_array($q); 
		$did = $row['drug_id'];


		echo "<br>";


			  if ($did == $mydrugid)
			  {
			      echo "<script type='text/javascript'>
			      alert('Drug ID already exists...Please Check Once ')
			      window.location.href='http://localhost/medicio/admin_update/update.php'
			      </script>";
			      


			      
			 }


			else
			{
				
			        $query = "INSERT INTO drug (drug_id,drug_name,mfg_date,exp_date,dosage,price,doct_id,pharma_id,comp_id,type)
			        VALUES ('$mydrugid','$myusername','$mymfg','$myexp','$mydosage','$myprice','$mydoct','$mypharma','$mycomp','$mytype')";
			        
			        
			          echo "<script type='text/javascript'>
			                alert('Updated successfully.');
			                window.location.href='http://localhost/medicio/thuglife.html'

			        </script>";
			        
			       


			}
			 pg_query($db,$query);


}

  pg_close($db);





?>
