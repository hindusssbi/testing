<!DOCTYPE html>
<html>
<head>
	<title></title>
		 <!-- Jquery -->	
		  <script src="assets/javascript/jquery.min.js"></script> 
	 <!-- Bootstrap -->
			 <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css"> 
		  <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script> 
</head>
<body>
	<br>
	<br>
	<center><h1>Registration Form</h1></center>
	<br>
	<br>
<div class="container">
	<div class="row">
		<div class="col-xs-3 col-md-4"></div>
		<div class="col-xs-6 border col-md-4">
			
			
			<form action="" method="post" >
				<label>Name</label>
				<input type="text" name="name" id='name' class="name form-control"><span id='sp1'></span><br>
				<label>Email</label>
				<input type="email" name="mailid" id="mailid" class="mailid form-control"><span id='sp2'></span><br>
				<label>Phone Number</label>
				<input type="number" name="mobileno" id='mobileno' class="mobileno form-control"><span id='sp3'></span><br>
				<center><input type="submit" name="submit" value="signup" class="btn btn-success" onclick="return frm_validation1()"></center><br>
			</form>
		</div>
		<div class="col-xs-3 col-md-4"></div>
	</div>
</div>
<script>
function frm_validation1()
{
	
	var name=document.getElementById('name').value;
	var email=document.getElementById('mailid').value;
	var mobileno=document.getElementById('mobileno').value;

	 
	if(name=='')
	{
		alert("Please Enter Your Name");
		document.getElementById('name').focus();
		return false;
	}
	if(email=='')
	{
		alert("Please Enter Your Mail ");
		document.getElementById('mailid').focus();
		return false;
	}
	if(mobileno=='')
	{
		alert("Please Enter Your Password");
		document.getElementById('mobileno').focus();
		return false;
	}
	
	return true;
}
function frm_validation1()
{
	
	var name=document.getElementById('name').value;
	var email=document.getElementById('mailid').value;
	var mobileno=document.getElementById('mobileno').value;

	 
	if(name=='')
	{
		alert("Please Enter Your Name");
		document.getElementById('name').focus();
		return false;
	}
	if(email=='')
	{
		alert("Please Enter Your Mail ");
		document.getElementById('mailid').focus();
		return false;
	}
	if(mobileno=='')
	{
		alert("Please Enter Your Password");
		document.getElementById('mobileno').focus();
		return false;
	}
	
	return true;
}
/*function name1(n)
{
	//alert("change");
	if(n.length>1)
	{
		
		document.getElementById("n_err").innerHTML = ""; //INSECURE!!
		
   }
	   $.ajax({
		   		type:"post",
                url:"check_name",
                data:{name:n},
                success:function(data)
                {
                    $("#n_err").text(data);
                }
		   });
}
function mail1(n)
{
	if(n.length>1)
	{
		
		document.getElementById("m_err").innerHTML = ""; //INSECURE!!	
   }
	$.ajax({
   		type:"post",
        url:"check_mail",
        data:{mail:n},
        success:function(data)
        {
            $("#m_err").text(data);
        }
   });
}
function pswd1(n)
{
	if(n.length>1)
	{
		
		document.getElementById("p_err").innerHTML = ""; //INSECURE!!
		
   }
}
function addr1(n)
{
	if(n.length>1)
	{
		
		document.getElementById("a_err").innerHTML = ""; //INSECURE!!
		
   }
}*/
</script>
</body>
</html>
