<?php
     include "Header.php";
     $uname = "";
	 $pass = "";
	 if($_SERVER["REQUEST_METHOD"]=="POST"){
		 $uname =$_POST["uname"];
		 $pass =$_POST["pass"];
		 if($uname == "teacher1" && $pass == "1234"){
			 session_start();
			 $_SESSION["user"] = $uname;
			 header("Location: Dashboard.php");
		 }
		 
	 }
?>
<html>
  <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
          <style>
             body 
         {
                background:white;
         }

            .content 
         {
                max-width: 500px;
                margin: auto;
                background: white;
                padding: 10px;
         }
           input[type=submit]
         {
                  background-color: #4CAF50;
                  border: none;
                  color: white;
                  padding: 10px 20px;
                  text-decoration: none;
                  margin: 4px 2px;
                  cursor: pointer;
         }
           a:link, a:visited {
                 background-color: #4CAF50;
                 color: white;
                 padding: 8px 18px;
                 text-align: center;
                 text-decoration: none;
                 display: inline-block;
        }

       </style>
	</head>
       
	<body>
	 <div class="content">
		<form action=" " method="post">
		<h2 style = "color:#34495E;"><center> LOGIN </center></h2>
		<fieldset style="width:px; background-color:powderblue; padding: 40px 20px 40px 150px;">
			<table>
				<tr>
					<td><span><b>USERNAME</b></span></td>
					<td>:  <input type="text" name="uname" placeholder="Username" >

				</tr>
				 <tr>
					<td><span><b>PASSWORD</b></span></td>
					<td>:  <input type="password" name="pass" placeholder="Password">
                    </td>
                 </tr>
               </table>
             <br>
			<input type="Submit" name="Submit" value="Login">
            <a href="Home.php" target="_blank">Home</a>
		  </fieldset>
		</form>
        </div>
	</body>
</html>
