<?PHP
class adoption{
    private $type;
    private $id;
   private $Age;
    private $gender;
    private $vaccination;
    
    function __construct($type, $id, $Age, $gender,$vaccination)
    {
        $this->type=$type;
        $this->id= $id;
        $this->age = $age;
        $this->gender = $gender;
        $this->vaccination = $vaccination;
        
    }
   
    
    //Getters
    function gettype(){
        return $this->type;
    }
    function getid(){
        return $this->id;
    }
    function getage(){
        return    $this->age;
    }
    function getgender(){
        return  $this->gender;
    }
    function getVaccination()
    {
        return  $this->vaccination;
    }
    
    //Setters
    function settype($type){
        $this->type=$type;
    }
    function setage($age){
       
        $this->age = $age;
       
   
    }
    function setGender($gender){
       
        $this->gender = $gender;
        
    }
    function setVaccinatione($vaccination){
        $this->vaccination=$vaccination;
    }
    
    
    public function Logedin($type, $id, $Age, $Gender,$Vaccination)
	{
		$req="select * from adoption where username='$username' && password='$password'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
}
?>