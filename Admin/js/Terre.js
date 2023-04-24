$(function()
{
	$("#form_terre").validate(
		{

		rules: {
			nom:  {
				required: true,
				minlength: 2
			},
			largeur: {
				required: true,
				number: true
			},
			longeur: {
				required: true,
				number: true
			},
			echantillon: {
				required: true,
				minlength: 3
			},
		},

		messages: {
			nom: {
				required: "Champ obligatoire",
				minlength: " Le nom doit contenir au moins 2 caractères",
			},
			largeur: {
				required: "Champ obligatoire",
				number: " Largeur doit contenir des numéros",
			},
			longeur: {
				required: "Champ obligatoire",
				number: " Longeur doit contenir des numéros",
			},
			mdp: {
				required: "Champ obligatoire",
				minlength: " La mot de passe doit contenir au moins 3 caractères",
			},
			tel: {
				required: "Champ obligatoire",
				number: " La telephone doit contenir des numeros",
			},
			echantillon: {
				required: "Champ obligatoire",
				minlength: " L echantillon doit contenir au moins 3 caractères",
			},


		}
	});
});