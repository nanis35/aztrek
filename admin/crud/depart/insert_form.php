<?php require_once '../../layout/header.php'; ?>

<h1>Modifier un départ</h1>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Séjour</label>
        <div class="col-sm-10">
            <input type="text" name="sejour" class="form-control" placeholder="sejour">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de place</label>
        <div class="col-sm-10">
            <input type="number" name="nb_place" class="form-control" placeholder="nb_place">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de départ</label>
        <div class="col-sm-10">
            <input type="date" name="date_depart" class="form-control" placeholder="date_depart">
        </div>
        </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix" class="form-control" placeholder="prix">
        </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

