<?php

session_start();
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
		$check=$con->prepare("select *from student where email='$username' and password='$password'");
		$check->setFetchMode(PDO:: FETCH_ASSOC);
		$check->execute();
		$count=$check->rowCount();
		$row=$check->fetch();
		if($count > 0)
		{
			$_SESSION['username']=$row['name'];
			$_SESSION['student_dash']=true;
			header("location:index.php"); 
			
		}
		else
		{
	          echo"<script>alert(' Worn Information')</script>";
		   echo"<script>window.open('index.php','_self')</script>";
		}
	}
}

else{
if(isset($_POST['Register']))
		{
			$name=$_POST['name'];
			$phone=$_POST['mobile'];
			$email=$_POST['email'];
			$password=$_POST['password'];

		$check=$con->prepare("select * from student where email='$email'");
		$check->setFetchMode(PDO:: FETCH_ASSOC);
		$check->execute();
		$count=$check->rowCount();
	

		if($count==1)
		{
           echo"<script>alert(' Already ragistered')</script>";
		   echo"<script>window.open('index.php','_self')</script>";
		}


		$query=$con->prepare("insert into student(name,email,password,mobile)values('$name','$email','$password','$phone')");
		if($query->execute())
		{
			echo"<script>alert('ragistration successfully')</script>";
			echo"<script>window.open('index.php','_self')</script>";
		}else{
			echo"<script>alert('Registration not  successfully')</script>";
			
		}

		}
}
?>