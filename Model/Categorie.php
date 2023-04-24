<?PHP
	class Categorie{
		private $id;
		private $nom;
		private $date_creation;
		private $date_modif;
		
		function __construct($nom,$date_creation,$date_modif){
			$this->nom=$nom;
			$this->date_creation=$date_creation;
			$this->date_modif=$date_modif;
		}
		
		function getId(){
			return $this->id;
		}
		function getNom(){
			return $this->nom;
		}
		function setNom($nom){
			$this->nom=$nom;
		}

		function setDateCreation($date_creation){
			$this->date_creation=$date_creation;
		}
		function getDateCreation(){
			return $this->date_creation;
		}

		function setDateModif($date_modif){
			$this->date_modif=$date_modif;
		}
		function getDateModif(){
			return $this->date_modif;
		}

	}
?>