//<script type="text/javascript">
function validate()
{ 
      
   if( document.advancedsearch.university.value == "-1" )
   {
     alert( "Please choose your University" );
     document.advancedsearch.university.focus() ;
     return false;
   }   
   
   return( true );
}
//</script>
