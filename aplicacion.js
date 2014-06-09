$(document).ready(function(){
	$("#caja-texto").keyup(function(){
		$("#caja-usuarios").html("");
		var caja_texto = $(this).val();
		var query = "query="+caja_texto;
		if(caja_texto != ""){
			$.ajax({
				type:"GET",
				url:"servidor.php",
				data:query,
				dataType:'json',
				success:function(data){
					 $.each(data,function(clave, valor){
					 	var html = '<div class="show-usuarios">';
							html += '<img src="img/'+valor.imagen+'">';
							html += '<div class="info">';
							html += '<label class="nombre">'+valor.nombre +" "+valor.apellidoPaterno+'</label>';
							html += '<br>';
							html += '<label class="ciudad">'+valor.ciudad+'</label>';
							html += '</div>';
							html += '</div>';
						$("#caja-usuarios").append(html);
					});
				}
			});
		}else{

		}
	});
});