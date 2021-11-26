<?php include VIEWS.'inc/header.php' ?>

<form method="post"  action="<?= BASE_PATH.'genre/add' ?>">
    <fieldset>
        <legend>Ajouter un genre 📚</legend>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Nom</label>
            <input type="text"value="<?= $genre['name'] ?? '' ?>" name="name" class="form-control" id="exampleInputPassword1" placeholder="Nom">
        </div>


        <input type="hidden" name="id" value="<?= $genre['id'] ?? 0 ?>">

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </fieldset>
</form><br>

<!-- <div class="container genre">
<?php foreach($genres as $genre) :  ?>
<div class="card border-primary mb-3" style="max-width: 20rem;">
  <div class="card-header"><?= $genre['id'] ?></div>
  <div class="card-body">
    <h4 class="card-title"><?= $genre['name'] ?></h4>
    <p class="card-text"><a href="<?= BASE_PATH.'genre/add?id='.$genre['id'] ?>" class="btn btn-success">Edit</a><a href="<?= BASE_PATH.'genre/delete?id='.$genre['id'] ?>" class="btn btn-danger">X</a></p>
  </div>
</div>
<?php endforeach;  ?>
</div> -->

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach($genres as $genre): ?>
    <tr>
        <th scope="row"><?= $genre['id']  ?></th>
        <td><?= $genre['name'] ?></td>
        <td>
            <a href="<?= BASE_PATH.'genre/add?id='.$genre['id'] ?>" class="btn btn-warning">Modifier</a>
            <a href="<?= BASE_PATH.'genre/delete?id='.$genre['id'] ?>" class="btn btn-danger">Supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php include VIEWS.'inc/footer.php' ?>