$(document).ready(function() {



$("#carreerpost").click(function() {
 
var nme = $("#name").val();  
var dob = $("#dob").val();   
var adrs1 = $("#address1").val();   
var city = $("#city").val();   

var state = $("#state").val();   
var mobile = $("#mobile").val();   
var email = $("#email").val();   
 
 
 
 
if ( $("#pref_position").length > 0 && $("#pref_position").val() ==""    ) {
	alert("Position Applied for Required!");
	$("#pref_position").focus();
	return false;
 } 
  
   
if ( $("#pref_location").length > 0 && $("#pref_location").val() ==""    ) {
	alert("Preferred Location Required!");
	$("#pref_location").focus();
	return false;
 } 
 
 
  
  
  
 
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

if(mobile=="" ||  mobile.length <10 )
{
 alert("Kindly Enter valid Mobile No.");
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
	
	
 
var confirm1 = confirm('Are  you Confirm to Send Your details?');

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
 				alert('Your Details has been sent Sucessfully!');
				window.location.href='careers.php';
 				}
				else if(result == '-1')
				{
				alert('Warning: This Record Already Exists');
				}else{
				 alert('Operation Failed!Please contact Administarator');
				}

	         }
  
	   });
	}
 

});



$("#qenquiry").click(function() {
 var nme = $("#name").val();  
var cname = $("#cname").val();  
var mobile = $("#mobile").val();   
var email = $("#email").val();   
var msg = $("#qu_message").val();   

if(nme=="")
{
alert("Name Required!");
$("#nme").focus();
return false;
}
if(cname==""){alert("Company Name Required!");$("#cname").focus();return false;}
if(mobile=="" ||  mobile.length <10 )
{
 alert("Kindly Enter valid Mobile No.");
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

 if(msg=="")
 {
 alert("Message  Required!");
 $("#qu_message").focus();
 return false;
 }

var enq_data = nme+'$'+cname+'$'+mobile+'$'+email+'$'+msg;

$("#cpenquiry").attr("disabled", true);

 		  $.ajax({
		 url:"site.php",
		 data: { enq_post: enq_data },
		 success:function(result)
 			 {  
   				if(result==1)
				{
 				alert('Your enquiry has been sent Sucessfully!');
				window.location.href='index.php';
 				}
				else if(result == '-1')
				{
				alert('Warning: This Record Already Exists');
				}

	         }
  
	   });



	
});











$("#om_enquiry").click(function() {
 
var nme = $("#name").val();  
 var cmpny = $("#company").val(); 
var cmpny_adrs = $("#company_addres").val(); 
var email = $("#email").val();   
var phone = $("#phone").val();   
var mobile = $("#mobile").val();  

var msg = $("#qu_message").val();   

if(nme=="")
{
alert("Your Name is  Required!");
$("#name").focus();
return false;
}
if(cmpny=="")
{
alert("Company Name Required!");
$("#company").focus();
return false;
}if(cmpny_adrs=="")
{
alert("Company Address Required!");
$("#company_addres").focus();
return false;
}
if(phone=="" ||  phone.length <7 )
{
alert("Kindly Enter valid Phone No.!");
$("#phone").focus();
return false;
}

if(mobile=="" ||  mobile.length <10 )
{
 alert("Kindly Enter valid Mobile No.");
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
 
 


//var enq_data = nme+'$'+mob+'$'+email+'$'+msg;

  var myform = document.getElementById("enquiry_form");
    var fd = new FormData(myform );
if (confirm("Do you want to Confirm to Send Your Enquiry?") ) 
   {  	
 		  $.ajax({
		 url:"site.php",
		 type:'POST',
 		data: fd,
 		 processData: false,
         contentType: false,
		 success:function(result)
 			 {  
				if(result==1)
				{
 				alert('Your Enquiry has been sent Sucessfully!');
				window.location.href='enquiry-omservice.php';
 				}
				else if(result == '-1')
				{
				alert('Warning: This Record Already Exists');
				}

	         }
  
	   });

   }


	
});










$("#otr_enquiry").click(function() {
 
var nme = $("#name").val();  
 var cmpny = $("#company").val(); 
var cmpny_adrs = $("#company_addres").val(); 
var email = $("#email").val();   
var boil_typ = $("#boiler_type").val();   
var capacity = $("#capacity").val();   

var msg = $("#qu_message").val();   

if(nme=="")
{
alert("Your Name Required!");
$("#name").focus();
return false;
}
if(cmpny=="")
{
alert("Company Name Required!");
$("#company").focus();
return false;
}if(cmpny_adrs=="")
{
alert("Company Address Required!");
$("#company_addres").focus();
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
 
 
if(boil_typ=="")
{
alert("Boiler Type Required!");
$("#boiler_type").focus();
return false;
}

 if(capacity=="")
 {
 alert("Plant Capacity  Required!");
 $("#capacity").focus();
 return false;
 }

//var enq_data = nme+'$'+mob+'$'+email+'$'+msg;

  var myform = document.getElementById("enquiry_form");
    var fd = new FormData(myform );
if (confirm("Do you want to Confirm \u275B Save \u275C ?") ) 
   {  	
 		  $.ajax({
		 url:"site.php",
		 type:'POST',
 		data: fd,
 		 processData: false,
         contentType: false,
		 success:function(result)
 			 {  
			 console.log(result);
   				if(result==1)
				{
 				alert('Your Enquiry has been sent Sucessfully!');
				window.location.href='enquiry-omservice.php';
 				}
				else if(result == '-1')
				{
				alert('Warning: This Record Already Exists');
				}

	         }
  
	   });

   }


	
});




$("#cpenquiry").click(function() {
 
var nme = $("#name").val();  
var mobile = $("#mobile").val();   
var email = $("#email").val();   
var msg = $("#ce_message").val();   

if(nme=="")
{
alert("Name Required!");
$("#name").focus();
return false;
}
if(mobile=="" ||  mobile.length <10 )
{
 alert("Kindly Enter valid Mobile No.");
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

 if(msg=="")
 {
 alert("Message  Required!");
 $("#ce_message").focus();
 return false;
 }



$("#cpenquiry").attr("disabled", true);


var enq_data = nme+'$'+mobile+'$'+email+'$'+msg;

 		  $.ajax({
		 url:"site.php",
		 data: { cp_enquiry: enq_data },
		 success:function(result)
 			 {  
   				if(result==1)
				{
 				alert('Your enquiry has been sent Sucessfully!');
				window.location.href='index.php';
 				}
				else if(result == '-1')
				{
				alert('Warning: This Record Already Exists');
				}

	         }
  
	   });



	
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










 function blockNonNumbers(obj, e, allowDecimal, allowNegative) {


        var key;
        var isCtrl = false;
        var keychar;
        var reg;
        if (window.event) {
            key = e.keyCode;
            isCtrl = window.event.ctrlKey
        }
        else if (e.which) {
            key = e.which;
            isCtrl = e.ctrlKey;
        }

        if (isNaN(key)) return true;
        keychar = String.fromCharCode(key);

        // check for backspace or delete, or if Ctrl was pressed
        if (key == 8 || isCtrl) {
            return true;
        }

        reg = /\d/;
        var isFirstN = allowNegative ? keychar == '-' && obj.value.indexOf('-') == -1 : false;
     //   var isFirstD = allowDecimal ? keychar == '.' && obj.value.indexOf('.') == -1 : false;
       // return isFirstN || isFirstD || reg.test(keychar);
	   
	    return isFirstN || reg.test(keychar);
	   
    }
	