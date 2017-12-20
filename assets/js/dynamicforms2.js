$(document).ready(function(){
    $('.add_button').click(function(){
    	var kakoi=$(this).attr('fldnum');
		var insHTML = '<div class="input-group"><input class="form-control" type="text" name="fld_val'+kakoi+'"><span class="input-group-btn"><button class="btn btn-danger remove_button" type="button"><span class="glyphicon glyphicon-minus"></span></button></span></div>';
		$("#fld"+kakoi).append(insHTML);
    });

    $('.fld_wrap').on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parents(':eq(1)').remove();
    });
});
