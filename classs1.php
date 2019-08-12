<!DOCTYPE html>
<html>
<body>

<h2>My First Web Page</h2>
<p>My First Paragraph.</p>
<p id="p1">Paragraph one </p>
<p id="p2">Paragraph two </p>
<p id="demo"></p>
<button onclick="hide_elements()" >Hide</button>
<button onclick="show_element()">Show</button>
<script>
	function hide_elements()
	{
		//alert('hi');
		document.getElementById('p1').style.display="none";

	}
	function show_element()
	{
		document.getElementById('p1').style.display="block";
	}
//	var length = 16;                               // Number
//var lastName = "Johnson";                      // String
//var x = {firstName:"John", lastName:"Doe"};    // Object
//document.getElementById("demo").innerHTML = 5 + 6;
</script>

</body>
</html> 
