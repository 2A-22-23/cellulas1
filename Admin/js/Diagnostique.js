$(function()
{
	$("#form_diag").validate(
		{

		rules: {
			status:  {
				required: true,
				minlength: 2
			},
			description: {
				required: true,
				minlength: 3
			},
		},

		messages: {
			status: {
				required: "Champ obligatoire",
				minlength: " Le status doit contenir au moins 2 caractères",
			},
			description: {
				required: "Champ obligatoire",
				minlength: " La description doit contenir au moins 3 caractères",
			},


		}
	});
});