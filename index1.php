<?php

echo '
	<html lang="en">
<head>
    <link rel="stylesheet" href="css_style1.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="name">GOING TO SCHOOL</h2>
            </div>

            <div class="menu">
                <button class="btn1 success">HOME</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn1 info">ABOUT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn1 warning">SERVICE</button>

            </div>

';

$city=$_POST['city'];
$standard=$_POST['standard'];
$stream=$_POST['stream'];

if ($city=='Delhi'){
	echo'<center><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d224170.46061386983!2d77.03490519845552!3d28.609871659952926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdelhi%20schools!5e0!3m2!1sen!2sin!4v1645938228581!5m2!1sen!2sin" width="60%" height="450" style="border:0;" allowfullscreen="" loading="lazy" ></iframe></center>';
}
if ($city=='Mumbai'){
	echo'<center><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d241362.8711080276!2d72.66443945678883!3d19.050769206454383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smumbai%20schools!5e0!3m2!1sen!2sin!4v1645934485986!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>';
}
if ($city=='Chennai'){
	echo'<center><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d124389.23645196336!2d80.16952204264243!3d13.025249249718906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1schennai%20schools%20!5e0!3m2!1sen!2sin!4v1645941285697!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>';
}
if ($city=='Kolkata'){
	echo '<center><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58955.79144117061!2d88.34071549186847!3d22.551524009439397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sKolkata%20schools!5e0!3m2!1sen!2sin!4v1645939775952!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>';
}


/*Database connection part*/
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "schoolsearch";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($stream=="no"){
		$sql = "Select school_name,rating,deadline,link,`$standard` from schools where City='$city' AND `$standard`>0 ;";
	}
	else{
		$standard=$standard."-".$stream;
		$sql = "Select school_name,rating,deadline,link,`$standard` from schools where City='$city' AND `$standard`>0;";
	}
	
//	echo $sql;
	
	$result=mysqli_query($conn,$sql);
	$rownum = mysqli_num_rows($result);
	
	
	if ($rownum==0){
		echo '<br><br><br><h1 style="text-align: center; font-size: 50px; color: orange;">No Schools Available</h1>';
	}
	
	else{
		while($row = mysqli_fetch_array($result)){
			echo '<div class="form">';
			echo $row["school_name"];
			echo "<br> ";
			echo $row["rating"];
			echo "<br>";
			echo $row["$standard"];
			echo "<br>";
			echo $row["deadline"];
			echo "<br>";
			$link= '<a href="'.$row['link'].'">'.$row['link'].'</a>';//</td></td> ';
			echo $link;
			echo "<br>";
			//echo '/div> ';
		}

	}
echo '
        </div>
</html>
';
?>