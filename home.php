<html>

<header>

<link rel = "stylesheet" type = "text/css" href = "style.css">

<title> Welcome </title>

</header>
<!---------------------------------------------------------------------->
<!--Signup-->

<?php
  session_start();
  $database = mysqli_connect("127.0.0.1","root","","customers");

if(isset($_POST['getstarted'])){

  $lname = ($_POST['last']);
  $fname = ($_POST['first']);
  $email = ($_POST['email']);
  $pass = ($_POST['password']);
  $confirmpass = ($_POST['confirm']);
  $phonenum = ($_POST['phonenum']);

  if($pass == $confirmpass){
        $pass = md5($pass);
        $confirmpass = md5($confirmpass);
        

    $sql = "INSERT INTO userdata (last , first , email, password, phonenum)
            VALUES ('$lname','$fname','$email','$pass','$phonenum')";

    $result = mysqli_query($database,$sql);
    $_SESSION['signmessage'] = '';
    header("Location: #popuplogin");

  }
  else{

    $_SESSION['signmessage'] = "Invalid Password Dont Match";

  }
}

?>


<!---------------------------------------------------------------------->
<!--Login-->


<?php

$database = mysqli_connect("127.0.0.1", "root","","customers");

 if(isset($_POST['golog'])){
     $email = $_POST['emaillog'];
     $pass = $_POST['passlog'];
     $pass = md5($pass);

     $sql = "SELECT * FROM userdata WHERE email = '$email' AND password = '$pass'";
      
     $result = mysqli_query($database,$sql);

      if(mysqli_num_rows($result) == 1){ 
          $_SESSION['first'] = $fname;
          header("location: logged/logged-home.php");

     }
     else{

         $_SESSION['logmessage'] = "Email or Password is Incorrect";

     }
 }
 
?>


<!---------------------------------------------------------------------->
<!--Admin-->


<?php

$database = mysqli_connect("127.0.0.1", "root","","customers");

 if(isset($_POST['goad'])){
     $userad = $_POST['aduser'];
     $passad = $_POST['adpass'];


     $sql = "SELECT * FROM ad WHERE aduser = '$userad' AND adpass = '$passad'";

     $result = mysqli_query($database,$sql);

      if(mysqli_num_rows($result) == 1){ 
          $_SESSION['aduser'] = $userad;
          header("location: admin/ad-home.php");

     }
     else{

         $_SESSION['admessage'] = "Email or Password is Incorrect";

     }
 }
 
?>


<!---------------------------------------------------------------------->


<center>

<body id = "all">

    <div class = "header">

        <div id = "header1">

            <nav>

                <ul>

            <li class = "row1">
            <a href = "home.php" > HOME </a>
            </li>
            <li class = "row1">
            <a href = "rooms.php" > ROOMS </a>
            </li>
            <li class = "row1">
            <a href = "gallery.php" > GALLERY </a>
            </li>
            <li class = "row1">
            <a href = "booking.php"> BOOKING </a>
            </li>
            <li class = "row1">
            <a href = "events.php"> EVENTS </a>
            </li>
            <li class = "row1">
            <a href = "about.php"> ABOUT </a>

</li>
</ul>
</nav>
</div>
</div>

<br>

<p class = "hr">   </p>

<br>

<div class = "box-home">

<a class = "button" href = "#popupsignin" > GET STARTED </a>
        
</div>

   <p class = "enjoy-paradise">

    ENJOY this Breath-Taking Paradise

</p>


<!---------------------------------------------------------------------->
<!---- Sign-up Popup Box ---->


<div id = "popupsignin" class = "overlay">

    <div class = "popupsign">

          <a class = "close" href = "#"> X </a>

              <div class = "content">

<center>

<body id = "reg">

    <form name = "popupsign" method = "POST" 
    enctype = "multipart/form-data" autocomplete = "off"> 

        <fieldset id = "store">

<div id = "sign-log">

<?php
if(isset($_SESSION['signmessage']))
{
    echo"<div class = 'signerror'>".$_SESSION['signmessage']."</div>";
    unset($_SESSION['signmessage']);
}
?>


<p class = "sign"> S I G N U P </a> </p>

</div> 



<br>

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
        <input id = "fill" name = "phonenum" required = "required" type = "tel" 
            placeholder = "Phone Number"/>

</p>
<p>   

         <input type = "submit" class = "subsign" value = "GET STARTED" name = "getstarted">

</p>
<div class = "form">
<div class = "account"> All ready have an account?  
        
    <a href = '#popuplogin' class = "log"> L O G I N </a>

</div>
</div>
</p>
</fieldset>
</form>
</div>
</div>


</body>
</center>

</div>
</div>
</div>


<!---------------------------------------------------------------------->
<!---- Log-in Popup Box ---->



<div id = "popuplogin" class = "overlay">

    <div class = "popuplog">

          <a class = "close" href = "#"> X </a>

              <div class = "content">



<body id = "reg">

<form  name = "popuplog" method = "POST"
                enctype = "multipart/form" autocomplete = "on"> 

    <fieldset id = "store2">

        <div class = "formed">
  
<?php
if(isset($_SESSION['logmessage']))
{
    echo"<div class = 'logerror'>".$_SESSION['logmessage']."</div>";
    unset($_SESSION['logmessage']);
}
?>

            <p class = "loged"> L O G I N </p>

<p> 

        <label for = "email" class = "mail"> </label>
        <input id = "emailedlog" name = "emaillog" required = "required" 
        type = "email" placeholder = "email@mail.com"/> 

</p>
<p> 

        <label for = "password" class = "pass" > </label>
        <input id = "passedlog" name = "passlog" required = "required" 
        type = "password" placeholder = "password"/>

</p>
<p>

        <input type = "submit" class = "sublog" value = "GO!" name = "golog" placeholder = "GO!"/>

</p>

</div>
</center>
</fieldset>
</form>
</div>
</div>
</div>


<!---------------------------------------------------------------------->
<!---- Footer ---->

<hr class = "hrline">

<div class = "homeadmin">

<p class = "theresort"> The Resort </p>

<p class = "msghome">

Providing all the comforts, conveniences and opportunities only a<br>
five-start resort can offer, Sunken Haven is the culmination of every<br>
elite vacationer's vision.

</p>






<div id = "social-media">

       
<footer class = "sm">
        
<ul>

    <li class = "image">

        <a href = "https://www.facebook.com"> <img src = "pics/fb.png"> </a>

</li>
    
    <li class = "image">

        <a href = "https:m.youtube.com" class = "image"> <img src = "pics/you.png"> </a>
    
</li>

    <li class = "image">

        <a href = "https://twitter.com" class = "image"> <img src = "pics/twi.png"> </a>
    
</li>

    <li class = "image">

        <a href = "https://www.instagram.com" class = "image"> <img src = "pics/ins.png"> </a>


</li>
</div>
</ul>
  

<!---------------------------------------------------------------------->
<!----Admin---->

<div class = "admin">

<a class = "buttonad" href = "#popupadmin"><u> Admin </u></a>

<div id = "popupadmin" class = "overlay">

    <div class = "popupad">

          <a class = "close" href = "#"> X </a>

              <div class = "content">

<center>

<body id = "reg">

  <form name = "popupadmin" method = "POST"
  enctype = "multipart/form" autocomplete = "off"> 

    <fieldset id = "store3">

        <div class = "formed">
  
<?php
if(isset($_SESSION['admessage']))
{
    echo"<div class = 'aderror'>".$_SESSION['admessage']."</div>";
    unset($_SESSION['admessage']);
}
?>

            <p class = "adminloged"> A D M I N </p>

<p> 

        <label for = "usernamead" class = "usernameadmin"> </label>
        <input id = "usernameadmin" name = "aduser" required = "required" 
        type = "text" placeholder = "username"/> 

</p>
<p> 
        <label for = "password" class = "passwordadmin" > </label>
        <input id = "passwordadmin" name = "adpass" required = "required" 
        type = "password" placeholder = "password"/>
</p>
  
<p>

        <input type = "submit" class = "subadmin" value = "GO!" name = "goad" placeholder = "GO!"/>

</p>
</div>
</div>
</fieldset>
</form>
</body>
</center>
</div>
</center>
</fieldset>
</div>

</div>
</div>
</div>
</div>        
</div>
</div>
</body>

<div class = "foot">

<div class = "foo">

&copy; 2017 Anthony & Tin. All Rights Reserved | Sunken Haven by
<div class = "jeotin"> AnthonyTin </div>

</div>

</div>

</center>
</html>