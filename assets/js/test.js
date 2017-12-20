
/* 
    Selects 
*/
$(function(){
        
	var values = new Array();
	
	//$(document).on('change', '.form-group-multiple-selects .input-group-multiple-select:last-child select', function(){
      
    $(document).on('click', '.addButton', function(){        
	
	    var selecField = $('.form-group-multiple-selectsp .input-group-multiple-selectp:last-child select');
	    
		var selectsLength =selecField.parent().parent().find('.input-group-multiple-selectp select').length;
		var optionsLength = (selecField.find('optionp').length)-1;
		
		if(selectsLength < optionsLength){
			var sInputGroupHtml = selecField.parent().html();
			var sInputGroupClasses = selecField.parent().attr('class');
			selecField.parent().parent().append('<div class="'+sInputGroupClasses+'">'+sInputGroupHtml+'</div>');	
	
	//odortega@gmail.com 2017/01/19
  
    var textfield = $('div.form-group-optionsp div.input-group-optionp:last-child input');
    var sInputGroupHtml = textfield.parent().html();
	var sInputGroupClasses = textfield.parent().attr('class');
    textfield.parent().parent().append('<div class="'+sInputGroupClasses+'">'+sInputGroupHtml+'</div>');
    //FIN odortega@gmail.com 2017/01/19
	
	
		}
		
		updateValues($(this).parent().parent());
		
	});
	
	$(document).on('change', '.form-group-multiple-selectsp .input-group-multiple-selectp:not(:last-child) select', function(){
		
		updateValues($(this).parent().parent());
		
	});
	
	$(document).on('click', '.input-group-addon-remove', function(){
        
        var oSelectContainer = $(this).parent().parent()
    	$(this).parent().remove();

    	//odortega@gmail.com 2017/01/19
        var textfield = $('div.form-group-optionsp div.input-group-optionp:last-child input');
        textfield.parent().remove();
        //FIN odortega@gmail.com 2017/01/19


		updateValues(oSelectContainer);
        
	});
	
	function updateValues(oSelectContainer){
        
		values = new Array();
		$(oSelectContainer).find('.input-group-multiple-selectp select').each(function(){
			var value = $(this).val();
			if(value != 0 && value != ""){
				values.push(value);
			}
		});
		
		$(oSelectContainer).find('.input-group-multiple-selectp select').find('option').each(function(){
			var optionValue = $(this).val();
			var selectValue = $(this).parent().val();
			if(in_array(optionValue,values)!= -1 && selectValue != optionValue)
			{
				$(this).attr('disabled', 'disabled');
			}
			else
			{
				$(this).removeAttr('disabled');
			}
		});
        
	}
	
	function in_array(needle, haystack){
        
		var found = 0;
		for (var i=0, length=haystack.length;i<length;i++) {
			if (haystack[i] == needle) return i;
			found++;
	    }
	    return -1;
        
	}
    
    // Update all options for first use
    $('.form-group-multiple-selectsp').each(function(i, e){
        
    	updateValues(e);
        
	});
});