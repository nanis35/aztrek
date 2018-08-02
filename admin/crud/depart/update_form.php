<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$pays = getOneEntity("depart", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier un pays</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Séjour</label>
        <div class="col-sm-10">
            <input type="text" name="nom" value="<?php echo $sejour["nom"]; ?>" class="form-control" placeholder="sejour">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de place</label>
        <div class="col-sm-10">
            <input type="number" name="nb_place" value="<?php echo $sejour["nb_place"]; ?>" class="form-control" placeholder="sejour">
        </div>
    </div>
     <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix" value="<?php echo $sejour["prix"]; ?>" class="form-control" placeholder="sejour">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de départ</label>
        <div class="col-sm-10">
            <input type="date" name="date_depart" value="<?php echo $sejour["date_depart"]; ?>" class="form-control" placeholder="sejour">
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

