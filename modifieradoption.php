
<!doctype html>
<html lang="en">
<body>



<?PHP
include "../entities/ajouterA.php";
include "../core/ajouterC.php";
var_dump($_POST['id']);
if (isset($_POST['id']))
	{
	$adoption1C=new adoptionC();
    $result=$adoption1C->recupereradoption($_POST['id']);
	foreach($result as $row)
	{
		$type=$row['type'];
		$id=$row['id'];
		$age=$row['age'];
		$gender=$row['gender'];
		$vaccination=$row['vaccination'];
		
?>




                        
<section class="details_part section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_abopt_part">
                            <img src="img/single_adopt_2.png" alt=""> 
						<table>
                                <form  name="insertion" action="modifieradoption.php" method="POST">
                                    <tr>
                                        <td >
                                            <h5>type</h5></td><td><input type="text" name="type" value=<?php echo $type; ?> > </td> </tr>  
                                    
                                    <tr> <td><h5>Id</h5></td><td><input type="text" name="id" value=<?php echo $id; ?> ></td> </tr>
                                    

                                      <tr>  <td><h9>Age</h9></td><td><input type="text" name="age"value=<?php echo $age; ?>></td> </br> </tr>
                    <tr>
                              <td><h5>Gender</h5> </td>  
                               <td><input type="text" name="gender"value=<?php echo $gender; ?> > </td> 
                            </tr>
                            <tr>     <td>
                                <h5>Vaccination</h5></td><td><input type="text" name="vaccination"value=<?php echo $vaccination; ?> >
                                  </td>
                                

                            </tr>
                            <tr>
                                        
                            <td><a href="affichierajout.php"><input class="btn_1" type="submit" name="modifier" value="modifier" onclick="code()" ></td></a> 
                                
                                
                            </tr>
                            </form>
                            </table>
					
      </div>
      </div>
      </div>
      </div>

<?PHP  
	}
}
?>	



<?PHP
/* if (isset($_POST['modifier']))
{
	$adoption1=new adoption($_POST['type'],$_POST['id'],$_POST['age'],$_POST['gender'],$_POST['vaccination']);
	$adoption1C->modifieradoption($adoption1,$_POST['id']);
	echo $_POST['id'];
	//header('Location: affichier.php');
} */
?>
</body>
</HTMl>




