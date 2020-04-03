<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Practical Tips</title>
			<meta charset="utf-8">
	 	<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">

</head>
<style >
	
body
{
	  background: rgb(177, 128, 38);
	 height: 2000px;
	 
    background-size:cover ;
}

.column
{
	background-color: rgb(223, 194, 167);
	margin:0 15px 25px;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	border-radius: 15px;
	flex-basis: 33%;
}

.card
{
	padding: 15px 25px;

}
.container
{
	/*max-width: 1170;*/
	width: 100%;
	margin:0 auto;
	display:flex;
}
.divinfo 
{
	padding-right: 7%; 
	padding-left: 5%;
	font-family: Times New Roman;
	color: rgb(82, 57, 24);
	font-size: 65px;
}
.divinfo p
{
	font-size: 30px;
	color: black;
}



  .menu{

  margin:0px;
  padding:0px;
  font-weight:bold



}
.menu ul{
  background:#333;
  height:35px;
  list-style:none;
  margin:0;
  padding:0;
   

}

.menu li
{
  float:left;
  padding:0px;

}

.menu li a
 {
  background:#333; 

  bottom right no-repeat;
  color:#ccc;
  display:block;
  font-weight:normal;
  line-height:60px;
  margin:0px;
  padding:0px 106.75px;
  text-align:center;
  text-decoration:none;
  font-family: Arial;
}

.menu li a:hover, .menu ul li:hover a
{
  background:#556B2F bottom center no-repeat;
  color:#FFF;
  text-decoration:none;


  font-family: Arial;

}
.menu li ul
{
  background:#333;
  display:none;
  height:auto;
  padding:0px;
  margin:0px;
  border:0px;
  position:absolute;
  width:210px;
  z-index:200;
  font-family: Arial;

}

.menu li:hover ul
{
  display:block;
width:315px;


}
.menu li li
{
  display:block;
  float:none;
  margin:0px;
  padding:0px;
width:315;

}

.menu li:hover li a
{
  background:none;

}

.menu li ul a
{
  display:block;
  height:60px;
  font-size:17px;
  font-family: Arial;
  margin:0px;
  padding:0px 10px 0px 100px;
  text-align:left;


}

.menu li ul a:hover, .menu li ul li:hover a
{
  background:#556B2F center left no-repeat;
  border:0px;
  color:#fff;
  text-decoration:none;
  position: relative;
  border:1px solid white;
    transition: 0.5s;
}

.menu p
{
  clear:left;
}


</style>
<body>

  <div class="menu">
    <ul>
    <li><a href="../index.php"> <i class="ion-ios-home"></i>  Home</a></li>
    <li><a href="TypesGrountSoils.php"><i class="ion-ios-paperplane"></i> Type Soil</a></li>
    <li><a href="UseGrountSoils.php"><i class="ion-ios-paperplane"></i>  Use Case</a></li>
    <li><a href="PracticalTips.php"><i class="ion-ios-paperplane"></i> Practical Tips</a></li>
<?php
if(!isset($_SESSION['user_id'])):
?>
        <li><a href="../../login.html"><i class="ion-checkmark-circled"></i> Try Yourself</a></li>
<?php
else: 
?>  
    <li>
    <a href="#"><i class="ion-checkmark-circled"></i> Try Yourself</a>
      <ul>
          <li> <a href="stylesGardenn/chinese.html">Easy</a></li>
          <li> <a href="stylesGardenn/english.html">Medium</a></li>
          <li> <a href="stylesGardenn/italian.html">Hard</a></li>
      </ul>
  </li>
        </ul>
<?php endif; ?>
  </div>
<br><br>

<div style="padding-right: 5%;padding-left: 5%">

<div style="padding-right: 5%;padding-left: 5%">
    <br>
		<div class="column">
			<div class="card">
           		<div class="container">
           			<div class="divinfo">
						   <center><h3>How to Determine Your Soil Type ?</h3></center>
						    <p>When talking soil, a little knowledge goes a long way. And most important for urban farmers is recognizing your soil type and its health. Some soils are naturally fertile and need little altering, but others need an overhaul. Knowing where you stand with your soil helps you determine what fertilizers and amendments you need to add before you get started.</p>
							<p>Just like plants and people, soils have different characteristics that make them unique. Knowing the kind of soil you have helps you determine its strengths and weaknesses. While soil is composed of many elements, the place to begin is with your soil type. You just have to observe the composition of the soil's particles.</p>
						</div>
                       <div>
                        <img src="img34.png" style="width: 300px;">
                    </div>

           		</div>
			</div>
		</div>



    <br>
		<div class="column">
			<div class="card">
           		<div class="container">
					<div>
						<img src="img35.png" style="width: 250px;">
					</div>
           			<div class= "divinfo">

           				<p>Urban soils have special considerations you need to know about. Certain contaminants like lead and other hazardous substances are potential pollutants in some city soils. Testing can tell you whether you have any cause for concern. Luckily, if your soil has elevated toxic levels, many tips and techniques can help fix the contaminated soil and build it back to optimum health. </p>
           			</div>


           			

           		</div>
			</div>
		</div>



<br>
		<div class="column">
			<div class="card">
           		<div class="container">

           			
           			<div class="divinfo">
           				<center>The squeeze test</center>
           				<p>To do this test, be sure your soil is damp, but not soaking wet. Grab a small handful of the soil in your hand. Rub some of the soil between your fingers. If it feels gritty, it's mostly sand. If it feels slick and slimy, it's mostly clay. </p>
           			</div>
           		</div>
			</div>
		</div>



    <br>
		<div class="column">
			<div class="card">
           		<div class="container">

           			<div class= "divinfo">
           				<center>The ribbon test</center>

           				<p>Take a handful of damp soil and make a ribbon by rolling the soil between your hands.

							If you can form a ribbon and hold it vertically without it breaking, you have mostly clay soil. If you can make a ribbon, but it breaks off when you try to hold it up, you probably have somewhere between 25 and 50 percent clay in your soil. If you can't make a ribbon at all, chances are your soil is more than half sand.</p>
           			</div>


           			

           		</div>
			</div>
		</div>



		<br>
		<div class="column">
			<div class="card">
           		<div class="container">

					

           			<div class= "divinfo">
           				<center>The jar test</center>

           				<p>The jar test is for the scientists in the crowd. It's a bit more precise than the other tests. To do this test, take soil from a number of places in your garden and mix the samples together in a bucket. Scoop up a cup of your soil and follow these steps:</p>

							<p><i class="ion-leaf"></i> Let the soil dry out on a flat surface until it becomes crumbly.</p>
							
							<p><i class="ion-leaf"></i>  Remove any roots, stones, or debris and crush it into a powder with a mortar.</p>
							
							<p><i class="ion-leaf"></i>  Place a 1-inch-thick layer in the bottom of a quart-sized clear glass jar.</p>
							
							<p><i class="ion-leaf"></i>  Fill the jar two-thirds full with water and add a pinch of salt (or 1 teaspoon of liquid dish detergent) to help the soil particles separate. Shake vigorously.</p>
							
							<p><i class="ion-leaf"></i>  Let the solution settle into different layers.</p>
							
							<p><i class="ion-leaf"></i>  The sand will settle quickly (within a few minutes) to form the bottom layer. A few hours later, the silt will settle. You should be able to see a visual difference between the large sand particles and the smaller silt particles. The clay may take days to settle out.</p>
							
							<p><i class="ion-leaf"></i>  Measure the total amount of soil, and then measure each layer.</p>
							
							<p><i class="ion-leaf"></i>  To determine the percentage of each soil type, you need to do a little math. If, for example, the total amount of soil is 1 inch deep and you had a 1/2-inch-thick layer of sand, your soil is 50 percent sand. If the next layer (silt) is 1/4 inch deep, you have 25 percent silt. The remaining 25 percent, then, is clay.</p>
           			</div>


           			

           		</div>
			</div>
		</div>


</div>
</div> 
      <!-- ----------------------------- -->

<style>

.columnf
{

  margin:0 15px 25px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  border-radius: 15px;
  flex-basis: 33%;
}

.cardf
{
  padding: 15px 25px;
  background-color:#6B8E23;
  border-radius: 18px;



}
.containerf
{
  /*max-width: 1170;*/
  width: 100%;
  margin:0 auto;
  display:flex;
}


.loginf
{
   font-size: 20px;
   background-color:#6B8E23;
   padding-top: 50px;
   padding-bottom: 50px;
   text-align: center;

}

.loginf a
{
  text-decoration: none;
  color:white;
  padding: 11px 60px;
  border:1px solid white;

}

.loginf a:hover
{

  background-color:#6B8E23;
  color:white;
  transition: all 0.01s ease;
  border:3px solid white;
}



*, *:before, *:after {
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
}

figure {
  width: 589px;
  height: 150px;
  background-color:#6B8E23;
  color: #fff;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  text-align: center;

  position: relative;
}
figure h2 {
  transition: 0.2s;
  transform: translateY(20px);
}
figure p {
  transition: 0.2s;
  transform: translateY(-20px);
  opacity: 0;
  visibility: hidden;
}
figure:before {
  content: '';
  position: absolute;
  top: 5%;
  right: 5%;
  bottom: 5%;
  left: 5%;
  border-top: solid 2px;
  border-bottom: solid 2px;
  transition: 0.6s;
  transform: scaleX(0);
}


figure:after {
  content: '';
  position: absolute;
  top: 5%;
  right: 5%;
  bottom: 5%;
  left: 5%;
  border-left: solid 2px;
  border-right: solid 2px;
  transition: 0.6s;
  transform: scaleY(0);
}

figure:hover:before, 
figure:hover:after{
  transform: scale(1);
}

figure:hover h2, 
figure:hover p {
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
}


.cardf i
{
   font-size: 27px;
}


</style>

<!-- div pading -->


     <div class="container">


           <div class="columnf">
              <div class="cardf">
                <figure>
                   <figcaption>
                     <h2>Wnat to try more Gardening Concepts?</h2>
                      <i class="ion-arrow-down-b"></i> 
                  </figcaption>
                </figure><div class="loginf"> <a href="../../../index.php"> <i class="ion-reply-all"></i> More Concepts</a></div>
             </div>
           </div>




          <div class="columnf">
              <div class="cardf">
              <figure>
                <figcaption>
                  <h2>Want to try yourself on this topic?</h2>
                   <i class="ion-arrow-down-b"></i>
               </figcaption>
               </figure>
                <div class="loginf"> <a href="../../../index.php"> <i class="ion-reply-all"></i> More Concepts</a></div>
              </div>
          </div>

</div>


		
</body>
</html>
