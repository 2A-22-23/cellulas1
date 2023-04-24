$(function()
{
	$("#form_diag").validate(
		{

		rules: {
			description: {
				required: true,
				minlength: 3
			},
		},
		messages: {
			description: {
				required: "Champ obligatoire",
				minlength: " La description doit contenir au moins 3 caractères",
			},


		}
	});
});