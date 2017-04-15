//<script type="text/javascript">
function validate()
{ 
   if( document.upload.subject.value == "" )
   {
     alert( "Please Enter Subject Name!" );
     document.upload.subject.focus() ;
     return false;
   }   
   if( document.upload.university.value == "-1" )
   {
     alert( "Please choose University" );
     document.upload.university.focus() ;
     return false;
   }   
   if( document.upload.branch.value == "-1" )
   {
     alert( "Please choose Branch" );
     document.upload.branch.focus() ;
     return false;
   }   
   if( document.upload.semester.value == "-1" )
   {
     alert( "Please choose Semester" );
     document.upload.semester.focus() ;
     return false;
   }   
   if( document.upload.year.value == "-1" )
   {
     alert( "Please choose Year" );
     document.upload.year.focus() ;
     return false;
   }   
   return( true );
}
//</script>