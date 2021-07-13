<?php
	session_start();
	require_once('./login/dbconfig/config.php');
	//phpinfo();
    error_reporting(0);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRYPTOL</title>
    <link href="bootstrap-4.4.1.css" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CRYPTOL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: flex;"><a class="nav-link" href="#">Exchange </a>
            <a class="nav-link" href="./Getting_std/get_std.html">Getting Started </a>
            <a class="nav-link" href="./funds/funds.html">Balances </a>
            <a class="nav-link" href="#">T&C</a>
            <a class="nav-link" href="#">About Us</a>

        </div>
        <ul class="navbar-nav mr-auto thechange">
            <li class="nav-item active"> <a class="nav-link" href="./login/reg/login.php">Login</a></li>
            <li class="nav-item"> <a class="nav-link" href="./login/reg/register.php">Register</a></li>
        </ul>
    </nav>

    <header>
        <div class="jumbotron" style="background-image: url('ClumsyChiefDassierat-mobile.gif');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">SUCK on CRYPTO</h1>
                        <p class="text-center">Crypto is the one which is gonna suk your imagination</p>
                        <p>Add anything</p>
                        <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div>noo</div>

        <!-- <div style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;"> -->
        <div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
        <!-- <div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div> -->
        </div>
    </main>
</body>

<script>
    function change(){
document.getElementsByClassName("thechange")[0].innerHTML = "<div class='dropdown'><button class='dropbtn'><?php echo $_SESSION['username']; ?></button> <div class='dropdown-content'><a href='#'>Link 3</a></div></div>"
}
</script>

<?php
if ($_SESSION['loggedin'] == "TRUE")
{
echo '<script>',
    'change();',
     '</script>';
}
else
echo '<script> alert("false")</script>';


?>



</html>

