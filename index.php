<html>
<head>
    <link rel="stylesheet" href="css_style.css">
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

            

        </div> 
        <div class="content">
            <h1>Web Design & <br><span>Development</span> <br>Course</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
                 expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
                <br> a quae totam ipsa illum minus laudantium?</p>


				<div class="form">
					<form action = "index1.php" method="post">
						<label>City:</label>
						<input type="text" name="city" id="city">
						<label>Standard:</label>
						<input oninput="streamcheck()" type="text" name="standard" id="standard"><br>
						<div id="p1"></div>
						<input type="submit" value="Search" name="submitbutton">
					</form>
		
		 <div class="icons">
                        
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

<script>	
function streamcheck(){
	var x= document.getElementById("standard").value;
	if (x>=11){
			document.getElementById("p1").innerHTML='<label>stream:</label><br><input type="text" name="stream" id="stream"><br>';
		}
	else{
			document.getElementById("p1").innerHTML ='<input type="hidden" value ="no" name="stream" id="stream"><br>';
		}
	return false;
}
</script>