$(document).ready(function(){
	$('#contact-form').jqTransform();

	$("button").click(function(){

		$(".formError").hide();

	});

	var use_ajax=true;
	$.validationEngine.settings={};

	$("#contact-form").validationEngine({
		inlineValidation: false,
		promptPosition: "centerRight",
		success :  function(){use_ajax=true},
		failure : function(){use_ajax=false;}
	 })

	$("#contact-form").submit(function(e){
		/*	
			if(!$('#subject').val().length)
			{
				$.validationEngine.buildPrompt(".jqTransformSelectWrapper","* This field is required","error")
				return false;
			}
		*/	
			if(use_ajax)
			{
				$('#loading').css('visibility','visible');
				$.post('app/submit.php',$(this).serialize()+'&ajax=1',
				
					function(data){
						
							
						$("#contact-form").hide('slow').after('<p style="text-align: center;"><img src="assets/img/256_act_outbox1.png"width="256" height="256" /><h1 style="text-align: center;">Mensaje enviado</p></h1><p style="text-align: center;">Espere pronta respuesta en su e-mail. Tal vez sea necesario que revise en "Spam" o en "Correo no deseado". <br>Gracias por su tiempo.</p>');
						
						
						$('#loading').css('visibility','hidden');
					}
				
				);
			}
			e.preventDefault();
	})

});