function validateForm(){
	var name = document.forms["myForm"]["name"].value;
	var email = document.forms["myForm"]["email"].value;
	
	if(name == ""){
		alert("Enter your name");
		return false;
	}
	
	if(email == ""){
		alert("Enter a valid email address");
		return false;
	}
}