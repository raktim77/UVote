

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Go-Vote!</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="normalcss.css">
<link rel="stylesheet" href="style.css">

</head>
<body>	

<div class="form">
  <h1>Go-Vote!</h1>
  <hr><br>
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Voter Login</a></li>
        <li class="tab"><a href="#login">Admin Login</a></li>
      </ul>
      <br>
      
      <div class="tab-content">
        <div id="signup">   
          
          <!-- voter login -->
          <form action="login.php" method="POST" autocomplete="off">
          
          

          <div class="field-wrap">
            <label>
              Voter ID<span class="req">*</span>
            </label>
            <input type="text" name="voter" required autocomplete="false"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="false"/>
          </div>
          
          <button type="submit" class="button button-block" name="login">Login</button>
          
          </form>

        </div>
        
        <div id="login">   
          
          <!-- admin login -->
          
          <form action="admin/login.php" method="POST" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="username" required autocomplete="false"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="false"/>
          </div>
          
          
          
          <button class="button button-block" name="login">Login</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

      <?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>

	


  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
<script src='./jquery.min.js'></script>
<script  src="./script.js"></script>
</body>
</html>