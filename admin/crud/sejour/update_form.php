<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);

$list_pays = getAllEntities("pays");

require_once '../../layout/header.php';
?>

<h1>Modifier un projet</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" name="nom" value="<?php echo $sejour["nom"]; ?>" class="form-control" placeholder="nom">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">photo</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo $sejour["photo"]; ?>"  class="img-responsive img-thumbnail">
        </div>
        <div class="col-sm-9">
            <input type="file" name="photo" accept="images/*" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de début</label>
        <div class="col-sm-10">
            <input type="date" name="date_debut" value="<?php echo $sejour["date_debut"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de fin</label>
        <div class="col-sm-10">
            <input type="date" name="date_fin" value="<?php echo $sejour["date_fin"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix" value="<?php echo $sejour["prix"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description_longue" class="form-control">
                <?php echo $sejour["description_longue"]; ?>
            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Catégorie</label>
        <div class="col-sm-10">
            <select name="pays_id" class="form-control">
                <?php foreach ($list_sejour as $sejour) : ?>
                    <?php $selected = ($sejour["id"] == $sejour["pays_id"]) ? "selected" : ""; ?>
                <option value="<?php echo $sejour["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $sejour["libelle"]; ?>
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

