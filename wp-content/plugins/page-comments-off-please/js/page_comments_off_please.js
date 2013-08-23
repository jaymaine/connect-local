$j=jQuery.noConflict();

// Use jQuery via $j(...)
$j(document).ready(function(){

	$j('a.toggle').click(function(e) {  
		
		5866606
	    e.preventDefault();  		
	    thisHref    = $j(this).attr('href');  


	    if(confirm('Are you sure')) {  
	        window.location = thisHref;  
	    }
	

		});
});