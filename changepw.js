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
   
   
   return( true );
}
//</script>
