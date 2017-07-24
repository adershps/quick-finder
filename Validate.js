//<script type="text/javascript">
function validate()
{ 
   if( document.StudentRegistration.username.value == "" )
   {
     alert( "Please Enter your UserName!" );
     document.StudentRegistration.username.focus() ;
     return false;
   }
   if( document.StudentRegistration.password.value == "" ||
           document.StudentRegistration.password.value.length < 6 )
   {
     alert( "Please Enter a minimum 6 digit Password!" );
     document.StudentRegistration.password.focus() ;
     return false;
   }
   if( document.StudentRegistration.cpassword.value == "" )
   {
     alert( "Please Re-Enter your Password!" );
     document.StudentRegistration.cpassword.focus() ;
     return false;
   }
   if( document.StudentRegistration.firstname.value == "" )
   {
     alert( "Please Enter your FirstName!" );
     document.StudentRegistration.firstname.focus() ;
     return false;
   }
   if( document.StudentRegistration.lastname.value == "" )
   {
     alert( "Please Enter your LastName!" );
     document.StudentRegistration.lastname.focus() ;
     return false;
   }
   
   if( document.StudentRegistration.address.value == "" )
   {
     alert( "Please Enter your Address!" );
     document.StudentRegistration.address.focus() ;
     return false;
   }
   
   if ( ( StudentRegistration.sex[0].checked == false ) && ( StudentRegistration.sex[1].checked == false ) )
   {
   alert ( "Please choose your Gender" );
   return false;
   }   
   if( document.StudentRegistration.university.value == "-1" )
   {
     alert( "Please choose your University" );
     document.StudentRegistration.university.focus() ;
     return false;
   }   
   if( document.StudentRegistration.branch.value == "-1" )
   {
     alert( "Please choose your Branch!" );
    
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
  if( document.StudentRegistration.age.value == "" ||
           isNaN( document.StudentRegistration.age.value) ||
           document.StudentRegistration.age.value.length != 2 )
   {
     alert( "Please Enter your Age!" );
     document.StudentRegistration.age.focus() ;
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
