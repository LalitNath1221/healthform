<?php 
session_start(); 
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get User Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <?php if (isset($_GET['msg'])) { ?>
     		<p class="<?php echo $_GET['class']; ?>"><?php echo $_GET['msg']; ?><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span></p>
     	<?php } ?>
    <div class="container-fetch">
    <h2>User Details</h2>
     <form class="form-fetch" action="fetchdata.php" method="get">
          <input type="email" name="email" id="email" placeholder="Enter email here" required>
          <button type="submit" class="btn_submit">Get Details</button>
          <p class="footer-msg"><a href="/anExtraRep/index.php">Create a new user</a></p>
     </form>
     <?php
     if(isset($_GET['email'])){
     $email = $_GET['email'];
     $sql = "SELECT `Name`, `age`, `weight`, `email`, `helth-report` FROM `users` WHERE email='$email'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
        if($row){
     ?>
        <div class="view-details">
        <div class="header">
            <p>Name : <?php echo($row['Name']);?></p>
            <p>Email : <?php echo($row['email']);?></p>
            <p>Age : <?php echo($row['age']);?></p>
            <p>weight : <?php echo($row['weight']);?></p>
        </div>
        <embed src="/anExtraRep/reports/<?php echo($row['helth-report']);?>" width="800" height="500">
        </div>
     <?php }else {
        header("Location: fetchdata.php?class=error&msg=user's data dosent exist");
     }}
     ?>
     
     </div>
</body>
</html>