jQuery(document).ready(function(){
	$('.parsearch').autocomplete({
		source:'jQueryAutocompleteRelatedFields.php', 
		minLength:2,
		select:function(evt, ui)
		{
			// when a zipcode is selected, populate related fields in this form
			this.form.nume.value = ui.item.nume;
			
		}
	});
});
