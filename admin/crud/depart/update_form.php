<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$depart = getOneEntity("depart", $id);

$list_sejours = getAllEntities("sejour");


require_once '../../layout/header.php';
?>

<h1>Modifier un départ</h1>


<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Sejour</label>
        <div class="col-sm-10">
            <select name="sejour_id" class="form-control">
                <?php foreach ($list_sejours as $sejour) : ?>
                    <?php $selected = ($sejour["id"] == $depart["pays_id"]) ? "selected" : ""; ?>
                    <option value="<?php echo $sejour["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $sejour["nom"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de place</label>
        <div class="col-sm-10">
            <input type="number" name="nb_place" value="<?php echo $depart["nb_place"]; ?>" class="form-control" placeholder="nb_place">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix" value="<?php echo $depart["prix"]; ?>" class="form-control" placeholder="prix">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de départ</label>
        <div class="col-sm-10">
            <input type="date" name="date_depart" value="<?php echo $depart["date_depart"]; ?>" class="form-control" placeholder="date_depart">
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

