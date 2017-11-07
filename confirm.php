<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Confirmation of Question | The Whovian Reboot</title>
  <meta name="author" content="Heather Brown">
  <meta name="description" content="This is a page confirming a question has been submitted.">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <link rel="stylesheet" href="styles/style2.css"> 
   <style>
header {
    background-image: url("images/vangogh.jpg");
    background-repeat: no-repeat;
}
</style> 
</head>

<body>



<div class="wrapper">


<header class="banner" role="banner">

<h1>The Whovian Reboot</h1>
<nav class="primary-menu">
   <ul>
     <li><a href="index.php">Home</a></li>
		<li><a href="doctors.php">Doctors</a></li>
      <li><a href="companions.php">Companions</a></li>
		<li><a href="spinoffs.php">Spinoffs</a></li>
		<li><a href="form.php">Questions</a></li>  
   </ul>
</nav>
</header>


<main class="main" role="main">



<?php echo $_SESSION['statusMessage'];?>
 
<?php echo $_SESSION['htmlOutput'];?>




</main>


<aside class="sidebar" role="complementary">

<h4> The Catchphrases of the Doctors</h4>
<img class="img-center" src="images/cp2.jpg" alt="Doctor Catchphrases">


</aside>




<footer class="site-footer" role="contentinfo">


</footer>





</div> <!-- end of wrapper -->

</body>
</html>