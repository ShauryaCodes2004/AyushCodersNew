<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<?php
    include 'connectDB.php';
    if(isset($_POST['submit'])){
        $sql="SELECT * FROM `detailslogin`";
        $query= mysqli_query($conn,$sql);
        $entryCnt=mysqli_num_rows($query);
        $Uid=$_POST['Id'];
        $entryCnt++;
        $password=$_POST['Pswd'];
        $contact=$_POST['contact'];
        $nameVal=$_POST['name'];
        $sql_entry ="INSERT INTO detailslogin VALUES('$entryCnt','$Uid','$password','$contact','$nameVal')";

    
        if (mysqli_query($conn, $sql_entry)) {
           ?>
                <script>
                    
                alert("Data added succesfully");
                    </script>

           <?php
          } 
        
          
    }
    mysqli_close($conn);
?>

<div style="background: linear-gradient(to bottom, #175d69 23%, #330c43 95%); background-repeat:no-reapeat; background-size:contain; height:100vh; width:100vw">    
<div class="formBody">
    <div class="mainFormBody">
        <p style="font-size:5vmin ;margin-top: 5vmin; margin-left: 6vmin; letter-spacing: 0.75vmin;">Register<p>
        <div class="underLine" style="background-color: black; width:15vmin; height: 1vmin; margin-left: 6vmin; margin-top: 1vmin;"></div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    
        <input type="email" name="Id" placeholder="Enter Email..." style="margin-left: 5vmin; border-radius: 4vmin; margin-top: 5vmin;width: 70vmin;border: 1px solid grey; padding: 2vmin; color: black;">
        <input type="text" name="Pswd" placeholder="Enter Password..." style="margin-left: 5vmin; border-radius: 4vmin; margin-top: 5vmin;width: 70vmin;border: 1px solid grey; padding: 2vmin; color: black;">
        <input type="phone" name="contact" placeholder="Enter Contact..." style="margin-left: 5vmin; border-radius: 4vmin; margin-top: 5vmin;width: 70vmin;border: 1px solid grey; padding: 2vmin; color: black;">
        <input type="text" name="name" placeholder="Enter Name..." style="margin-left: 5vmin; border-radius: 4vmin; margin-top: 5vmin;width: 70vmin;border: 1px solid grey; padding: 2vmin; color: black;">
       
           
        <p style="margin-left:5vmin; margin-top:2vmin"><a href="login.php">Account created?</a></p>
            <div class="btnCont" style="display: flex; justify-content: center;">
            <button type="submit" name="submit" class="subBtn">Register</button>
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
    height: 90vmin;
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
