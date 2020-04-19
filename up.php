
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
        margin-left: 350px;
      }

      .form
      {
        margin-left: 300px;
      }
      input[type=text]
      {
        width: 250px;
      }
      input[type=date]
      {
        width: 250px;
      }
      input[type=submit]
    { height: 30px; 
      width: 120px;
       font-size: 12px;
        font-weight: bold;
         cursor: pointer;
         background-color: green;
         margin-left: 40px; 
         border-radius: 6px;
         margin-top: 10px;
    }
 input[type=submit]:hover{ background-color: #fef3a7; color: green; }

  </style>
  
 </head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

  <div class="header_left">

    <a href="student_show.php"><img src="headeta.png" class="header_img"></a> 

          <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

    <a href="logouts.php"><img src="logout.png"></a>
  </div>

                                            <!-- Menu and Body Section -->


    <div class="body">
      <div class="menu">

 
              <b class="header_text">  *****Library Details*****</b>
        
        
      </div>  <br><br>

                         <!-- Body work -->
<?php
$a=$_GET['id'];
include "connection.php";
$qer=mysqli_query($conn,"select * from library_details where id='$a'");
$res=mysqli_fetch_assoc($qer);
?>
	<div style="background: green; text-align: center; font-size:26px; color: #f3fd84;width: 450px; height: 40px; margin-left: 300px; padding-top: 10px" >Update Now</div>

	<div style="background: #fea5df; width: 450px; height: 300px; margin-left: 300px;">

<form method="post" style="margin-left: 50px;">
	<table>
<tr>
<td style="font-size: 18px;
         font-weight: bold;
         color: #6a0000;">Name:</td><td><input type="text" value="<?php echo $res['sname'];  ?>" name="nm"><br></td></tr>
<tr>
<td style="font-size: 18px;
         font-weight: bold;
         color: #6a0000;">Class:</td><td><input type="text" value="<?php echo $res['class'];  ?>" name="cl"><br></td></tr>
<tr>
<td style="font-size: 18px;
         font-weight: bold;
         color: #6a0000;">Roll:</td><td><input type="text" value="<?php echo $res['roll'];  ?>" name="rl"><br></td></tr>
<tr> 
<td style="font-size: 18px;
         font-weight: bold;
         color: #6a0000;">Book:</td><td><input type="text" value="<?php echo $res['bookname'];  ?>" name="bk"><br></td></tr>
<tr>
<td style="font-size: 18px;
         font-weight: bold;
         color: #6a0000;">Author:</td><td><input type="text" value="<?php echo $res['authorname'];  ?>" name="auth"  ><br></td></tr>
<tr>
<td style="font-size: 18px;
         font-weight: bold;
         color: #6a0000;">Issue:</td><td><input type="date" value="<?php echo $res['withdroldate'];  ?>" name="wd" style="height: 30px;
        
       
        font-weight: bold;
        "><br></td></tr>
<tr>
<td style="font-size: 18px;
         font-weight: bold;
         color: #6a0000;">Return:</td><td><input type="date" value="<?php echo $res['submisiondate'];  ?>" name="sb" style="height: 30px;
        
        font-weight: bold;
        "><br></td></tr><br>
<tr>
	<td></td>
<td><input type="submit" name="sub" value="update"></td>

</form>

</div>

<?php
if(isset($_POST['sub']))
{
$nm=$_POST['nm'];
$pa=$_POST['cl'];
$rol=$_POST['rl'];
$bok=$_POST['bk'];
$au=$_POST['auth'];
$w=$_POST['wd'];
$s=$_POST['sb'];
$qer=mysqli_query($conn,"update library_details set sname='$nm', class='$pa',roll='$rol',bookname='$bok',authorname='$au',withdroldate='$w',submisiondate='$s' where id='$a'");
if($qer)
{
echo "<script>confirm('update success'); window.location.href='student_show.php';</script>";
}

}
?>
</body>
</html>