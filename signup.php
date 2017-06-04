<html>

<link rel = "stylesheet" href = "style.css" type = "text/css"/>

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
 
        <label for = "first" class = "fname"> </label>
        <input id = "first" name = "first" required = "required" type = "text" 
            placeholder = "First Name"/>

        <label for = "last" class = "lname"> </label>
        <input id = "last" name = "last" required = "required" type = "text" 
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
        
    <a href = 'login.php' class = "log"> L O G I N </a>

</div>
</fieldset>
</div>
</form>
</body>
</center>
</html>