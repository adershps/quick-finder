//<script type="text/javascript">
function validate()
{ 
   
   if( document.StudentRegistration.password.value == "" ||
           document.StudentRegistration.password.value.length < 6 )
   {
     alert( "Please Enter your Password!" );
     document.StudentRegistration.password.focus() ;
     return false;
   }
   
  if( document.StudentRegistration.npassword.value == "" ||
           document.StudentRegistration.npassword.value.length < 6 )
   {
     alert( "Please Enter a new Password!  (minimum 6 digits)" );
     document.StudentRegistration.password.focus() ;
     return false;
   } 

   if( document.StudentRegistration.cpassword.value == "" )
   {
     alert( "Please Re-Enter your Password!" );
     document.StudentRegistration.cpassword.focus() ;
     return false;
   }
   
   if( document.StudentRegistration.address.value == "" )
   {
     alert( "Please Enter your Address!" );
     document.StudentRegistration.address.focus() ;
     return false;
   }
  
 var email = document.StudentRegistration.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRegistration.emailid.focus() ;
     return false;
 }
 
  if( document.StudentRegistration.mobileno.value == "" ||
           isNaN( document.StudentRegistration.mobileno.value) ||
           document.StudentRegistration.mobileno.value.length != 10 )
   {
     alert( "Please provide a valid Mobile Number in 10 digits!" );
     document.StudentRegistration.mobileno.focus() ;
     return false;
   }
   return( true );
}
//</script>
