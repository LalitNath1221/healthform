<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
          <?php if (isset($_GET['msg'])) { ?>
     		<p class="<?php echo $_GET['class']; ?>"><?php echo $_GET['msg']; ?><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span></p>
     	<?php } ?>
     <div class="container-register">
     <form action="getdata.php" enctype="multipart/form-data" method="post">
     	<h2>User Details</h2>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="john" required>
          <label for="age">Age</label>
          <input type="number" name="age" id="age" required>
          <label for="weight">Weight</label>
          <input type="number" step="0.01" min="0" name="weight" id="weight" required>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
          <label for="pdf_file">Upload health report (max size 5Mb)</label>
          <input type="file" name="pdf_file" id="pdf_file" accept=".pdf" required>
          <button type="submit" class="btn_submit">Submit</button>
          <p class="footer-msg"><a href="/anExtraRep/fetchdata.php">Check report</a></p>
     </form>
</div>
</body>
<script>
     
const pdf_file = document.getElementById('pdf_file');

pdf_file.addEventListener('change', (event) => {
  const target = event.target
  	if (target.files && target.files[0]) {
      const maxAllowedSize = 5 * 1024 * 1024;
      if (target.files[0].size > maxAllowedSize) {
       	target.value = ''
            alert("File is too big!");
      }
  }
})
</script>
</html>
