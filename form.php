<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Question Page | The Whovian Reboot</title>
  <meta name="author" content="Heather Brown">
  <meta name="description" content="A questions/comments page for the website.">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <link rel="stylesheet" href="styles/style2.css"> 
   
<script>
 
function printDate() {
    var d = new Date();
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    var hours = d.getHours();
    var minutes = d.getMinutes();
     
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
 
    var suffix = "AM";
    if (hours >= 12) {
        suffix = "PM";
        hours = hours - 12;
    }
     
    if (hours == 0) {
        hours = 12;
    }
   document.write("It is " + hours + ":" + minutes + " " + suffix + " on " + month + "/" + day + "/" + year);
}
 
</script>
   
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

<form class="assignment-form" method="post" action="process.php" onsubmit="return validateForm()">

<h3>You have questions about Doctor Who? We'll give you answers!</h3> 
 
<fieldset>
 
  <legend>Contact Information:</legend>
   
 
  <label for="Name">Name:</label>
  <input type="text" id="Name" name="Name">
 
  <br>
  <br>
  
  <label for="Email">Email:</label>
  <input type="text" id="Email" name="Email">
 
  <br>
  <br>
  
  <fieldset>
 
    <legend>Favorite Reboot Doctor:</legend>
     
	   <input type="radio" name="Doctor" id="9" value="9">
    <label for="9">The Ninth</label>
  
     
	 <br>
	 <input type="radio" name="Doctor" id="10" value="10">
    <label for="10">The Tenth</label>
    	
	<br>
	    <input type="radio" name="Doctor" id="11" value="11">
	<label for="11">The Eleventh</label>

     
  </fieldset>
   
</fieldset>
  
 <br>
 <br>
  
<fieldset>
 
  <legend>Which show do you have a question about?</legend>
  <input type="checkbox" name="Show[]" id="dw" value="dw">
  <label for="dw">Doctor Who</label>
 
 <br>
 <input type="checkbox" name="Show[]" id="tw" value="tw">
  <label for="tw">Torchwood</label>
  
 <br>
   <input type="checkbox" name="Show[]" id="sj" value="sj">
  <label for="sj">The Sarah Jane Adventures</label>

 
</fieldset>
 
 <br>
 <br>
 
<fieldset>
 
  <legend>Questions:</legend>
 
  <label for="Whovian">Do you consider yourself a Whovian?</label>
  <select name="Whovian" id="Whovian">
    <option value="no">No</option>
    <option value="yes">Yes</option>
  </select>
 
  <br>
  <br>
 
  <label for="Question">Please type your question here:</label>
  <br>
  <textarea name="Question" id="Question"></textarea>
 
</fieldset>
 <br>
<input type="submit" value="submit">
</form>
<br>
<script> printDate(); </script>



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