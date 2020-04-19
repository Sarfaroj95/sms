 <?php
include "connection.php";

if(isset($_POST['submit']))
{
  $name=$_POST['nm'];
  $gender=$_POST['gen'];
  $fnam=$_POST['fname'];
  $mnam=$_POST['sname'];
  $add=$_POST['add'];
  $pin=$_POST['pin'];
  $mail=$_POST['mail'];
  $mob=$_POST['mob'];
  $dob=$_POST['dte'];
  $age=$_POST['age'];
  $school=$_POST['school'];
  $tong=$_POST['ton'];
  $rel=implode('-',$_POST['s']);
  $income=$_POST['income'];
  $ben=$_POST['beng'];
  $eng=$_POST['eng'];
  $math=$_POST['math'];
  $phy=$_POST['phy'];
  $geo=$_POST['geo'];
  $his=$_POST['his'];
  $tot=$_POST['total'];

     $qer=mysqli_query($conn,"INSERT INTO class_six VALUES('','$name','$gender','$fnam','$mnam','$add','$pin','$mail','$mob','$dob','$age','$school','$tong','$rel','$income','$ben','$eng','$math','$phy','$geo','$his','$tot',now())");


  if($qer)
  {
    echo "<script>alert('Admission Successful')</script>";
  }
  else
  {
    echo "<script>alert('Admission Failed')</script>";
  }
  
}



?>

<!DOCTYPE html>
<html>
<head>
  <title>Home-SMS</title>


  <style type="text/css">

                   /*Header section*/

    .header_left
    {
        height: 80px;
        width: 1004px;
        background-color: skyblue;
        margin-left: 170px;
    
      }

                       /*Header Logo Section*/

      .header_img
      {
        margin-left: 50px;
      }

                          /*Right Section Logo*/

      .header_right
      {
          margin-left: 400px;
      }
                       
                       /*Body Section*/

      .body
      {
        width: 1000px;
        height: 900px;
        margin-left: 170px;
        border: 2px solid black;
        background-color: white;

        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
      }
      

                       /*Marquee Section*/

      .menu
      {
        background-color: black;
        height: 40px;
        width: 980px;
        margin-left: 10px;
      }

      .header_text
      {
        color: white;
        font-size: 25px;
        margin-left: 360px;
      }

      .form
      {
        margin-left: 200px;
        margin-top: -70px;
      }

      input[type=text]
      {
        height: 25px;
        width: 300px;
        margin-left:30px;
        font-size: 16px;
      }
      input[type=checkbox]
      {   
        height: 16px;
        width: 16px;
          font-size: 18px;
          margin-left:30px;
          padding-left: 20px;

      }
      input[type=radio]
      {
        height: 16px;
        width: 16px;
        margin-left: 30px;
      }
      .mm
      {
        font-size: 20px;
      }

      input[type=date]
      {
        height: 30px;
        width: 300px;
        margin-left: 30px;
        font-size: 16px;
        
      }

      textarea
      {
        width: 300px;
        margin-left: 30px;
        font-size: 16px;

      }
      select
      {
        margin-left: 30px;
        font-size: 16px;
        width: 305px;
        height: 25px;
      }
       
       input[type=submit]
       {
         height: 35px;
         width: 120px;
         font-size: 15px;
         cursor: pointer;
         background-color: green;
         color: white;
         font-weight: bold;
         margin-left:200px;
        
       }
       t
       {
        color: #350035;
        font-size: 20px;
        font-weight: bold;
       }

       /*input[type=reset]
       {
         height: 35px;
         width: 120px;
         font-size: 15px;
         cursor: pointer;
         background-color: green;
         color: white;
         font-weight: bold;
       }*/

       b
       {
         font-size: 20px;
         font-weight: bold;
         color: blue;
         margin-left:30px;
       }

      /* .form
       {
         border : 2px solid black;

         height: 300px;


         width:300px;
         background-color: yellow;
         margin-right: 50px;
         margin-right: 200px;
 }                
*/
.tab{
}


     
 




  </style>


</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

  <div class="header_left">

    <a href="add_class.php"><img src="headeta.png" class="header_img"></a> 

          
  </div>

                                            <!-- Menu and Body Section -->


    <div class="body">
      <div class="menu">

 
        <b class="header_text">  *****Admission Now*****</b>
        
        
      </div>  <br><br>

                                          <!-- Body work -->
            <div class="form">

             
               <br><br><br>

<div style="width: 650px;height: 50px; background: #800080; text-align: center; font-size: 26px; color: white;padding-top: 10px;border-top-left-radius: 8px;
border-top-right-radius: 8px; "  >Admission Form Class-VI</div>

  <div class="frm" style="background: #aed2d2; width: 650px; height: 730px;border-color: black; border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;">
  <form method="post"  style="margin-left: 60px; padding-top: 20px;" >
    <table>
    <tr>
    <td><t>Student's Name:</t></td><td> <input type="text" name="nm" required="require"  > <br></td>
      </tr>
      <tr>
    <td><t>Gender:</t></td><td><input type="radio" name="gen" value="male" required="require" checked="" ><a class="mm"> Male</a>
          <input type="radio" name="gen" value="female"><a class="mm">Female</a> <br></td>
    </tr>
    <tr>
    <td><t>Father's Name:</t><td></t> <input type="text" name="fname" value=""  required="require">  <br></td>
      </tr>
      
      <tr>
    <td><t>Mother's Name:</t></td><td> <input type="text" name="sname" value=""  required="require"> <br></td>
      </tr>
      <tr>
    <td><t>Address:</t></td><td><textarea name="add" value="" rows="2" cols="20"  required="require"></textarea>  <br></td>
      </tr>
      <tr>
    <td><t>Pin Code:</t></td><td><input type="text" name="pin" value=""  required="require" maxlength="6" >  <br></td>
      </tr>

      <tr>
    <td><t>Mail:</t></td><td><input type="text" name="mail" value=""  required="require" > <br></td>
      </tr>
      <tr>
    <td><t>Mobile:</t></td><td><input type="text" name="mob" value=""  required="require" maxlength="10" > <br></td>
  </tr>
  <tr>

    <td><t>Birthday:</t></td><td><input type="date" name="dte" value=""  required="require"> <br></td>
  </tr>
  <tr>
    <td><t>Age:</t></td><td><input type="text" name="age" value=""  required="require" maxlength="2"> <br></td>
  </tr>

  <tr>
    <td><t>Previus School Name:</t></td><td><input type="text" name="school" value="" required="require"> <br></td>
  </tr>
  <tr>
    
    <td><t>Mother Tongue:</t></td><td>
    <select name="ton" >
          <option value="Bengali" required="require" >Select</option>
          <option value="Bengali" required="require">Begali</option>
          <option value="Hindi" required="require">Hindi</option>
          <option value="English" required="require">English</option>
    </select> <br></td>
  </tr>
  <tr>
    <td><t>Religion:</t></td><td><input type="checkbox" name="s[]" value="Muslim"><a class="mm">Muslim</a>
            <input type="checkbox" name="s[]" value="Muslim"><a class="mm">Hindu</a>
            <input type="checkbox" name="s[]" value="Krishtan"><a class="mm">Khishtan </a>  <br></td>
  </tr>
     
  <tr>

    <td><t>Family Income:</t></td><td><input type="text" name="income" value="" required="require"><br><br></td>
  </tr>
  </table>

    <div style="margin-left: 30px;">
    <table border="2">
      <tr><th colspan="7" align="center">Student Marks Detail</th></tr>
      <tr>
        <th style="width: 50px">Bengali</th>
        <th style="width: 50px">English</th>
        <th style="width: 50px">Math</th>
        <th style="width: 50px">Physics</th>
        <th style="width: 50px">Geograhy</th>
        <th style="width: 50px">History</th>
        <th style="width: 60px">Total No</th>
      </tr>

      
       <tr>
        <td><input id ="v0" onkeyup="calculate()" type="text" name="beng" value=""  required="require"class="tab" style="width: 50px; margin-left: 0px; text-align: center;" ></td>

        <td><input id ="v1" onkeyup="calculate()" type="text" name="eng" value="" required="require" class="tab" style="width: 50px ; margin-left: 0px; text-align: center;"></td>

        <td><input id ="v2" onkeyup="calculate()" type="text" name="math" value="" required="require" class="tab" style="width: 50px ; margin-left: 0px; text-align: center;"></td>

        <td><input id ="v3" onkeyup="calculate()" type="text" name="phy" value="" required="require" class="tab" style="width: 50px ; margin-left: 0px; text-align: center;"></td>

        <td><input id ="v4" onkeyup="calculate()" type="text" name="geo" value="" required="require"class="tab" style="width: 70px ; margin-left: 0px; text-align: center;"></td>

        <td><input id ="v5" onkeyup="calculate()" type="text" name="his" value="" required="require" class="tab" style="width: 50px ; margin-left: 0px; text-align: center;"></td>

        <td><input id="result" onkeyup="calculate()" type="text" name="total" value="" required="require" class="tab" style="width: 70px ; margin-left: 0px; text-align: center;"></td>
    </tr>
</table>
</div>
    <br><br>
    <input type="submit" name="submit" value="submit">



                              <!-- AUTOSUM Function -->

<script type="text/javascript">

function calculate(){
var result = document.getElementById('result');
var el, i = 0, total = 0; 
while(el = document.getElementById('v'+(i++)) ) {
el.value = el.value.replace(/\\D/,"");
total = total + Number(el.value);
}
result.value = total;
if(document.getElementById('v0').value =="" && document.getElementById('v1').value =="" && document.getElementById('v2').value =="" && document.getElementById('v3').value =="" && document.getElementById('v4').value =="" && document.getElementById('v5').value ==""){
 result.value ="";
}
}
</script>

    
  </form>


  </div>
</div>
</div>
</div>
</body>
</html>


