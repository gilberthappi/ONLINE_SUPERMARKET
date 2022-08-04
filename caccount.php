<?php
session_start();
include "connextion.php";

if(isset($_POST["submit"])){

 $username=$_POST["username"];
 $password=$_POST["password"];
 $lname=$_POST["lname"];
 $fname=$_POST["fname"];
 $email=$_POST["email"];
$company=$_POST["company"];
//  $subject=$_POST["subject"];
//  $message=$_POST["message"];
 $phone=$_POST["phone"];
 $district=$_POST["district"]; 
 $sector=$_POST["sector"];
 $nationality=$_POST["nationality"];
 $birth=$_POST["birth"];
 $payment=$_POST["payment"];
 $father=$_POST["father"];
 $mother=$_POST["mother"];
 $province=$_POST["province"];
 $city=$_POST["city"];
 

 $query="INSERT INTO customer(cusername,cpassword,ccity,cmother,cfather,cpayment,csector,clname,cfname,ccompany,cdistrict,cbirth,cnationality,cprovince,cemail) 
                       VALUES('$username','$password','$city','$mother','$father','$payment','$sector','$lname','$fname','$company','$district','$birth','$nationality','$province','$email')";
    $result=mysqli_query($con,$query);
}
?>





<!DOCTYPE html>
<html>
<head>
  <title> Create Account</title>
<link rel=" stylesheet" href="./Account.CSS">
</head>

<body style="background-color:rgba(221, 214, 214, 0.205);">
  <header style = "height: 50px; width: 100%; background-color: rgb(5, 5, 5);" >
    <h1 style=" color: rgb(68, 255, 21); text-align: left; padding-top: 25px; font-size: 30px;" ></h1>
  </header>

  <section id="contact-page">
        <div class="container">
            <div class="center">        
            <h2> <font color= red>CREATE NEW ACCOUNT</font></h2>
            </div> 

            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
               
                    <div class="col-sm-5 col-sm-offset-1">
                    <form  action="caccount.php" id="main-contact-form" class="contact-form"  method="post" >
                           
                           <div class="form-group">
                            <label>First Name *</label>
                            <input type="text" name="fname" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                        <label>last Name *</label>
                            <input type="text" name="lname" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div> 

                        <div class="form-group">
                        <label>USERNAME *</label>
                            <input type="text" name="username" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                            <label>PASSWORD *</label>
                            <input type="text" name="password" class="form-control" required="required">
                        </div>
                    
                           <div class="form-group">
                            <label>Birth Date *</label>
                            <input type="date" name="birth"  id="date" size="15"  class="form-control" required="required">
                          </div>

                          <div class="form-group">
                            <label>Father name *</label>
                            <input type="text" name="father" class="form-control" required="required">
                        </div> 

                        <div class="form-group">
                            <label>Mother name *</label>
                            <input type="text" name="mother" class="form-control" required="required">
                        </div>


                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="number" name="phone" class="form-control" required="required">
                        </div>
                        
                       <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company" class="form-control">
                        </div>         

                        
   <label for="payment">PAYMENT MODE:</label>
  <select name="payment" name="payment" id="Payments">
    <option value="e-wallet">E-wallet</option>
    <option value="mobile money"> Mobile Money</option>
    <option value="cash"> Cash </option>
    <option value="credit card"> Credit card</option>
          </option>
        </select>

        
  <br><label for="provinces">PROVINCE:</label>
  <select name="province" id="provinces">
    <option value="Kigali city">Kigali city</option>
    <option value="Eastern province">Eastern province</option>
    <option value="Southern province">Southern province</option>
    <option value="Northern province">Northern province</option>
    <option value="Western province">Western province</option>
  </select> 


  <br><label for="city">CITY:</label>
  <select name="city" id="cities">
    <option value="Kigali city">Kigali city</option>
    <option value="Byumba">Byumba</option>
    <option value="Gisenyi">Gisenyi</option>
    <option value="Ruhengeri">Ruhengeri</option>
    <option value="Gitarama">Gitarama</option>
  </select>


 
  <br><label for="district">DISTRICT:</label>
  <select name="district" id="districts">
    <option value="Rubavu">Rubavu</option>
    <option value="Kicukiro">Kicukiro</option>
    <option value="Musanze">Musanze</option>
    <option value="Huye">Huye</option>
    <option value="kayonza">Kayonza</option>
  </select> 

                        
  <br> <label for="sector">SECTOR:</label>
  <select name="sector" id="sectors">
    <option value="Kivumu">Kivumu</option>
    <option value="Mahoko">Mahoko</option>
    <option value="Nyundo">Nyundo</option>
    <option value="Rugerero">Rugerero</option>
    <option value="kanembwe">Kanembwe</option>
  </select>  


                       
  <br><label for="nationality">NATIONALITY:</label>
  <select name="nationality" id="nationality">
    <option value="Rwanda">Rwanda</option>
    <option value="Uganda">Uganda</option>
    <option value="D.R.C">D.R.C</option>
    <option value="Burundi">Burundi</option>
    <option value="Tanzania">Tanzania</option>
  </select>  

                        <div class="form-group">
                            <input type="submit" name="submit" value="REGISTER" class="btn btn-primary btn-lg" required="required">
                        </div>
                        </form> 
                        </div>
                
                </div>
            </div>
            </div>
        </section>

                        <button onclick="myFunction()">Save</button
                        
                          <p><a href="customer.php">Back</a></p>
                       
                          <p id="demo"></p>

 <script>
 function myFunction() {
   document.getElementById("demo").innerHTML = "saved";
 }

 


 


 </script>
 </body>
 </html>