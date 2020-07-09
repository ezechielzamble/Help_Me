$(document).ready(function()
{

	$('#regform').signin(function(){
	var email = $('#email').val();
	var nom = $('#nom').val();
	var motdepasse = $('#motdepasse').val();
	var motdepasse2 = $('#motdepasse2').val();
	var ecoles = $('#ecoles').val();
	var cycles = $('#cycles').val();
	alert(email+nom+motdepasse+ecoles+cycles);
      });
});

