<?php
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM register where email='$_post=["email"]'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else(isset($_POST['save']))
{
    $query="INSERT INTO register(first_name, last_name, email, mdp) VALUES ('$_post=["nom"];', '$_post=["prenom"];', '$_post=["email"];', 'md5($_post=["mdp"];)')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    header ("Location: id.php?status=success");

}

    else 
    {
		echo "Error.Please try again";
	}


?>