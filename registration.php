
<?php require('group.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration-css.css">
</head>
<body>
    <?php 
    if(isset(_$POST['create'])){

        $days = $_POST['days'];
        $event = $_POST['event'];
        $ekip = $_POST['equipement'];
        $event = $_POST['event'];
        $event = $_POST['event'];




    }
    
    
    
    ?>
    <nav>    
        
        
        <label class="logo">InterContenental Sunny plaza</label>
        <ul>
            <li><a class="active" href="user-html.html">Home</a></li>
            <li><a href="feedback-html.html">Feedback</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Login</a></li>
        </ul>
        </nav>
    
<!-------------------------------------------registration form------------------------------------------->
    <section class="banner">
        <h2>BOOK YOUR TABLE NOW</h2>
        <div class="container">
            <div class="card-img">

            </div>
            <div class="card-content">
                <h3>Reservation</h3>
                <form>
                    <div class="form-row">
                        <select name="days">
                            <option value="day-select">Select place</option>
                            <option value="Sunday">National theatre</option>
                            <option value="Sunday">Movenpick</option>
                            <option value="Sunday">British Council</option>
                            <option value="Sunday">Ispace</option>
                            <option value="Sunday">Mac Dic Royal Plaza Hotel</option>
                            <option value="Sunday">Kempinski Hotel Gold Coast City</option>
                            <option value="Sunday">La Palm Royal Beach Hotel</option>
                            <option value="Sunday">Others</option>
                        </select>
                        <select name="Hours">
                            <option value="select Hours">Select Hours</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>

                        </select>
                        <select name="Event">
                        <option value="type">Select Event Type</option>
                        <option value="type">Marriage</option>
                        <option value="type">Birthday Party</option>
                        <option value="type">Networking Sessions</option>
                        <option value="type">Anniversary Party</option>
                        <option value="type">Sponsorships</option>
                        <option value="type">Family Party</option>
                        <option value="type">Conference</option>
                        <option value="type">Farewell Party</option>
                        <option value="type">College Events</option>

                        </select>
                    </div>
                    <div class="form-row">
                        <input type="text" placeholder="Booking Id">
                        <input type="text" placeholder="Phone Number">
                        <input type="text" placeholder="Company Name">
                    </div>
                    <div class="form-row">
                        <input type="date" value="date">
        
                        <select name="How Many Persons">
                        <option value="type">How Many Persons</option>
                        <option value="type">Less than 100</option>
                        <option value="type">Less than 200</option>
                        <option value="type">Less than 300</option>
                        <option value="type">300 or more</option>
                        <option value="type">500 and over</option>
                        </select>



                        <select name="equipment">
                        <option value="type">Select Equipment</option>
                        <option value="type">DJ</option>
                        <option value="type">Stage</option>
                        <option value="type">Mics & Speaker</option>
                        <option value="type">Mics</option>
                        <option value="type">Speaker</option>
                        


                        </select>

                    </div>
                    <div class="form-row">
                       <input type="submit" name='create' value="BOOK TABLE">
                    </div>

                </form>
            </div>
        </div>
    </section>

<!-----------------------------------------------------footer------------------------------------------>
    <footer class="footer">
        <div class="container2">
          <div class="row">
            <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Booking</a></li>
              <li><a href="#">return status</a></li>
              <li><a href="#">booking status</a></li>
              <li><a href="#">payment  options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>online Booking</h4>
            <ul>
              <li><a href="#">reservations</a></li>
              <li><a href="#">gathering</a></li>
              <li><a href="#">performance</a></li>
              <li><a href="#">business meetings</a></li>
            </ul>
          </div>
          <div class="footer-col" >
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"></a>
            </div>
    
          </div>
          
          
        </div>
        </div>
        
      </footer>
      

</body>
</html>