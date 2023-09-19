<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body style="overflow-x:hidden">
    <div style="width:100vw;background: linear-gradient(to bottom, #175d69 23%, #330c43 95%);">
   <button style="padding:2vmin;font-size:3vmin;border-radius:20vmin;margin-top:7vmin; margin-left:7vmin"><a href="logout.php" style="color:black;text-decoration:none">Logout</a></button>
    <?php
        $name=$_SESSION['name'];
    ?>
    <p class="introColor" style="display:flex; justify-content:center; font-size:10vmin"> Welcome </span></p>
    <p class="introColor" style="display:flex; justify-content:center; font-size:7vmin"><?php echo $name ?></p>
    <p style="color:white;display:flex; justify-content:center;margin-top:3vmin;letter-spacing:0.5vmin;font-size:3vmin ">Pls click on the option of your prefernce and next button?</p>
  <div class="sectionHolder">
    <div class="holderClass" style="margin-top:10vmin;width:100vw;display:flex;justify-content:space-evenly">
    <div class="stratups" style="width:60vmin; background-color:white; border-radius:25vmin; border:1px solid black; padding:3vmin; font-weight:bold; font-size:4vmin; letter-spacing:0.5vmin;"><p>Stratups</p></div>
    <div class="Incubators" style="width:60vmin; background-color:white; border-radius:25vmin; border:1px solid black; padding:3vmin; font-weight:bold; font-size:4vmin; letter-spacing:0.5vmin;"><p>Incubators</p></div>
</div>
    
<div class="sectionHolder">
    <div class="holderClass" style="margin-top:10vmin;width:100vw;display:flex;justify-content:space-evenly">
    <div class="accelator" style="width:60vmin; background-color:white; border-radius:25vmin; border:1px solid black; padding:3vmin; font-weight:bold; font-size:4vmin; letter-spacing:0.5vmin;"><p>Accelerators</p></div>
    <div class="Mentor" style="width:60vmin; background-color:white; border-radius:25vmin; border:1px solid black; padding:3vmin; font-weight:bold; font-size:4vmin; letter-spacing:0.5vmin;"><p>Mentor</p></div>
</div>
<div class="sectionHolder">
    <div class="holderClass" style="margin-top:10vmin;width:100vw;display:flex;justify-content:space-evenly">
    <div class="govAgencies" style="width:60vmin; background-color:white; border-radius:25vmin; border:1px solid black; padding:3vmin; font-weight:bold; font-size:4vmin; letter-spacing:0.5vmin;"><p>Government Agencies</p></div>
    <div class="Users" style="width:60vmin; background-color:white; border-radius:25vmin; border:1px solid black; padding:3vmin; font-weight:bold; font-size:4vmin; letter-spacing:0.5vmin;"><p>Public Users</p></div>
</div>
  </div>
</div>

<div class="buttonHolder" style="display:flex; justify-content:center;padding-bottom:15px;">

    <button style="background-color:red; color:white; width:20vmin;font-size:4vmin; padding:1.75vmin; margin-top:10vmin">Next</button>
</div>

</body>
</html>

<style>

    *{
        margin:0;
        padding:0;
    }
    .introColor{
        color:white;
        letter-spacing:1vmin;
    }


</style>