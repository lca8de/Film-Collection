<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Very Own Virtual Film Library</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  </script>

<!-- drag and drop -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #droppable { width: 130px; height: 160px; padding: 0.5em; float: left; margin: 10px; }
  #draggable, #draggable-nonvalid { width: 100px; height: 130px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #draggable, #draggable-nonvalid1 { width: 100px; height: 130px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #draggable, #draggable-nonvalid2 { width: 100px; height: 130px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #draggable, #draggable-nonvalid3 { width: 100px; height: 130px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  </style>

  <script>
  $(function() {
    $( "#draggable, #draggable-nonvalid, #draggable-nonvalid1, #draggable-nonvalid2, #draggable-nonvalid3" ).draggable();
    $( "#droppable" ).droppable({
      accept: "#draggable",
      activeClass: "ui-state-hover",
      hoverClass: "ui-state-active",
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Correct!" );
      }
    });
  });
  </script>



</head>
<body>
<div id="templatemo_top_bar_wrapper">
  <div id="templatemo_top_bar">
        <form action="#" method="get">
            <input type="text" value="Search Film Collection..." name="q" size="10" class="inputfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />            
            <input type="submit" name="Search" value="Search" class="submitbutton" title="Search" />
        </form>
    </div> <!-- end of top bar -->
</div> <!-- end of top bar wrapper -->

<div id="templatemo_banner_wrapper">

  <div id="templatemo_banner">
    
      <div id="templatemo_site_title_section">
          <div id="templatemo_site_title">
              <a href="#">Film Collector<span>My Very Own Virtual Film Library</span></a>
            </div>
        </div>
        
        <div id="templatemo_banner_content">
        
          <div class="header_01">Welcome!</div>
            

</html>

<?php

$name = $_GET["name"];
$email = $_GET["email"];
$birthday = $_GET["birthday"];

//echo "<h3>$name</h3>";
//echo "<h3>$email</h3>";
//echo "<h3>$birthday</h3>";


 $birthday = explode("/", $birthday);
         //get age from date or birthdate
         $age = (date("md", date("U", mktime(0, 0, 0, $birthday[0], $birthday[1], $birthday[2]))) > date("md") ? ((date("Y")-$birthday[2])-1):(date("Y")-$birthday[2]));
         //echo "Age is: ".$age;

//echo "Welcome to the site " .$name;

echo "Welcome to the site " .$name; echo "! A " .$age; echo "-year-old like you should own plenty of movies. ";
echo "Now that you have signed up, you are ready to start keeping track of all the movies you have collected over those " .$age; echo " years.";

?>

<html>


        </div>


      <div class="cleaner"></div>
    </div> <!-- end of banner -->
</div> <!-- end of banner -->

<div id="templatemo_menu_wrapper">
  <div id="templatemo_menu">
        <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="mycollection.html">My Collection</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="filmquote.html">Film Quote of the Day</a></li>
             <!-- <li><a href="#" class="last">Contact</a></li>  -->
        </ul>     
    </div> <!-- end of menu -->
</div> <!-- end of menu wrapper -->

<div id="templatemo_content_wrapper">
        <div id="top"></div>
  <div id="templatemo_content">

<div class="column_w380_left">
          
            <div class="header_02">Build Your Online Film Library to Keep Track of all the Films You Own </div>
            
            <div id="accordion">
  <h3>My Collection</h3>
  <div>
    <p>
    From here you can get a quick view of your own personal virtual film collection.
    </p>

<img src="frozen.jpg" alt="frozen" style="width:80px;height:120px">
<img src="Shawshank.jpg" alt="shawshank" style="width:80px;height:120px">
<img src="darkknightrises.jpg" alt="dark knight rises" style="width:80px;height:120px">

  </div>
  <h3>Film Search By Title</h3>
  <div>
    <p>
    Search for a film by title to add it to your collection
    </p>

<div id="tfheader">
    <form id="tfnewsearch" method="get" action="#">
            <input type="text" class="tftextinput" name="q" size="21" maxlength="120" placeholder="Enter Title Here"><input type="submit" value="search" class="tfbutton">
    </form>
  <div class="tfclear"></div>
  </div>


  </div>
  <h3>Film Search By Genre</h3>
  <div>
    <p>
    Search for films by genre to find films you own to add it to your collection
    </p>

<div id="tfheader2">
    <form id="tfnewsearch2" method="get" action="#">
            <input type="text" class="tftextinput" name="q" size="21" maxlength="120" placeholder="Enter Genre Here"><input type="submit" value="search" class="tfbutton">
    </form>
  <div class="tfclear"></div>
  </div>

  </div>
  <h3>Number of Films in Collection</h3>
  <div>
    <p>
    View how many films you have <br><br>
    "You have 3 films"
    </p>
  </div>
</div>
            
 <br>
 <br>

<div class="triviagame">
  <h3>Movie Trivia</h3>
    <p> Which film won the Oscar for Best Picture in 1997? Drag the Correct Film to the box and the box will light up once the correct film is placed there.  Otherwise, nothing will happen.</p>

<div id="draggable-nonvalid" class="ui-widget-content">
  <img src="asgood.jpg" alt="as good as it gets" style="width:100px;height:130px">
</div>

<div id="draggable-nonvalid1" class="ui-widget-content">
  <img src="good_will_hunting.jpg" alt="Good Will Hunting" style="width:100px;height:130px">
</div>

<div id="draggable" class="ui-widget-content">
 <img src="titanic.jpg" alt="Titanic" style="width:100px;height:130px">
</div>

<div id="draggable-nonvalid2" class="ui-widget-content">
  <img src="La_confidential.jpg" alt="LA Confidential" style="width:100px;height:130px">
</div>

<div id="draggable-nonvalid3" class="ui-widget-content">
  <img src="monty.jpg" alt="The Full Monty" style="width:100px;height:130px">
</div>
 

 
<div id="droppable" class="ui-widget-header">
  <p>Drag Here!</p>
</div>
 

</div> <!-- end of trivia game class -->

      </div> <!-- end of column w380 left -->
        
        <div class="column_w380_right">
        
          <div class="header_02">Just For Fun</div>
            <p>Put your favorite Disney movies from favorite (top) to least favorite (bottom) by dragging each title to where you want it to go.</p>
            
          <div class="margin_bottom_20"></div>
            
            
  <ul id="sortable">
     <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>The Lion King</li>
     <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Beauty and the Beast</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>The Little Mermaid</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Frozen</li>
     <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Tangled</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Aladdin</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Pocahontas</li>
</ul>

<br>
<br>
<br>
<br>

<div class="filmofday">
<h3> Film of the Day </h3>

<img src="silver_linings_playbook.jpg" alt="Silver Linings Playbook" style="width:200px;height:240px">

<p> Title: Silver Linings Playbook <p><br>
<p> Released: 2012 </p><br>
<p> Starring: Jennifer Lawrence, Bradley Cooper, Robert DeNiro </p><br>
<p> Oscars Won:  1 (Best Performance by an Actress in a Leading Role-Jennifer Lawrence) </p>  <br>
<p> Short Summary (IMDB):  After a stint in a mental institution, former teacher Pat Solitano moves back in with his parents and tries to reconcile with his ex-wife. Things get more challenging when Pat meets Tiffany, a mysterious girl with problems of her own. </p><br>

</div>

            <div class="margin_bottom_20"></div>
            
            <div class="section_w180 fl margin_right_20">
            
            <!--  
                <img src="images/templatemo_image_09.jpg" alt="Global Web Template" />
                
              <div class="header_04"><a href="#">Donec sit amet est</a></div>
                
                <p>Integer in ipsum nec neque tristique venenatis. Sed porta, tortor congue...</p>
            -->
          </div>
            
            <div class="section_w180 fl">
            
            <!--  
                <img src="images/templatemo_image_10.jpg" alt="Travel Template" />
                
              <div class="header_04"><a href="#">Aliquam vitae diam</a></div>
                
                <p>Nullam at vehicula risus. Aliquam eu massa fringilla diam convallis...</p>
            -->
          </div>

            
            <div class="cleaner"></div>
        </div>   <!-- end of column w380 right -->
  


      <div class="cleaner"></div>
    </div> <!-- end of content inner -->
            <div id="bottom"></div>
</div> <!-- end of content wrapper -->

<div id="templatemo_footer_wrapper">

  <div id="templatemo_footer">
<!--      
        <div class="section_w195">
          <div class="header_05">Services</div>
            <ul class="footer_menu_list">
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Cum sociis</a></li>
                <li><a href="#">Donec quam</a></li>
                <li><a href="#">Nulla consequat</a></li>
                <li><a href="#">In enim justo</a></li>              
            </ul>
        </div>
        
        <div class="section_w195">
          <div class="header_05">About</div>
            <ul class="footer_menu_list">
                <li><a href="#">Nullam quis</a></li>
                <li><a href="#">Sed consequat</a></li>
                <li><a href="#">Cras dapibus</a></li> 
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Cum sociis</a></li>                
            </ul>
        </div>
               
        <div class="section_w195 section_w195_last">
          <div class="header_05">Cool links</div>
            <ul class="footer_menu_list">
                <li><a href="#">CSS Templates</a></li>
                <li><a href="#">Flash Templates</a></li>
                <li><a href="#">Web Design Blog</a></li>
                <li><a href="#">WordPress Themes</a></li>
        <li><a href="#">Flash Gallery</a></li>
          </ul>
        </div>

        
        <div class="section_w330">
      <div class="header_05">Photo Gallery</div>  
            
            <ul class="gallery">
              <li><a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a></li>
                <li><a href="#"><img src="images/templatemo_image_02.jpg" alt="image" /></a></li>
                <li><a href="#"><img src="images/templatemo_image_03.jpg" alt="image" /></a></li>
                <li><a href="#"><img src="images/templatemo_image_04.jpg" alt="image" /></a></li>
                
                <li><a href="#"><img src="images/templatemo_image_05.jpg" alt="image" /></a></li>
                <li><a href="#"><img src="images/templatemo_image_06.jpg" alt="image" /></a></li>
                <li><a href="#"><img src="images/templatemo_image_07.jpg" alt="image" /></a></li>
                <li><a href="#"><img src="images/templatemo_image_08.jpg" alt="image" /></a></li>
      </ul>
 -->           
                
        </div>
        <div class="margin_bottom_20"></div>
        Copyright © 2024 Lindsay Andersen <br>
        <a href="mailto:lca8de@virginia.edu">lca8de@virginia.edu</a>
        | Credit: <a href="http://www.templatemo.com"> www.templatemo.com</a>
        
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
    

<!--  Free CSS Templates by TemplateMo.com  -->
<!-- templatemo 124 media -->
<!-- 
Media Template 
http://www.templatemo.com/preview/templatemo_124_media 
-->
</body>
</html>



</body>
</html>
