<?php  include VIEWS.'inc/header.php'; ?>

<div class="row justify-content-between pt-4">
    <?php foreach ($books as $book ):   ?>
    <div class="col-md-3 text-center">
        <div class="card border-success mb-3" style="max-width: 20rem;">
            <img src="<?= COVER.$book['cover'] ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?= $book['title'] ?></h4>
                <h6><?=    $book['author'].', paru le '.date('d/m/Y', strtotime($book['publish_date'])); ?></h6>
                <p class="card-text"><?=  $book['resume'] ?></p>
                <h3><?= $book['price'].' €' ?></h3>
                
            </div>

            <a href="<?= BASE_PATH.'book/add?id='.$book['id'] ?>" class="btn btn-success">Modifier</a><a href="<?= BASE_PATH.'book/delete?id='.$book['id'] ?>" class="btn btn-danger">Supprimer</a>
        </div>
    </div>
<?php  endforeach; ?>


</div>

<?php  include VIEWS.'inc/footer.php'; ?>