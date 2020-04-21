<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/custom/style.css">
   <link rel="stylesheet" href="css/custom/countdown.css">
   <link rel="stylesheet" href="css/custom/button.css">
   <link rel="stylesheet" href="css/custom/indicator.css">
    <title>Pkn-oes</title>
  </head>
  <body>

    <!-- navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Peperiksaan Atas Talian</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <!--<ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>-->
        <span class="navbar-text ml-auto font-weight-bold">
          Zuraidah Bt Zainal | (AG:194675) 
        </span>
      </div>
    </nav>
  <!-- navbar-->

  <!--table-->
<div class="container">
  <div class="row">
    <table class="table table-bordered table-sm mt-2 table-striped">
    <tbody>
      

      <tr>
        <td class="text-center font-weight-bold" colspan="2">LEMBAGA JURURAWAT KEMENTERIAN KESIHATAN MALAYSIA</td>
        <td class="font-weight-bold">Tarikh :</td>
        <td> 03 Jun 2020</td>
      </tr>

      <tr>
        <td class="text-center font-weight-bold" colspan="2">SINGLE RESPONSE OBJECTIVE QUESTIONS</td>
        <td class="font-weight-bold">Lokasi :</td>
        <td>Pusat Peperiksaan Kolej KKM Muar</td>
      </tr>

      <tr>
        <td class="font-weight-bold">Jumlah soalan :</td>
        <td>30</td>
        <td class="font-weight-bold">Masa :</td>
        <td>2 Jam 30 Minit</td>
        
      </tr>

    </tbody>
  </table>
</div>
</div>
  <!--table-->

<?php
//including the database connection file
include("countdowntimer.php");
?>
  <!-- indication form -->
  <div class="container">
      <div class="row no-gutters ">
        <div class=" col-sm-8 bg-transparent text-center ">
          <button type="button" class="btn btn-default btn-circle btn-group btn-xl"><br><br><br><br>
            semasa 
          <button type="button" class="btn btn-default btn-circle btn-group btn-x2"><br><br><br><br>
            telahjawab 
          <!--<button type="button" class="btn btn-default btn-circle btn-group btn-x3"> 
            pending 
          </button>-->
        </div>

        <div class="col-sm-4"> 
          <div class="countdown" id="demo">
            <div class="square ">
              <div class="digits" id="hour"></div>
              <div class="text">Jam</div> 
            </div>
            <div class="square">
              <div class="digits" id="minute"></div>
              <div class="text">Minit</div>
            </div>
            <div class="square">
              <div class="digits" id="second"></div>
              <div class="text">Saat</div>
            </div>
          </div>
          </div> 
        </div>
      </div>
    </table>
  <!-- end indication form -->

  <div class="container">
    <div class="row no-gutters ">
      <div class=" col-sm-8 ">
           <!--question -->
  <div class="container">
    <div class="row">
      <div class="card border-info mb-3 mt-4" style="width: 50rem; height: 20rem;">
        <div class="card-header bg-transparent border-info">
          1. Sel darah merah boleh diketegorikan sebagai _________. <!-- question-->
        </div>
        <div class="card-body text-dark">
          <p class="card-text">
            <table class="table table-borderless ">
              <table class="table table-sm table-borderless">
                
                <tbody> <!--answer-->
                  <tr>
                    <td><div class="custom-control custom-radio">
                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" onclick="handleClick(this);">
                      <label class="custom-control-label" for="customRadio1">sel sais</label>
                    </div>
                  </td>       
                  </tr>
                  <tr>
                    <td>
                      <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">jumlah sel</label>
                    </div>
                  </td>                 
                  </tr>
                  <tr>
                    <td>
                      <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">berat sel</label>
                      </div>
                     </td>                    
                  </tr>
                  <tr>
                    <td >
                      <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio4">komponen sel</label>
                      </div>
                    </td>                 
                  </tr>
                  <tr>
                    <td>
                      <div class=" modal-footer justify-content-end w-100">
                        
                        <button type="button" class="btn btn-outline-primary "onclick="window.location.href='QE2.php';">NEXT</button>
                      </div>                    
                    </td>
                  </tr>               
                </tbody>
              </table>             
            </table>
          </p>
        </div>
        
      </div>
    </div>
</div>
</div>
<!--end question -->
        
      <!------ test button  -->
      <div class="col-sm-4"> 
        <table class=" testtable mt-4 table-bordereless ">
            <tbody>
              <tr>
                <th scope="row"><a href="QE1.php" class="round-button border-info">1</a></th>
                <td><a href="QE2.php" class="round-button border-info">2</a></td>
                <td><a href="QE3.php" class="round-button border-info">3</a></td>
                <td><a href="QE4.php" class="round-button border-info">4</a></td>
                <td><a href="QE5.php" class="round-button border-info">5</a></td>
              </tr>
              <tr>
                <th scope="row"><a href="QE6.php" class="round-button border-info">6</a></th>
                <td><a href="QE7.php" class="round-button border-info">7</a></td>
                <td><a href="QE8.php" class="round-button border-info">8</a></td>
                <td><a href="QE9.php" class="round-button border-info">9</a></td>
                <td><a href="QE10.php" class="round-button border-info">10</a></td>
              </tr>

              <tr>
                <th scope="row"><a href="QE11.php" class="round-button border-info">11</a></th>
                <td><a href="QE12.php" class="round-button border-info">12</a></td>
                <td><a href="QE13.php" class="round-button border-info">13</a></td>
                <td><a href="QE14.php" class="round-button border-info">14</a></td>
                <td><a href="QE15.php" class="round-button border-info">15</a></td>
              </tr>

              <tr>
                <th scope="row"><a href="QE16.php" class="round-button border-info">16</a></th>
                <td><a href="QE17.php" class="round-button border-info">17</a></td>
                <td><a href="QE18.php" class="round-button border-info">18</a></td>
                <td><a href="QE19.php" class="round-button border-info">19</a></td>
                <td><a href="QE20.php" class="round-button border-info">20</a></td>
              </tr>

              <tr>
                <th scope="row"><a href="QE21.php" class="round-button border-info">21</a></th>
                <td><a href="QE22.php" class="round-button border-info">22</a></td>
                <td><a href="QE23.php" class="round-button border-info">23</a></td>
                <td><a href="QE24.php" class="round-button border-info">24</a></td>
                <td><a href="QE25.php" class="round-button border-info">25</a></td>
              </tr>

              <tr>
                <th scope="row"><a href="QE26.php" class="round-button border-info">26</a></th>
                <td><a href="QE27.php" class="round-button border-info">27</a></td>
                <td><a href="QE28.php" class="round-button border-info">28</a></td>
                <td><a href="QE29.php" class="round-button border-info">29</a></td>
                <td><a href="QE30.php" class="round-button border-info">30</a></td>
              </tr>

            </tbody>
          </table>
      </div> 
      </div>
    </div>  
    
  <!------ end test button  -->



    <!-- Optional JavaScript -->
   
     <!-- Optional JavaScript -->
     <script>
var countDownDate = <?php 
echo strtotime("$date $h:$m:$s" ) ?> * 1000;
var now = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x = setInterval(function() {
now = now + 1000;
// Find the distance between now an the count down date
var distance = countDownDate - now;
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
// Output the result in an element with id="demo"
//document.getElementById("day").innerHTML = days ;
document.getElementById("hour").innerHTML = hours ;
document.getElementById("minute").innerHTML = minutes ;
document.getElementById("second").innerHTML = seconds ;

// If the count down is over, write some text 
if (distance < 0) {
clearInterval(x);
 document.getElementById("demo").innerHTML = "FINISH";
}
    
}, 1000);
    </script>

<script>
    $(document).ready(function(){
      if(localStorage.selected) {
        $('#' + localStorage.selected ).attr('checked', true);
      }
      $('.inputabs').click(function(){
        localStorage.setItem("selected", this.id);
      });
    });

</script>
   

    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.4.1.slim.min.js" ></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/3-countdown-hr.js"></script>
  </body>
</html>