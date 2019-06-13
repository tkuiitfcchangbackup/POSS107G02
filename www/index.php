<html>
<head>
<title>TKU</title>
<style>
body {
    background-color: #EEE;
    font-family: Helvetica, Arial, sans-serif
}

a {
    text-decoration: none;
    color: red;
}
h1, h2, h3{
    margin: 0;
}

{
    text-decoration: none;
    color: red
}

h1, h2, h3{
    margin:0;
}

#container {
      background-color: white;
      width: 1000px;
      margin-left: auto;
      margin-right: auto;
}

#header {
           background-color: #2B48B4;
           color: white;
	   text-align: center;
           padding: 20px;
}
#content {
      padding: 20px; 
}

#nav {
      width: 180px;
      float: left;
}

#nav ul {
       list-style-type:none;
       padding: 0;
}
#nav.selected {
    font-weight:bold;
}
#main{
    width: 700px;
    float: right;
}

#footer {
      clear: both;
      padding: 30px;
      background-color: #999999;
      color: white;
      text-align: right;
}
ul.reg{list-style-type:none;
padding:0;
overflow:hidden;
margin:-30px;

}
a.in:link, a.in:visited{
font-size:20px;
display:block;
padding:5px;
font-color:#85C1E9;
}

li.r{float:right;}
</style>
</head>
 <body>
      <div id="container">
            <div id="header">
		 <h1>TKU<h1>
		<ul id = "reg">
		<li class = "r"><a href = "signup.php" class="in"target = "view_window" >SIGN IN</a>
		<li class= "r"><a href = "register.php" class = "in" target = "view_window">SIGN UP<a>
		</ul>
	    </div>
       <div id="content">
           <div id="nav">
		 <h3>Navigation</h3>
		
                 <ul>
                      <li><a class="selected href=">Home</a></li>
                      <li><a href="">About</a></li>
		      <li><a href="">Contact</a></li>
		 </ul>
                 <h3>Category</h3>
		 <ul>
                     <li><a href="">Sport</a></li>
                     <li><a href="">Award</a></li>
                     <li><a href="">Credit</a></li>
                     <li><a href="">Professor</a></li>
                 </ul>
         </div>

	 <div id="main">
            <form action="" method="post">
            <div class="search">
                <input type="text" class="search_key" value"web search" />
                <input type="submit" class="submit" value"search">
                  </div>
                        </form>
                <h2></h2>
  <form action="" method="POST">
   <label> Name: 
    <input type="text" name="Name" class="Input" style="width: 225px" required>
   </label>
   <br><br>
   <label> Comment: <br>
    <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
   </label>
   <br><br>
   <input type="submit" name="Submit" value="Submit Comment" class="Submit">
  </form>

           </div>
     </div>
     <div id="footer">
	  
<a href="/intro/yuchi.md">TAI, YU-CHI</a>
<a href="/intro/KuanTing.md">CHEN KUAN TING</a>
<a href="/intro/wei.md">GE, WEI</a>
            Copyright &copy; 2019 
      </div>
     </div>
</html>
