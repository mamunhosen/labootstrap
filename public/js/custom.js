$(document).ready(function(){


 
 $('.dlt_contact').bind('click',function (e) {

var result=confirm("Are you sure you want to delete this item?");
    
   if (!result) {
    	e.preventDefault();
   }

});
});