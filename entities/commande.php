<?PHP
class commande{
    private $num;
    private $categorie;
    private $type;
    private $sexe;
    function construct($num,$categorie,$type,$sexe){
		$this->num=$num;
		$this->categorie=$categorie;
		$this->type=$type;
        $this->sexe=$sexe;
    }
    function getnum(){
		return $this->num;
    }
    function getcategorie(){
		return $this->categorie;
    }
    function gettype(){
		return $this->type;
    }
    function getsexe(){
		return $this->sexe;
    }

    function setnum($num){
		$this->num=$num;
    }
    function setcategorie($categorie){
		$this->categorie=$categorie;
    }
    function settype($type){
		$this->type=$type;
    }
    function setsexe($sexe){
        $this->sexe=$sexe;
	}
}

?>