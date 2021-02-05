<?php
Include "./include/Header.inc";
?>
	<menu>
		<a href="index.php"> Cover Letter </a> |
		<a href="resume.php">Resume</a> |
		<a>Book</a> |
		<a href="contacts.php">Contact Me</a> | 
		<a href="hire.php">Hire Me</a> | 
		<a>Courses</a>
	</menu>
	<hr>
	<br>

<?php
Include "./include/LeftBar.inc";
?>
		<?php
Include "./include/RightBar.inc";
?>
<html>
<head>
<style>
body {
  font-family:Baskerville Old Face;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}


.left h2 {
  padding-left: 10px;
}



/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 5px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block;
}


</style>
</head>
<body>

<p style="text-align:center;font-size:20px;">Start to type for a specific course inside the search bar to "filter" the 
courses.</p>

<div class="row">
  <div class="left" >
    <h2>Courses, I already taken:</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
      <li><a href="./searchHTML.html" target="_blank">INFS 1100(Microsoft Office)</a></li>
      <li><a href="http://catalog.uccs.edu/preview_course_nopop.php?catoid=6&coid=22311"target="_blank"> INFS 3000</a></li>
      <li><a href="#">INFS 3070</a></li>
      <li><a href="#">INFS 3400</a></li>
      <li><a href="#">INFS 3500</a></li>
      <li><a href="#">INFS 3700</a></li>
      <li><a href="#">INFS 3800</a></li>
      <li><a href="#">INFS 4400</a></li>
	  <li><a href="https://www.uccs.edu/english/courses/english_courses_1000_to_2000"target="_blank">ENGL 1305</a></li>
      <li><a href="#">COMM 2010</a></li>
      <li><a href="#">ECON 2010</a></li>
    </ul>
  </div>
  
  
  <!-- <div class="right" style="background-color:#ddd;">
    <h2>Page Content</h2>
    <p>Start to type for a specific category inside the search bar to "filter" the search options.</p>
    <p>Some text..Some text..Some text..Some text..Some text..Some text..Some text..Some text..</p>
    <p>Some other text..Some text..Some text..Some text..Some text..Some text..Some text..Some text..</p>
    <p>Some text..</p>
  </div>
</div> -->

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
<!--- start footer -->				
	</div>
	</section>
	
 
	
	
	
	<hr>
	
	
<?php
Include "./include/Footer.inc";
?>
</body>
</html>
