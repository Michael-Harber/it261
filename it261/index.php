<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1><a href="index.php">Michael's Portal Page</a></h1>
<h2>The navigation below represents our BIG assignments.</h2>
<div id="wrapper">


<nav>
    <ul>
    <li><a href="">Switch</a></li>
    <li><a href="">Troubleshoot</a></li>
    <li><a href="">Calculator</a></li>
    <li><a href="">Email</a></li>
    <li><a href="">Database</a></li>
    <li><a href="">Gallery</a></li>
    </ul>
</nav>

<main>
<h2>About Michael</h2>
<p>Hi! I'm Michael and I'm a third semester Web Development student. After having served in the U.S. Navy for 10 years, I've decided to switch careers and try something a little different which is how I ended up here at Seattle Central. I enjoy soccer, reading, movies and video games. I live with my girlfriend and our dog, Bodhi. I'm excited to learn PHP and what it has to offer in the world of Web Development.     
</p> 
<img class="right" src="images/me.jpg"  alt="Michael">

<!-- <h2>My MAMP Screenshots!</h2>
<img src="images/MAMPinstall.png" alt="MAMP Screenshot">
<img src="images/phperror.png" alt="PHP Error Screenshot"> -->



<aside>
<h2>Weekly Class Exercises</h2> 
<h3>Week 2</h3>
<ul>
    <li><a href="weeks/week2/var.php">var.php</a></li>
    <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
    <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
    <li><a href="weeks/week2/currency.php">currency.php</a></li> 
    <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>   
</ul>  
 
<h3>Week 3</h3>
<ul>
    <li><a href="weeks/week3/if.php">if.php</a></li>
    <li><a href="weeks/week3/date.php">date.php</a></li>
    <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
    <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li> 
    <li><a href="weeks/week3/index.php">index.php</a></li>
    <li><a href="weeks/week3/switch.php">switch.php</a></li>   
</ul>  

</aside>
</main>



</div>
<footer>
    <ul>
        <li>Copyright &copy;
            2022</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Michael Harber</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
    </ul>
    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
</footer>


</body>
</html>