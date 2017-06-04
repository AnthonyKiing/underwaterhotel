<html>

<head>

<link rel = "stylesheet" type = "text/css" href = "booking-style.css">

<title> Book Now </title>

</head>


<!---------------------------------------------------------------------->
<!--Les Sunken Suite-->
<?php

    session_start();
    $database = mysqli_connect("127.0.0.1","root","","customers");

    if(isset($_POST['booked1'])) {

        $checkin = ($_POST['checkin']);
        $checkout = ($_POST['checkout']);
        $guest = ($_POST['guest']);
        $room = ($_POST['room']);
        $typeroom = ($_POST['typeroom']);
        $roomprice = ($_POST['roomprice']);

        $sql = "INSERT INTO bookdata (checkin, checkout, guest, room, typeroom, roomprice)
            VALUES ('$checkin','$checkout','$guest','$room','Les Sunken Suite','15000')";

        $result = mysqli_query($database,$sql);
        $_SESSION['checkmessage'] = '';
        header("Location: ../check.php");
}

?>

<!---------------------------------------------------------------------->
<!--Submerged Suite-->
<?php

    $database = mysqli_connect("127.0.0.1","root","","customers");

    if(isset($_POST['booked2'])) {

        $checkin = ($_POST['checkin']);
        $checkout = ($_POST['checkout']);
        $guest = ($_POST['guest']);
        $room = ($_POST['room']);
        $typeroom = ($_POST['typeroom']);
        $roomprice = ($_POST['roomprice']);

        $sql = "INSERT INTO bookdata (checkin, checkout, guest, room, typeroom, roomprice)
            VALUES ('$checkin','$checkout','$guest','$room','Submerged Suite','25000')";

        $result = mysqli_query($database,$sql);
        $_SESSION['checkmessage'] = '';
        header("Location: ../check.php");
}

?>

<!---------------------------------------------------------------------->
<!--Aquatic Suite-->
<?php

    $database = mysqli_connect("127.0.0.1","root","","customers");

    if(isset($_POST['booked3'])) {

        $checkin = ($_POST['checkin']);
        $checkout = ($_POST['checkout']);
        $guest = ($_POST['guest']);
        $room = ($_POST['room']);
        $typeroom = ($_POST['typeroom']);
        $roomprice = ($_POST['roomprice']);

        $sql = "INSERT INTO bookdata (checkin, checkout, guest, room, typeroom, roomprice)
            VALUES ('$checkin','$checkout','$guest','$room','Aquatic Suite','40000')";

        $result = mysqli_query($database,$sql);
        $_SESSION['checkmessage'] = '';
        header("Location: ../check.php");
}

?>

<!---------------------------------------------------------------------->
<!--Grand Sunken Suite-->
<?php

    $database = mysqli_connect("127.0.0.1","root","","customers");

    if(isset($_POST['booked4'])) {

        $checkin = ($_POST['checkin']);
        $checkout = ($_POST['checkout']);
        $guest = ($_POST['guest']);
        $room = ($_POST['room']);
        $typeroom = ($_POST['typeroom']);
        $roomprice = ($_POST['roomprice']);

        $sql = "INSERT INTO bookdata (checkin, checkout, guest, room, typeroom, roomprice)
            VALUES ('$checkin','$checkout','$guest','$room','Grand Sunkin Suite','55000')";

        $result = mysqli_query($database,$sql);
        $_SESSION['checkmessage'] = '';
        header("Location: ../check.php");
}

?>

<!---------------------------------------------------------------------->
<!--The Royal Bridge Suite-->
<?php

    $database = mysqli_connect("127.0.0.1","root","","customers");

    if(isset($_POST['booked5'])) {

        $checkin = ($_POST['checkin']);
        $checkout = ($_POST['checkout']);
        $guest = ($_POST['guest']);
        $room = ($_POST['room']);
        $typeroom = ($_POST['typeroom']);
        $roomprice = ($_POST['roomprice']);

        $sql = "INSERT INTO bookdata (checkin, checkout, guest, room, typeroom, roomprice)
            VALUES ('$checkin','$checkout','$guest','$room','The Royal Bridge Suite','70000')";

        $result = mysqli_query($database,$sql);
        $_SESSION['checkmessage'] = '';
        header("Location: ../check.php");
}

?>

<!---------------------------------------------------------------------->
<!--Presidential Suite-->
<?php

    $database = mysqli_connect("127.0.0.1","root","","customers");

    if(isset($_POST['booked6'])) {

        $checkin = ($_POST['checkin']);
        $checkout = ($_POST['checkout']);
        $guest = ($_POST['guest']);
        $room = ($_POST['room']);
        $typeroom = ($_POST['typeroom']);
        $roomprice = ($_POST['roomprice']);

        $sql = "INSERT INTO bookdata (checkin, checkout, guest, room, typeroom, roomprice)
            VALUES ('$checkin','$checkout','$guest','$room','Presidential Suite','85000')";

        $result = mysqli_query($database,$sql);
        $_SESSION['checkmessage'] = '';
        header("Location: ../check.php");
}

?>

<!---------------------------------------------------------------------->

<?php

    $database = mysqli_connect("127.0.0.1","root","","customers");

    if(isset($_POST['checkavail'])) {

        $sql = "SELECT * FROM bookdata";

        $result = mysqli_query($database,$sql);

        if(mysqli_num_rows($result) == 1){ 

        $_SESSION['alertmessage'] = "Already Booked";

}
else{

    header("location: ../check.php");

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
            <a href = "logged-home.php" > HOME </a>
            </li>
            <li class = "row1">
            <a href = "logged-rooms.php" > ROOMS </a>
            </li>
            <li class = "row1">
            <a href = "logged-gallery.php" > GALLERY </a>
            </li>
            <li class = "row1">
            <a href = "logged-booking.php"> BOOKING </a>
            </li>
            <li class = "row1">
            <a href = "logged-events.php"> EVENTS </a>
            </li>
            <li class = "row1">
            <a href = "logged-about.php"> ABOUT </a>

</li>
</ul>
</nav>
</div>
</div>

<br>

<p class = "hr">   </p>

<br>


<!--About-->


<p class = "bookingmsg">

    Book Now</br>

</p>
<p class = "bookline"></p>

    <p class = "bookmsg">

    Reservations will be made through Sunken Haven UnderwaterResort Expeditions.  
    By registering today, you will ensure that you have the opportunity to 
    make a reservation to become one of the people to experience 
    a vacation in an underwater resort.
    <br><br>
    Select from the options below to book and customise your stay at Sunkin Haven.

</p>

 <form name = "check" method = "POST" 
    enctype = "multipart/form-data" autocomplete = "off"> 

<p class = "choosebooking"> </p>

    <b>

        <p class = "checkrooms">

        <label for = "checkin" class = "chin"> Check In 
        <input id = "checkin" name = "checkin" required = "required" type = "date"/>
</label>

        <label for = "checkout" class = "chout"> Check Out 
        <input id = "checkout" name = "checkout" required = "required" type = "date"/>
</label>

        <label for = "guest" class = "totguest"> No. of Guests 
        <input id = "guest" name = "guest" required = "required" list = "guests"/>

        <datalist id = "guests">

            <option> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
            <option> 6 </option>
            <option> 7 </option>
            <option> 8 </option>

</datalist>
</label>

        <label for = "rooms" class = "roomsno"> No. of Rooms
        <input id = "rooms" name = "room" required = "required" list = "norooms"/>

        <datalist id = "norooms">

            <option> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
            <option> 6 </option>

</datalist>
</label>
</p>

</b>


    <input type = "submit" class = "checkavailability" value = "CHECK AVAILABILITY" 
                name = "checkavail">

<body>

<div class = "holdrooms">

<p class = "lss"> 

    <p class = "lssroom"> <b> Les Sunken Suite </b> </p>

</p> 

<div class = "lesss">

    <img src = "pics/regular.jpg"> 

</div>

    <p class = "line"></p>

        <p class = "avail"></p>   
 
            <div class = "booknow"> 

                <input type = "submit" class = "book" value = "Book Now" 
                name = "booked1">

</form>

</div>  
       
<p class = "ss"> 

    <p class = "ssroom"> <b> Submerged Suite </b> </p>

</p> 

<div class = "subs">

    <img src = "pics/deluxe.jpg"> 

</div>

    <p class = "line"></p>

        <p class = "avail"></p>   

                <input type = "submit" class = "book" value = "Book Now" 
                name = "booked2">

<p class = "as"> 

    <p class = "asroom"> <b> Aquatic Suite </b> </p>

</p> 

<div class = "aquas">

    <img src = "pics/special.jpg"> 

</div>

    <p class = "line"></p>

        <p class = "avail"></p>   

                <input type = "submit" class = "book" value = "Book Now" 
                name = "booked3">

<p class = "gss"> 

    <p class = "gssroom"> <b> Grand Sunken Suite </b> </p>

</p>

<div class = "grandss">

        <img src = "pics/gs1.jpg"> 

</div>

    <p class = "line"></p>

        <p class = "avail"></p>   

                <input type = "submit" class = "book" value = "Book Now" 
                name = "booked4">  

<p class = "trbs"> 

    <p class = "trbsroom"> <b> The Royal Bridge Suite </b> </p>

</p> 

<div class = "therbs">

    <img src = "pics/rs1.jpg"> 

</div>

    <p class = "line"></p>

        <p class = "avail"></p>   

                <input type = "submit" class = "book" value = "Book Now" 
                name = "booked5">

<p class = "ps"> 

    <p class = "psroom"> <b> Presidential Suite </b> </p>

</p>

<div class = "press">

    <img src = "pics/ps1.jpg"> 

</div>

    <p class = "line"></p>

        <p class = "avail"></p>   

                <input type = "submit" class = "book" value = "Book Now" 
                name = "booked6">

</p>
</p>

</div>

</body>

  <?php
if(isset($_SESSION['alertmessage']))
{
    echo"<div class = 'error'>".$_SESSION['alertmessage']."</div>";
    unset($_SESSION['alertmessage']);
}
?>

</body>

<div class = "foot">

<div class = "foo">

&copy; 2017 Anthony & Tin. All Rights Reserved | Sunken Haven by
<div class = "jeotin"> AnthonyTin </div>

</div>

</div>

</center>

<a href = "#all"> <div class = "btp"> ^ </div> </a>

</html>