<?php
    $name= $_POST['name'];
	if($name==null){
		header('location:8A.php?msg=errorinput');
	}
	if(strlen($name)<2 && strlen($name)>0){
		header('location:8A.php?msg=nameerrorinput');
	}
	if($name>='a' && $name<='z' || $name>='A' && $name<='Z'){
		echo $name;
	}elseif($name!=null){
		header('location:8A.php?msg=errorinput');
    }
    
    $email= $_POST['email'];
	if($email==null){
		header('location:8A.php?msg=errorinput');
	}
	else{
		echo $_POST['email'];
    }
    
    if(!isset($_REQUEST['gender'])){
		header('location:8A.php?msg=errorinput');
	}

	if($_REQUEST['gender']=="Male"){
		echo $_REQUEST['gender'];
	}

	if($_REQUEST['gender']=="Female"){
		echo $_REQUEST['gender'];
	}

	if($_REQUEST['gender']=="Other"){
		echo $_REQUEST['gender'];
    }
    
    $dd=$_POST['dd'];
	$mm=$_POST['mm'];
	$yy=$_POST['yy'];

	if($dd>31 || $dd<1){
		header('location:8A.php?msg=errorinput');
	}
	else{
		echo $dd;
	}

	echo "/";

	if($mm>12 || $mm<1){
		header('location:8A.php?msg=errorinput');
	}
	else{
		echo $mm;
	}

	echo "/";

	if($yy>=1900 && $yy<=2016){
		echo $yy;
	}
	else{
		header('location:8A.php?msg=errorinput');
    }
    
    if(!isset($_POST['Degree'])){
		header('location:8A.php?msg=errorinput');
	}

	else{
		echo $_POST['Degree'];
    }
    
    if($_POST['Blood_group']=="none"){
		header('location:8A.php?msg=errorinput');
	}
	else{
		echo $_POST['Blood_group'];
	}

    if($_POST['user-ID']==null){
        header('location:8A.php?msg=errorinput');
    }

    $user=$_POST['user-ID'];

    if($user>='a' && $user<='z' || $user>='A' && $user<='Z' && $user>=0){
        echo $user;
    }
    else{
        header('location:8A.php?msg=errorinput');
    }

    if(!isset($_POST['img'])){
        header('location:8A.php?msg=errorinput');
    }

?>