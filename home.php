<?php
 session_start();
if (!isset($_SESSION['username'],$_SESSION['password'])) {
   header("location:index.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="web page is created by html. a web page also used to create a website. a web page may contain content like images, text, video, audio">
    <meta name="keywords" content="html page, web page, html web page, web page in html, how to make html web page, make web page in html">
     <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link rel='shortcut icon' href="images/icon.jpg" />
	<link rel="stylesheet" type="text/css" href="css1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- =============navigation bar start==============-->
<div class="navbar">
  <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Contact Us</a></li>
  <li><a href="#">ABOUT Us</a></li>
  <li><a href="#">FQA</a></li>
  <li><a href="#">VLOGS</a></li>
  <li><a href="logout.php">Logout</a></li>  
</ul>
</div>


<!-- ===========navigation bar end ==============-->
<!--==========main content start=======-->
<div class="row">
  <div class="main">
    <!--  main content start-->
    <div class="main-content">
    <h1>ONLINE WEB SITE</h1>
    <img src="images/banner.jpg" width="100%">
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
  </div>
 <!-- main content end-->
 <!--- secondary content start-->
 <div class="secondary-content">
 <h2>Second Heading</h2>
<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, yedndnd v graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
</div>
 <!--secondary content end-->
  <!-- page list start-->
 <h3>Web Page List</h3>
  <ul>
  <li>It is dummy text used in laying out print</li>
  <li>The passage is attributed to an unknown</li>
  <li>Malorum for use in a type specimen book</li>
  <li>Finibus Bonorum et Malorum for use</li>
  <li>This is dummy text list</li>
  </ul>
 <!--page list end-->
 <!-- page table start-->
 <div class="page-table">
 <h2>Web Page Table</h2>
 <table border="1" cellspacing="0" cellpadding="5" width="100%">
  <thead>
    <tr>
      <th>Table Heading - 1</th>
      <th>Table Heading - 2</th>
      <th>Table Heading - 3</th>
      <th>Table Heading - 5</th>
      <th>Table Heading - 5</th>
    </tr>
    <tr>
      <td>Row-1 Column-1 </td>
      <td>Row-1 Column-2 </td>
      <td>Row-1 Column-3</td>
      <td>Row-1 Column-4 </td>
      <td>Row-1 Column-5 </td>
    </tr>
      <tr>
      <td>Row-2 Column-1 </td>
      <td>Row-2 Column-2 </td>
      <td>Row-2 Column-3</td>
      <td>Row-2 Column-4 </td>
      <td>Row-2 Column-5 </td>
    </tr>
        <tr>
      <td>Row-3 Column-1 </td>
      <td>Row-3 Column-2 </td>
      <td>Row-3 Column-3</td>
      <td>Row-3 Column-4 </td>
      <td>Row-3 Column-5 </td>
    </tr>
      <tr>
      <td>Row-4 Column-1 </td>
      <td>Row-4 Column-2 </td>
      <td>Row-4 Column-3</td>
      <td>Row-4 Column-4 </td>
      <td>Row-4 Column-5 </td>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
</div>


		

    <!--===============main content end=============-->
  <!--===========sidebar start ============-->
   <div class="sidebar">
<!-- about section start -->
    <div class="about">
    <h3>About Us</h3>
    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts</p>
</div>
<!-- about section end-->
<!-- Latest post start-->
    <div class="latest-post">
    <h3>Latest Post</h3>
    <ul>
      <li>It is dummy text used in laying out print</li>
  <li>The passage is attributed to an unknown</li>
  <li>Malorum for use in a type specimen book</li>
  <li>Finibus Bonorum et Malorum for use</li>
    <li>It is dummy text used in laying out print</li>
  <li>The passage is attributed to an unknown</li>
  <li>Malorum for use in a type specimen book</li>
  <li>Finibus Bonorum et Malorum for use</li>
</ul>
</div>
<!-- latest post end-->
<!-- popular post start-->
<div class="popular-post">
<h3>Popular Post</h3>
    <ul>
      <li>It is dummy text used in laying out print</li>
  <li>The passage is attributed to an unknown</li>
  <li>Malorum for use in a type specimen book</li>
  <li>Finibus Bonorum et Malorum for use</li>
    <li>It is dummy text used in laying out print</li>
  <li>The passage is attributed to an unknown</li>
  <li>Malorum for use in a type specimen book</li>
  <li>Finibus Bonorum et Malorum for use</li>
</ul>
    </div>
 <!--popular post end-->
  </div>
<!--===============sidebar end================-->
<!--===============footer section============-->
<div class="footer row">
  <div class="footer-col">
    <h3>first footer section</h3>
    <ul>
  <li>First footer Text</li>
  <li>Second footer Text</li>
  <li>Third footer Text</li>
  <li>Fourth footer Text</li>
  <li>Fifth footer Text</li>
  </ul>
  </div>
    <div class="footer-col">
      <h3>Second footer section</h3>
          <ul>
  <li>First footer Text</li>
  <li>Second footer Text</li>
  <li>Third footer Text</li>
  <li>Fourth footer Text</li>
  <li>Fifth footer Text</li>
  </ul>
  </div>
    <div class="footer-col">
      <h3>Third footer section</h3>
          <ul>
  <li>First footer Text</li>
  <li>Second footer Text</li>
  <li>Third footer Text</li>
  <li>Fourth footer Text</li>
  <li><a href="https://www.tiktok.com/">Tik Tok</a></li>
  </ul>
  </div>
 
</div>
<!--===================foooter section end==============-->
</body>
</html>