$(function()
{
	$("#form_cat").validate(
		{

		rules: {
			nom:  {
				required: true,
				minlength: 2
			},
		},

		messages: {
			nom: {
				required: "Champ obligatoire",
				minlength: " Le nom d'utilisatuer doit contenir au moins 2 caractères",
			},
		}
	});
});