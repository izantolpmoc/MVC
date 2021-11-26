<?php  include VIEWS.'inc/header.php' ?>

<a href="<?= BASE_PATH.'book/add' ?>" class="btn btn-success mb-5">Ajouter</a>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Date parution</th>
        <th scope="col">Prix</th>
        <th scope="col">Préface</th>
        <th scope="col">Photo</th>
        <th scope="col">Genre</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($books as $book) : ?>

    <tr>
        <th scope="row"><?= $book['id'] ?></th>
        <td><?= $book['title']?></td>
        <td><?= $book['author']?></td>
        <td><?= date('d/m/Y', strtotime($book['publish_date']))?></td>
        <td><?= $book['price']?></td>
        <td><?= $book['resume']?></td>
        <td><img src="<?= '../../upload/'.$book['cover'] ?>" width="80px" alt=""></td>
        <td><?= $book['name']?></td>
        <td>
            <a href="<?= BASE_PATH.'book/add?id='.$book['id'] ?>" class="btn btn-warning">Modifier</a>
            <a href="<?= BASE_PATH.'book/delete?id='.$book['id'] ?>" class="btn btn-danger">Supprimer</a>
        </td>
    </tr>

    <?php endforeach; ?>
    </tbody>
</table>


<?php  include VIEWS.'inc/footer.php' ?>
