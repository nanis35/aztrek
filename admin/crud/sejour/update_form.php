<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);

$list_pays = getAllEntities("pays");

require_once '../../layout/header.php';
?>

<h1>Modifier un séjour</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" name="nom" value="<?php echo $sejour["nom"]; ?>" class="form-control" placeholder="nom">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Durée</label>
        <div class="col-sm-10">
            <input type="number" name="duree" value="<?php echo $sejour["duree"]; ?>" class="form-control" placeholder="duree">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Niveau</label>
        <div class="col-sm-10">
            <input type="number" name="niveau" value="<?php echo $sejour["niveau"]; ?>" class="form-control" placeholder="niveau">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo $sejour["photo"]; ?>"  class="img-responsive img-thumbnail">
        </div>
        <div class="col-sm-9">
            <input type="file" name="photo" accept="images/*" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description courte</label>
        <div class="col-sm-10">
            <textarea name="description_courte" class="form-control">
                <?php echo $sejour["description_courte"]; ?>
            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description longue</label>
        <div class="col-sm-10">
            <textarea name="description_longue" class="form-control">
                <?php echo $sejour["description_longue"]; ?>
            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pays</label>
        <div class="col-sm-10">
            <select name="pays_id" class="form-control">
                <?php foreach ($list_pays as $pays) : ?>
                    <?php $selected = ($pays["id"] == $sejour["pays_id"]) ? "selected" : ""; ?>
                    <option value="<?php echo $pays["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $pays["nom"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

