
function sec() 
{
	var email=document.f1.e1.value;
	var password=document.f1.p1.value;


	if(email.length==0||password.length==0) {

		if(email.length==0) {
		s1.innerHTML="<font color='red'>Field is Required</font>";

		}


		if(password.length==0) {
		s2.innerHTML="<font color='red'>Field is Required</font>";

		}
	}

	else if (email.length>50||password.length>50) {

		if(email.length>50) {
		s3.innerHTML="<font color='red'>Characters should be less than 50 </font>";

		}

		if(password.length>50) {
		s4.innerHTML="<font color='red'>Characters should be less than 50 </font>";

		}
	}

	else {
		document.f1.submit();
	}
}

function secureSignUp() {
	var name=document.f1.n1.value;
	var email=document.f1.e1.value;
	var phone=document.f1.ph1.value;
	var location=document.f1.l1.value;
	var password=document.f1.pa1.value;

	if(name.length==0||email.length==0||password.length==0) {

		if(name.length==0) {
		s1.innerHTML="<font color='red'>Field is Required</font>";

		}

		if(email.length==0) {
		s2.innerHTML="<font color='red'>Field is Required</font>";

		}

		if(phone.length==0) {
		s4.innerHTML="<font color='red'>Field is Required</font>";

		}

		if(password.length==0) {
		s9.innerHTML="<font color='red'>Field is Required</font>";

		}
	}

	else if (name.length>50||email.length>30||password.length>20) {

		if(name.length>50) {
		s5.innerHTML="<font color='red'>Characters should be less than 50 </font>";

		}

		if(email.length>30) {
		s6.innerHTML="<font color='red'>Characters should be less than 30 </font>";

		}

		if(password.length>20) {
		s10.innerHTML="<font color='red'>Characters should be less than 20 </font>";

		}
	}

	else {
		document.f1.submit();
	}

}