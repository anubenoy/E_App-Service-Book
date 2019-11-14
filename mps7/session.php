
<html>
    <head>
        
  <link rel="stylesheet" href="home_style.css">
  <style>
  
.subnav {
	float: left;
	overflow: hidden;
  }
  
  .subnav .subnavbtn {
	font-size: 16px;  
	border: none;
	outline: none;
	color: white;
	padding: 14px 16px;
	background-color: inherit;
	font-family: inherit;
	margin: 0;
  }
  
 
  
  .subnav-content {
	display: none;
	position: absolute;
	left: 0;
	background-color: red;
	width: 100%;
	z-index: 1;
  }
  
  .subnav-content a {
	float: left;
	color: white;
	text-decoration: none;
  }
  
  .subnav-content a:hover {
	background-color: #eee;
	color: black;
  }
  
  .subnav:hover .subnav-content {
	display: block;
  }

  </style>
</head>
    <body>
    <div class="headerBox">

<div class="headerTitleBox">
<div class="headerTitle">Your E-appliance Doctor</div>
</div>


<div class= "navbar"> 
<nav>
 <a class="active" href="home_new.htm"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="serviceBook.html"><i class="fa fa-fw fa-edit"></i> Book Service</a> 
  <a href=".contacts"><i class="fas fa-phone"></i> Contact</a> 
   <a href="index.html"><i class="fa fa-fw fa-user"></i> Login</a>
    <div class="subnav">
    <button class="subnavbtn">Partners </button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
</nav>
</div>


</div>
</body>
</html>