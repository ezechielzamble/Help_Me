 $(document).ready(function()
 {

 	$('#search').keyup(function(){
 			var search = $(this).val();
 			search = $.trim(search);
 			if(search!==""){
 				//$.post('../bhost/ajax/post.php', {search:search}, function(data)
 				$.post('post.php', {search:search}, function(data)
 				{
 						$('#resultat ul').html(data);

				});
 			}
 		});
 		//$('#resultat').text(search);
		$('form').submit(function(){ 			
 			var message = $('#message').val();
 			if (message !== "") {
 				$.post('post.php', {message:message}, function(data){
 						$('#message').val(data);

 				});
 			}
 	});
// });
//alert("ok");

 	});

