<?php


include("db.php");

if(isset($_POST["login"]))
{
	      		$username=$_POST['username'];
			    $password=$_POST['password'];

	if(empty($_POST['username'])|| empty($_POST['password']))
	{
		$message='<label> All fields are required</label>';
	}
	else
	{
		$check=$con->prepare("select *from admin where email='$username' and password='$password'");
		$check->setFetchMode(PDO:: FETCH_ASSOC);
		$check->execute();
		$count=$check->rowCount();
		$row=$check->fetch();
		if($count > 0)
		{
			session_start();
			$_SESSION['username']=$row['name'];
			$_SESSION['admin_dash']=true;
			header("location:index.php"); 
			
		}
		else
		{
			echo"Wrong Information";
		}
	}
}
?>