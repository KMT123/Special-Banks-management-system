<?php
session_start();
?>
<!DOCTYPE html PUBLIC "BANGALORE SILICON VALLEY BANK">
<html>

<title>BSVB | Home</title>

<link href="style.css" rel="stylesheet" type="text/css">

<!-- CIRCULAR ONLINE SERVICES CSS START -->

<link href="circle/circle.css" rel="stylesheet" type="text/css">

<!-- CIRCULAR ONLINE SERVICES CSS END -->


<!-- SUB MENU BAR CSS START -->

<link href="submenu.css" rel="stylesheet" type="text/css">

<!-- SUB MENU BAR CSS END -->


<script src="jquery-1.11.0.min.js"></script>

	<script src="jquery-migrate-1.2.1.min.js"></script>

<!-- simple image slider css start-->

<style>
.mySlides {display:none;}
</style>

<!--simple image slider css end-->


<!-- SEARCH BUTTON CSS Start -->

<style>
input[type=text] {
    width: 200px;
    box-sizing: border-box;
    border: 5px solid #ccc;
    border-radius: 6px;
    font-size: 12px;
    background-color: white;
    background-image: images/search.png;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 8px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 35%;
	
}
</style>
<!-- SEARCH BUTTON CSS END -->



<!--CUSTOMER LOGIN CSS-->

<style>
.loginform label {
	display: block;
	color: #999;
}
.cf:before,
.cf:after {
    content: ""; 
    display: table;
}

.cf:after {
    clear: both;
}
.cf {
    *zoom: 1;
}
:focus {
	outline: 0;
}
.loginform {
	width: 650px;
	margin: 10px auto;
	padding: 25px;
	background-color: rgba(250,250,250,0.5);
	border-radius: 5px;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2), 
    			inset 0px 1px 0px 0px rgba(250, 250, 250, 0.5);
    border: 1px solid rgba(0, 0, 0, 0.3);
}
.loginform ul {
	padding: 0;
	margin: 0;
}
.loginform li {
	display: inline;
	float: left;
}
.loginform input:not([type=submit]) {
	padding: 5px;
	margin-right: 20px;
	border: 1px solid rgba(0, 0, 0, 0.3);
	border-radius: 3px;
	box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.1), 
				0px 1px 0px 0px rgba(250, 250, 250, 0.5) ;
}
.loginform input[type=submit] {
	border: 1px solid rgba(0, 0, 0, 0.3);
	background: #64c8ef; /* Old browsers */
	background: -moz-linear-gradient(top,  #64c8ef 0%, #00a2e2 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#64c8ef), color-stop(100%,#00a2e2)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #64c8ef 0%,#00a2e2 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #64c8ef 0%,#00a2e2 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #64c8ef 0%,#00a2e2 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #64c8ef 0%,#00a2e2 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#64c8ef', endColorstr='#00a2e2',GradientType=0 ); /* IE6-9 */
	color: #fff;
	padding: 5px 35px;
	margin-right: 0;
	margin-top: 15px;
	border-radius: 13px;
	text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.3);
}
</style>


<!--CUSTOMER LOGIN CSS CLOSE-->

</head>

<body background="5.jpg">
<?php
include("database.php");
extract($_POST);
if(isset($submit))
{
	$rs=mysql_query("select * from account where C_email='$loginid' and C_pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['C_email']=$loginid;
	}
}
if (isset($_SESSION['C_email']))
{
header("Location: login.php");

		exit;
}
?>

<div id="main_impwrapper">
<div class="wrapper_content">
<!-- TOP HEADER MENU BAR-->
<div class="menu"><ul>
    <li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    
    <a href="index.php">Home</a>

    </li>

    <li><a href="">About Us</a></li>
    <li><a href="">Tenders</a></li>
    <li><a href="">Career</a></li>
    <li><a href="">Photos</a></li>
    <li><a href="">Contact Us</a></li>
    
</ul>
<form>
&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="search" placeholder="Search..">
</form>

</div>

<!-- TOP HEADER MENU BAR CLOSE-->



<!-- LOGO PART START -->
<table cellpadding="0" cellspacing="0" width="90%">
  <tbody >
    <tr >
          <td>  
<a href="index.html"><img src="images/logo1.jpg" height="130" width="260"/></a>
 
</td>   
       <td>    
            <div class="loginform cf">
	<form name="login" method="post" >
		<ul>
			<li>
				<label for="Email ID">Email ID</label>
				<input type="email" name="loginid" id="loginid2"  placeholder="xyz@pqr.com" required>
			</li>
			<li>
				<label for="password">Password</label>
				<input type="password" name="pass" id="pass2" placeholder="********" required></li>
			<li>
				<input type="submit" value="Login" id="submit" name="submit">
			</li>
        <li>    <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
            </li>
		</ul>
	</form>
</div>
    
</td>
      
    </tr>

</tbody></table>

<!-- LOGO PART END -->




<!-- MENU WITH IN MENU SCRIPT AND CSS -->





<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<style>
.dropbtn {
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #333;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #000;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px #f99000;
}

.dropdown-content a {
    color: #FFFFFF;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>



<!-- MENU WITH IN MENU SCRIPT AND CSS -->





<!-- TOP HEADER SUB MENU BAR-->




<div class="menu1"><ul>

    <li><a href="#">Personal Banking</a>
    
    <ul class="sub-menu" >
    
<li><a href="#">Savings Fund Account</a></li>
<li><a href="#">Current Account</a></li>
<li><a href="#">FD Schemes</a></li>
<li><a href="#">Credit Schemes</a></li>
<li><a href="#">Capital Gain Account Scheme-1988</a></li>
<li><a href="#">Doorstep Banking Services</a></li>
<li><a href="#">Cards</a></li>
<li><a href="#">Nomination Facilities</a></li>
<li><a href="#">Deceased Claim cases</a></li>

<li><a href="#">Centralised Banking Solution</a></li>

<li><a href="#">View Your Loan Application Status</a></li>

<li><a href="#">Time Frame for Disposal of Loan Proposals</a></li>

<li><a href="#">Time Norms for Sanctions of Loan Proposals of Retail Lending Schemes</a></li>

</ul>    

      </li>
    
    <li><a href="#">Social Banking</a>

    <ul class="sub-menu" >

<li><a href="#">Business Responsibility Report</a></li>
<li><a href="#">CSR Initiatives</a></li>
<li><a href="#">Financial Inclusion</a></li>
<li><a href="#">Priority Sector</a></li>

</ul>
    
    </li>

    <li><a href="#">MSME Banking</a>       
    </li>
        
    <li><a href="#">Agricultural Banking</a>
    <ul class="sub-menu" >
<li><a href="#">Agri Business Cell</a></li>
<li><a href="#">Farmers</a></li>
<li><a href="#">DebtWaiver</a></li>
</ul>
        
    </li>
      
    <li><a href="#">International Banking</a>
    <ul class="sub-menu" >
<li><a href="ro.html">Representative Office</a></li>
<li><a href="nri.html">NRI Desk</a></li>
<li onclick="myFunction()" class="dropbtn">Trade Finance Services

<div id="myDropdown" class="dropdown-content">        
    <a href="es.html">Export Services</a>
    <a href="is.html">Import Services</a>
    <a href="cb.html">Correspondent Banking</a>
    <a href="os.html">Other Services</a>
 
</div>
</li>
</ul>

</li>
    
    <li><a href="#">Cooperate Banking</a>

    <ul class="sub-menu" >

<li><a href="dc.html">Delivery Channel</a></li>

    <li><a href="ei.html">Educational Institutions</a></li>

   <li><a href="entertain.html">Entertainment Industry</a></li>

<li><a href="hr.html">Hotels & Restaurants</a></li>

    <li><a href="bd.html">Builders & Developers</a></li>

    <li><a href="h.html">Hospitals</a></li>

</ul>
</li>    
    
    <li><a href="#">Other Services</a>
<ul class="sub-menu" >

<li><a href="ct.php">Check Transactions</a></li>
<li><a href="#">Complaints</a></li>
</ul>
</li>

</ul>

<!-- TOP HEADER SUB MENU BAR END-->


<!-- IMAGE SLIDER START -->

<div class="w3-content w3-section" >
  <img class="mySlides" src="fslider/1.jpg" style="width:100%">
  <img class="mySlides" src="fslider/2.jpg" style="width:100%">
  <img class="mySlides" src="fslider/3.jpg" style="width:100%">
  <img class="mySlides" src="fslider/4.jpg" style="width:100%">
  <img class="mySlides" src="fslider/5.jpg" style="width:100%">
  <img class="mySlides" src="fslider/6.jpg" style="width:100%">
  <img class="mySlides" src="fslider/7.jpg" style="width:100%">
  <img class="mySlides" src="fslider/8.jpg" style="width:100%">
  <img class="mySlides" src="fslider/9.jpg" style="width:100%">
  <img class="mySlides" src="fslider/10.jpg" style="width:100%">
  <img class="mySlides" src="fslider/11.jpg" style="width:100%">
  <img class="mySlides" src="fslider/12.jpg" style="width:100%">
  <img class="mySlides" src="fslider/13.jpg" style="width:100%">
  <img class="mySlides" src="fslider/14.jpg" style="width:100%">
</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<!-- IMAGE SLIDER END -->





<!-- ONLINE SERVICES START -->


<div id="right">
    <div class="right-main">
      <div class="welcome">Welcome</div>
   
    <div class="inner-text">
            
       <div id="body1">

<div class="body1">
	  <div class="section1">
				 
	<div class="grid_111">
 
		<div class="fmcircle_out">

			<a href="" target="_blank">

				<div class="fmcircle_border">

					<div class="fmcircle_in fmcircle_purpol">

						<span>LOANS</span><img src="circle/loans.jpg" alt="Loans">

					</div>

				</div>

			</a>

		</div>

	</div>
  </div>
  
  <div class="section1">
  
    <div class="grid_21">

		<div class="fmcircle_out">

			<a href="mb.html" target="_blank">

				<div class="fmcircle_border">

					<div class="fmcircle_in fmcircle_blue">

						<span>MOBILE BANKING</span><img src="circle/mb.jpg" alt="Mobile Banking">

					</div>

				</div>

			</a>

		</div>

	</div>

      </div>
      <div class="section1">
    <div class="grid_11">

		<div class="fmcircle_out">

			<a href="pg3.html" target="_blank">

				<div class="fmcircle_border">

					<div class="fmcircle_in fmcircle_red">

						<span>LOACTE</span><img src="circle/locate.jpg" alt="LOCATION TARCK">

					</div>

				</div>

			</a>

		</div>

	</div>

      

</div>


<div class="section1">
				 
	<div class="grid_111">
 
		<div class="fmcircle_out">

			<a href="" target="_blank">

				<div class="fmcircle_border">

					<div class="fmcircle_in fmcircle_purpol">

						<span>APPLY FOR CARD</span><img src="circle/atm.jpg" alt="Cards">

					</div>

				</div>

			</a>

		</div>

	</div>
  </div>
  

      <div class="section1">
    <div class="grid_11">

		<div class="fmcircle_out">

			<a href="pg3.html" target="_blank">

				<div class="fmcircle_border">

					<div class="fmcircle_in fmcircle_blue">

						<span>INTERNATIONAL MONEY TRANSFER</span><img src="circle/mt.jpg" alt="Money Transfer">

					</div>

				</div>

			</a>

		</div>

	</div>

      

</div>


      <div class="section1">
    <div class="grid_11">

		<div class="fmcircle_out">

			<a href="pg3.html" target="_blank">

				<div class="fmcircle_border">

					<div class="fmcircle_in fmcircle_red">

						<span>BILL PAYMENTS</span><img src="circle/bp.png" alt="">

					</div>

				</div>

			</a>

		</div>

	</div>

      

</div>



  




 </div>
</div>
</div></div>
</div>




<!-- ONLINE SERVICES END -->




<!-- RIGHT SIDE MARQUEE BAR START -->



<div id="left">
    <div id="left-main">
		<div class="l-head">IMPORTANT NOTICE</div>


<div class="quick1">

          <aside>

<style>

	.tabContainer{margin:10px 0;max-width:300px;width:100%;}

	.tabContainer .digiTabs{list-style:none;display:block;overflow:hidden;margin:0;padding:0px;position:relative;top:1px;}

	.tabContainer .digiTabs li{float:left;background-color:#46AAF7;border:1px solid #e1e1e1;padding:5px!important;cursor:pointer;border-bottom:none;margin-right:5px;font-family:verdana;font-size:.7em;font-weight:bold;color:#fff;}

	.tabContainer .digiTabs .active{background-color:#fff;color:#393939;}

</style>

<script type="text/javascript">

function tabs(x)

{

	var lis=document.getElementById("sidebarTabs").childNodes;

	

	for(i=0;i<lis.length;i++)

	{

		lis[i].className="";

	}

	x.className="active";

	var tab=x.id;

	switch(tab)

	{

	case "tab1":

		document.getElementById('popular').style.visibility='visible';

		document.getElementById('popular').style.display='block';

		document.getElementById('recents').style.visibility='hidden';

		document.getElementById('recents').style.display='none';

		document.getElementById('announce').style.visibility='hidden';

		document.getElementById('announce').style.display='none';

	break;

	case "tab2":

		document.getElementById('recents').style.visibility='visible';

		document.getElementById('recents').style.display='block';

		document.getElementById('popular').style.visibility='hidden';

		document.getElementById('popular').style.display='none';

		document.getElementById('announce').style.visibility='hidden';

		document.getElementById('announce').style.display='none';

	break;

	case "tab3":

		document.getElementById('announce').style.visibility='visible';

		document.getElementById('announce').style.display='block';

		document.getElementById('recents').style.visibility='hidden';

		document.getElementById('recents').style.display='none';

		document.getElementById('popular').style.visibility='hidden';

		document.getElementById('popular').style.display='none';

	break;

	default:

		document.getElementById('popular').style.visibility='visible';

		document.getElementById('popular').style.display='block';

		document.getElementById('recents').style.visibility='hidden';

		document.getElementById('recents').style.display='none';

		document.getElementById('announce').style.visibility='hidden';

		document.getElementById('announce').style.display='none';

	break;

	}

}

</script>
<div class="tabContainer">

    <ul class="digiTabs" id="sidebarTabs">

        <li id="tab1" class="active" onClick="tabs(this);"><i class="icon-flag"></i> <b>What's New</b></li>

        <li id="tab2" onClick="tabs(this);"><i class="icon-time"></i> <b>Announcements</b></li>

    </ul>

    </div>



    <div id="popular">



        <marquee scrollamount="2" id="scroller" onMouseOver="javascript:stop()" onMouseOut="javascript:start();" scrolldelay="5" behavior="scroll" direction="up" height="250px" width="80%" style="padding: 15px; height: 250px; width: 100%;">
  
        Policy number, Helpdesk details and Forms regarding Medical Insurance Scheme for Retirees and Spouse of Deceased Employees of BSVB<br><br>
        
        <a href="146625-properties of bank-18062016.pdf">List of properties under physical possession of the Bank</a><br><br>
        
        <a href="146701-locker-rent-charges.pdf">Notice regarding revision of SDV Locker Charges w.e.f.01-08-2016</a><br><br>
        
        </marquee>
<br><br>
       


    </div>




    <div id="recents" style="display:none;">



        <marquee scrollamount="2" id="scroller" onMouseOver="javascript:stop()" onMouseOut="javascript:start();" scrolldelay="1" behavior="scroll" direction="up" height="250px" width="80%" style="padding: 15px; height: 250px; width: 100%;">

       <a href="COMPLAINT_TO_LOCAL_POLICE.pdf">Complain to local police / cyber crime authorities against fictitious offer of money from abroad </a><br><br>
       
      <a href="RBI_NEVER_ASKS_BANK_DETAILS.pdf"> RBI Never ask for your bank account details</a><br><br>
     
        </marquee>
<br><br>
        <div align="left"><a href="" target="_blank">Read All Announcement ...</a></div>



    </div>



</aside>

</div>

    <p align="right"> <a href="#" class="back-to-top"></a></p>


    </div>
</div>

    
</div>




<!-- RIGHT SIDE MARQUEE BAR END -->





<!-- COPRIGHT BAR START -->





<div id="company-logo">

 <table width="1002" align="center" cellspacing="15"  bordercolor="#FFFFFF" bgcolor="#FFFFFF">

  <tbody><tr>
        <td>	
<div id="footer">
	     
      <div>
		<div1>
  			<p align="center">&copy Copyright <a href="index.html"><font color= "#c1c1c1">Bangalore Silicon Valley Bank</font></a> All rights reserved.<br><br>Website Designed & Developed by : <a href="pro.html" target="_blank"><font color= "#c1c1c1">MOHIT THAKUR DESIGNS.</font></a></p>
		</div1>
        <div>
				<h3>follow us:</h3><br>
				<a class="facebook" href="#">facebook</a>		
				<a class="twitter" href="#">twitter</a>
			</div>
       </div>
      
	</div>
     </td></tr></tbody></table>
     </div>


<!-- COPRIGHT BAR END -->




<!-- BACK TO TOP SCRIPT START -->



<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ($(window).scrollTop() > amountScrolled) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('body').animate({
		scrollTop: 0
	}, 'fast');
	return false;
});
</script>



<!-- BACK TO TOP SCRIPT END -->

</body></html>