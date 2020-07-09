 $(document).ready(function()
 {

 	$('#search').keyup(function(){
 		$('#resultat ul').html("");
 			var search = $(this).val();
 			search = $.trim(search);
 			if(search!==""){
 				//$.post('../bhost/ajax/post.php', {search:search}, function(data)
 				$.post('../bhost/ajax/home.php', {search:search}, function(data)
 				{
 						$('#resultat ul').html(data);

				});
 			}
 			else{
 				//document.getElementById('resultat').innerHTML = "<ul>Aucun resultat</ul>"
 				$('#resultat ul').html('Aucun document');
 			}
 		});
 		//$('#resultat').text(search);
		$('form').submit(function(){ 			
 			var message = $('#message').val();
 			if (message !== "") {
 				$.post('home.php', {message:message}, function(data){
 						$('#message').val(data);

 				});
 			}
 	});
		$('#lien').click(function(){
		// 	var lien = $(this).val();
		// 	$.post('../bhost/ajax/home.php', {lien:lien}, function(data){
		// 	$('#feedback ul').html(data);
		// });
		alert("ok");
});
//alert("ok");
 	$('#search').keyup(function(){
 		$('#feedback ul').html("");
 			var search = $(this).val();
 			search = $.trim(search);
 			if(search!==""){
 				//$.post('../bhost/ajax/post.php', {search:search}, function(data)
 				$.post('../bhost/ajax/home.php', {search:search}, function(data)
 				{
 						$('#feedback ul').html(data);

				});
 			}else{
 				//document.getElementById('resultat').innerHTML = "<ul>Aucun resultat</ul>"
 				$('#feedback ul').html('Aucun document');
 			}
 		});

 	});

