//<script type="text/javascript">
function validate()
{  
if( document.login.password.value == "" )
   {
     alert( "Please Enter your Password!" );
     document.login.password.focus() ;
     return false;
	}
if( document.login.username.value == "" )
   {
     alert( "Please Enter your Username!" );
     document.login.username.focus() ;
     return false;
   }

   return( true );
}
//</script>
