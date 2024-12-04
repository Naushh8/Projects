<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<style>

    .container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 30px;
        margin-bottom: 50px;
       padding-top: 50px;
      padding-right: 50px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
    .button {
  padding: 15px 32px;
  align-content: left;
  color: white;
background-color:black;
    }
#number {
  overflow: hidden;
  width: 600px;
}
input[type=number]{
    width: 250px;
} 
  </style>


  </script>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            display: inline-block;
            
            text-align: left;
        }
    </style>
  <h1><b><img src="https://img.icons8.com/?size=100&id=114617&format=png&color=000000"/>Flight Ticket Booking &nbsp<img src="https://img.icons8.com/?size=100&id=117004&format=png&color=000000"/></center></b></h1>
 <form method='post' action ='book_action.php'>






<div class="container">
<section id="form" class="formborder">
<div class="container2">
       <form>
        


       <div class="form-row row justify-content-around" name="source">
  &nbsp

       <div class="form-group col-md-5" name="source">
       <div style="text-align: center;">
       <label for="inputEmail4">SOURCE STATION :</label>    
       <select id="inputState" class="form-control" name="source">
       <option>Mumbai</option>
       <option>Pune</option>
       <option>Chennai</option>
       <option>Kolkata</option>
       <option>J&K</option>
       <option>Goa</option>
       <option>Surat</option>
       <option>Karnataka</option>
       <option>Kerala</option>
       <option>Assam</option>
       <option>Hyderabad</option>
       <option>Delhi</option>
       <option>Bangalore</option> 
       <option>Shimla</option>
   </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>
    </div>             


   



          <div class="form-group col-md-5" name="dest">
          <div style="text-align: center;">
      <label for="inputPassword4"> 
FINAL DESTINATION :</label>
      <select id="inputState" class="form-control" name="dest">
   
      <option>Mumbai</option>
       <option>Pune</option>
       <option>Chennai</option>
       <option>Kolkata</option>
       <option>J&K</option>
       <option>Goa</option>
       <option>Surat</option>
       <option>Karnataka</option>
       <option>Kerala</option>
       <option>Assam</option>
       <option>Hyderabad</option>
       <option>Delhi</option>
       <option>Bangalore</option> 
       <option>Shimla</option>
   </select> 

      <!--<input type="password" class="form-control" id="inputPassword4" placeholder="TO">-->
  </div>
  </div>
  
 <center>  
          <div class="form-group col-md-5" name="class">
          <div style="text-align: center;">
      <label for="inputPassword4"> 
FLIGHT CLASS :</label>
      <select id="inputState" class="form-control" name="class">
   
  <option>Economy</option>
  <option>Business</option>
   <option>First</option>
   
   </select> 
   </div>

  </div>
 
 <center><div class="form-group col-md-5" name="type">
    <label for="inputState">JOURNEY TYPE :</label>
    <select id="inputState" class="form-control" name="type">
    <option >Single</option>
    <option >Return</option>
    </select>
    </div>
   
    
      <br>
    <div class="form-row row justify-content-aroundd">
       <div class="form-group col-md-16" >
       <div style="text-align: center;">
       <center><label for="inputState"  ><h8>NO OF PASSENGERS :</h8></label></center>
       <div style="text-align: center;">
      <center> <input type="number" name="number" required  min="1" max="5"  ></center>
       </div>
       </div>
       </div>
       

    

    <div><div style="text-align: center;">   
     <button type="submit"    class="button" name="login_submit" >Proceed</button>
  </div>
 </div>
</form>
</div>

</section>
</div>
  


<?php include 'footer.php';
?> 

</body>
</html>