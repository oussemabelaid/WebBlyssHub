<html>
<head>
    <meta charset="utf-8"/>
    <title>Catégorie</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?PHP

?>

<!--<script src="main.js"></script>-->
    
    <div>
    <h2>Adoption</h2>
    
    <div>
        <form method="POST" name="f1">
        <?PHP   
        include "ajouterA.php";
        include "ajouterC.php";
        if (isset($_GET['id'])){
        $adoption1C=new adoptionC();
        $result=$adoption1C->recupereradoption($_GET['id']);
        foreach($result as $row){
		$type=$row['type'];
		$id=$row['id'];
		$age=$row['age'];
		$gender=$row['gender'];
        $vaccination=$row['vaccination'];
        
        ?>
         <table id="formulaire">
            <tr><td>type</td><td><input type="text" name="type" placeholder="Nom" maxlength="20" value="<?PHP echo $type ?>"></td></tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="modifier" value="modifier"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
            </tr>
            </table>
        </form>
    </div>
    </div>
    <?PHP
        }
        }
    ?>

<?PHP

if (isset($_POST['modifier'])){
$adoption1C=new adoptionC($_POST['type'],$_POST['id'],$_POST['age'],$_POST['gender'],$_POST['vaccination']);
	$adoption1C->modifieradoption($adoption,$_POST['id']);
	echo $_POST['id'];
	header('Location: affichier.php');
}
?>
</body>
</html>
