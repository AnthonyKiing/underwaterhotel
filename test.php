<html>

<link rel = "stylesheet" type = "text/css" href = "test.css">

<center>

<body id = "all">

    <div class = "header">

		<div class = "header1">

    		<a href = "home.php" class = "row1"> HOME </a>
    		<a href = "rooms.php" class = "row1"> ROOMS </a>
    		<a href = "gallery.php" class = "row1"> GALLERY </a>

</div>

		<div class = "header2">
     
     		<a href = "about.php" class = "row2"> ABOUT </a>
      		<a href = "booking.php" class = "row2"> BOOKING </a>
       		<a href = "events.php" class = "row2"> EVENTS </a>

</div>
</div>

<br>

<p class = "hr">   </p>

<br>

<div class = "box-home">

<a class = "button" href = "#popup1"> GET STARTED </a>
 		
</div>


<!-- Sign-up Popup Box -->


<div id = "popup1" class = "overlay">

	<div class = "popup">

		  <a class = "close" href = "#"> X </a>

		      <div class = "content">

<center>

<body id = "reg">

    <form  action = "get-started.php" method = "POST"> 

        <fieldset id = "store">

<div id = "sign-log">

<p class = "sign"> S I G N U P </a> </p>

</div> 

<br>

<div class = "form">

    <p class = "flname"> 
 <label for = "last" class = "lname"> </label>
        <input id = "last" name = "last" required = "required" type = "text" 
            placeholder = "First Name"/>
        <label for = "first" class = "fname"> </label>
        <input id = "first" name = "first" required = "required" type = "text" 
            placeholder = "Last Name"/>

        

</p>
    <p> 

        <label for = "email" class = "mail"> </label>
        <input id = "fill" name = "email" required = "required" type = "email" 
            placeholder = "email@mail.com"/>
   
    <p> 
        <label for = "password" class = "pass"> </label>
        <input id = "fill" name = "password" required = "required" type = "password"
            placeholder = "Password"/>

</p>
    <p>

        <label for = "confirm" class = "password"> </label>
        <input id = "fill" name = "confirm" required = "required" type = "password"
            placeholder = "Confirm Password"/>

</p>
    <p>

        <label for = "phone" class = "phone"> </label>
        <input id = "fill" name = "confirm" required = "required" type = "tel" 
            placeholder = "Phone Number"/>

</p>

    <p>   

    	 <input type = "submit" class = "sub" value = "GET STARTED">

</p>

<div class = "account"> All ready have an account?  
        
    <a href = '#popup2' class = "log"> L O G I N </a>

</div>
</fieldset>
</div>
</form>
</body>
</center>
</div>
</div>
</div>


<!-- Log-in Popup Box -->


<div id = "popup2" class = "overlay">

    <div class = "popup2">

          <a class = "close" href = "#"> X </a>

              <div class = "content">

<center>

<body id = "reg">
 


<form  action = "log-welcome.php" method = "POST"> 

    <fieldset id = "store2">

        <div class = "formed">
  
            <p class = "loged"> L O G I N </p>

<p> 

        <label for = "email" class = "mail"> </label>
        <input id = "emailed" name = "email" required = "required" 
        type = "email" placeholder = "email@mail.com"/> 

</p>
<p> 
        <label for = "password" class = "pass" > </label>
        <input id = "passed" name = "confirm" required = "required" 
        type = "password" placeholder = "password"/>
</p>
  
<p>
        <input type = "submit"  class = "sub" value = "GO!" 
        placeholder = "GO!">

</p>

</div>
</center>
</fieldset>

</div>
</div>
</div>


<!-- Content -->


<div class = "enjoy-paradise">

 	<p class = "paradise">

 			<span class = "enjoy"> ENJOY </span> this Breath-Taking Paradise

</p>
</div>

<div class = "moretostay">

<p class = "word1"> More To Stay: </p>

<p class = "goldbar1"> </p>


</div>


<!-- Footer -->


<div id = "social-media">

	<div class = "image">

		<a href = "https://www.facebook.com"> <img src = "pics/fb.png"> </a>

</div>
	
	<div class = "image">

		<a href = "https:m.youtube.com" class = "image"> <img src = "pics/you.png"> </a>
	
</div>

	<div class = "image">

		<a href = "https://twitter.com" class = "image"> <img src = "pics/twi.png"> </a>
	
</div>

	<div class = "image">

		<a href = "https://www.instagram.com" class = "image"> <img src = "pics/ins.png"> </a>

</div>
</div>
</body>
</center>
</html>
