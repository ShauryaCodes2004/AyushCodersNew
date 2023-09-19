<?php 
include 'connectDB.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
       $Uid=$_POST['Id'];
       $password=$_POST['Pswd'];
       $pswd_search="SELECT PassWord FROM detailslogin WHERE Mail LIKE '$Uid'";
       $query= mysqli_query($conn,$pswd_search);
       $pswdCount=mysqli_num_rows($query);
       $name_search="SELECT Name FROM detailslogin WHERE Mail LIKE '$Uid'";
       $query1=mysqli_query($conn,$name_search);
       $nameCount=mysqli_num_rows($query1);

       if($nameCount){
        $name_pass=mysqli_fetch_assoc($query1);
        $_SESSION['name']=$name_pass["Name"];
       }

       if($pswdCount){
           $email_pass=mysqli_fetch_assoc($query);
           $db_pass=$email_pass["PassWord"];
           if($password==$db_pass){
          
           
             header('location:dashboard.php');
           }
           else{
             ?>
                <script>
                     alert("The Password is incorrect");
                   </script>
               <?php
           }
       } else{
           ?>
             <script>
                   alert("The Id is incorrect");
               </script>

           <?php
       }
}

?>

<div style="background: linear-gradient(to bottom, #175d69 23%, #330c43 95%); background-repeat:no-reapeat; background-size:contain; height:100vh; width:100vw">
<div class="formBody">
    <div class="mainFormBody">
        <p style="font-size:5vmin ;margin-top: 5vmin; margin-left: 6vmin; letter-spacing: 0.75vmin;">Login</p>
        <div class="underLine" style="background-color: black; width:15vmin; height: 1vmin; margin-left: 6vmin; margin-top: 1vmin;"></div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="text" name="Id" placeholder="Enter Username..." style="margin-left: 5vmin; border-radius: 4vmin; margin-top: 10vmin;width: 70vmin;border: 1px solid grey; padding: 2vmin; color: black;">
            <input type="text" name="Pswd" placeholder="Enter Password..." style="margin-left: 5vmin; border-radius: 4vmin; margin-top: 5vmin;width: 70vmin;border: 1px solid grey; padding: 2vmin; color: black;">
            <p style="margin-left:5vmin; margin-top:2vmin"><a href="signup.php">Account not create?</a></p>
            <div class="btnCont" style="display: flex; justify-content: center;">
            <button type="submit" name="submit" class="subBtn">Submit</button>
            </div>

            
        </form>
    </div>
    </div>
</div>
</body>
</html>

<style>
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;

}
body{
    background-color: rgb(50, 50, 154);
}
.formBody{
   height: 100vh;
   width: 100vw;
   display: flex;
   justify-content: center;
   align-items: center;

}
.mainFormBody{
    background-color: #fff;
    height: 60vmin;
    width: 90vmin;
    border: 1px solid black;
    border-radius: 10vmin;
}
.subBtn{
    margin-left: 5vmin;
    padding: 1.5vmin;
    border-radius: 2.5vmin;
    background-color: rgb(24, 90, 214);
    color: white;
    font-size: 2.75vmin;
    margin-top: 5vmin;
}
</style>