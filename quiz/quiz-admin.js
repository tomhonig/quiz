jQuery(document).ready(function () {
	
            jQuery('.quiz-options .quiz-option input[type="checkbox"]').click(function(){

                    jQuery(this).parents('.quiz-options').find('input[type="checkbox"]').not(this).val(0).attr('checked', false);

            });
            
});