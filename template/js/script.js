$( ".updateQte" ).each(function( index ) {
	$(this).on("change", function(){
		$(this).parent().submit();
	});
});