$(document).ready(function() {



$("#carreerpost").click(function() {
 
var nme = $("#name").val();  
var dob = $("#dob").val();   
var adrs1 = $("#address1").val();   
var city = $("#city").val();   

var state = $("#state").val();   
var mobile = $("#mobile").val();   
var email = $("#email").val();   
 
if(nme=="")
{
alert("Name Required!");
$("#name").focus();
return false;
}
if(dob=="")
{
alert("Date of Birth Required!");
$("#dob").focus();
return false;
}
if(adrs1=="")
{
alert("Address Required!");
$("#address1").focus();
return false;
}
if(city=="")
{
alert("City Required!");
$("#city").focus();
return false;
}
if(state=="")
{
alert("State Required!");
$("#state").focus();
return false;
}
if(country=="")
{
alert("Country Required!");
$("#country").focus();
return false;
}


if(mobile=="")
{
  alert("Mobile No. Required!");
 $("#mobile").focus();
 return false;
}
 if(email=="")
 {
 alert("E-mail  Required!");
 $("#email").focus();
 return false;
 }
   
if( !validateEmail(email))
 {
 alert("Invalid E-mail Address!");
 $("#email").focus();
 return false;
 }

var qualification = $("#qualification").val();   
var languages = $("#languages").val();   
 if(qualification=="")
{
alert("Qualification  Required!");
$("#qualification").focus();
return false;
}
 if(languages=="")
{
alert("Languages Known  Required!");
$("#languages").focus();
return false;
}

var expr_sts = $('input[name=experience_status]:checked').val();

if(expr_sts>0)
{
	
	var prs_emp = $("#presentemployer").val();   
	var ctcnow = $("#ctcnow").val();   
	var ctcexpe = $("#ctcexpected").val();   
	var resume = $("#resume").val();   
	 if(prs_emp=="")
	{
	alert("Present Employer  Required!");
	$("#presentemployer").focus();
	return false;
	} if(ctcnow=="")
	{
	alert("Present CTC Required!");
	$("#ctcnow").focus();
	return false;
	} if(ctcexpe=="")
	{
	alert("Expected CTC  Required!");
	$("#ctcexpe").focus();
	return false;
	}
	 if(resume=="")
	{
	alert("Resume Required!");
	$("#resume").focus();
	return false;
	}


}
 
 
 
   var myform = document.getElementById("careerform");
    var fd = new FormData(myform );
	
	
console.log(fd);	

var confirm1 = confirm('Are  you Confirm to Save!');

    if (confirm1) { 
		  $.ajax({
		 url:"careerpost.php",
		 type:'POST',
 		data: fd,
 		 processData: false,
         contentType: false,
		 success:function(result)
 			 {  
   				if(result==1)
				{
 				alert('Record Saved Sucessfully!');
				window.location.href='careers.php';
 				}
				else if(result == '-1')
				{
				alert('Warning: This Record Already Exists');
				}

	         }
  
	   });
	}
 

});

	
});
// JavaScript Document


function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   if( !emailReg.test( $email ) ) {
     return false;
   } else {
     return true;
   }
 }

