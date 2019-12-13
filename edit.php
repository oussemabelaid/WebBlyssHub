<?PHP
include "../entities/livraison.php";
include "../core/livraisonCrud.php";
if (isset($_GET['id'])){
    $livraisonCrud=new livraisonCrud();
    $result=$livraisonCrud->recupererlivraison($_GET['id']);
    foreach($result as $row){
        $id=$row['id'];
        $adresse=$row['adresse'];
        $ville=$row['ville'];
        $region=$row['region'];
        $telephone=$row['telephone'];
        $email=$row['email'];
        $status=$row['status'];
        $date=$row['date'];
        $commentaire=$row['commentaire'];
        $iduser=$row['iduser'];


        ?>
        <form method="POST" >
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>status</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" disabled value="<?PHP echo $status ?>">
                        <select type="text" name="status"  >
                            <option value="livree" >livree</option>
                            <option value="en cours" >en cours</option>
                            <option value="annulee" > annulee</option>
                        </select>

                    </td>

                    <td><input type="submit" name="edit" value="edit">
                        <input type="hidden" name="id" value="<?PHP echo $_GET['id'];?>"></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>

                    <th>status</th>
                    <th>action</th>
                </tr>
                </tfoot>
            </table>

        </form>
        <?PHP

    }
}
 if(isset($_POST['edit']))
 {

    $liv=new livraison($adresse,$ville,$region,$telephone,$email,$commentaire,$iduser);
    $liv->setstatus($_POST['status']);
   // var_dump($liv);
    $livraisonCrud->modifierlivraison($liv,$_POST['id']);
    header('Location: display.php');

 }
?>