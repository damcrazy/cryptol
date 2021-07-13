<?php
	session_start();
	require_once('../dbconfig/config.php');
	//phpinfo();
	$_SESSION['loggedin'] = 'FALSE';
?>




    <!DOCTYPE html>
    <html>

    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
        <script>
            var afunction = function() {
                var a = document.getElementsByClassName("login_button")[0];
                console.log(a);
            }
        </script>
    </head>


    <body style="background-color:#bdc3c7">
        <div id="main-wrapper">
            <div class="login-box">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <div class="user-box">
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <a><button name="login" type="submit" style="background-color: rgba(0, 0, 0, .5);border: 0px !important;padding: 15px!important; margin: 10px;">Login</button></a>
                    <a href="register.php"><button  type="button" class="register_btn" style="background-color: rgba(0, 0, 0, .5);border: 0px !important;padding: 15px!important; margin-top: 10px;margin-left:30px">Register</button></a>
                </form>
            </div>
            



            <?php
			$_SESSION['loggedin'] = 'FALSE';
			if(isset($_POST['login']))
			{
				@$tablename = 'userinfo';
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from $tablename where username='$username' and passwd='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					$_SESSION['loggedin'] = 'TRUE';
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: ../../Cryptol.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>

        </div>
    </body>

    </html>