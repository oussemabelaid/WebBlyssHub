<?PHP
class user{
    private $id;
    private $firstname;
    private $lastname;
    private $adress;
    private $phonenumber;

    function construct($id,$firstname,$lastname,$adresse,$phonenumber){
		$this->id=$id;
		$this->firstname=$firstname;
		$this->lastname=$lastname;
        $this->adress=$adress;
        $this->phonenumber=$phonenumber;
    }
    function getid(){
		return $this->id;
    }
    function getfirstname(){
		return $this->firstname;
    }
    function getlastname(){
		return $this->lastname;
    }
    function getadress(){
		return $this->adress;
    }
    function getphonenumber(){
		return $this->phonenumber;
    }

    function setfirstname($firstname){
		$this->firstname=$firstname;
    }
    function setlastname($lastname){
		$this->lastname=$lastname;
	}
    function setadress($adress){
		$this->adress=$adress;
    }
    function phonenumber($phonenumber){
		$this->phonenumber=$phonenumber;
	}


?>