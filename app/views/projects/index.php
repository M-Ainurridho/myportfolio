<!-- MyProject -->
<section id="myProjects" class="myprojects">
    <div class="container py-5">
        <div class="row pt-5 pb-2">
            <div class="col-lg">
                <h1 class="text-center">Projects</h1>
            </div>
        </div>

        <div class="row justify-content-center mt-3 gy-4">
            <?php foreach ($data['projects'][0] as $project) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="<?= BASEURL ?>/images/projects/<?= $project["image"] ?>" class="card-img-top" height="200" alt="project-image">
                        <div class="card-body">
                            <h5 class="card-title"><?= $project["title"] ?></h5>
                            <p class="card-text text-nowrap overflow-hidden text-truncate"><?= $project["description"] ?></p>
                            <a href="<?= BASEURL ?>/projects/detail/<?= $project["id"]; ?>" class="btn btn-info">Read more</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="row justify-content-center mt-4">
            <div class="col-lg-6 text-center">
                <?php if ($data['active'] > 1) : ?>
                    <a href="<?= BASEURL; ?>/projects/page/<?= $data['active'] - 1 ?>" class="text-decoration-none text-reset fs-5"> &laquo; </a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $data['jmlhalaman']; $i++) : ?>
                    <?php if ($data['active'] == $i) : ?>
                        <a href="<?= BASEURL; ?>/projects/page/<?= $i ?>" class="text-decoration-none fs-4 mx-1 text-primary"><?= $i ?></a>
                    <?php else : ?>
                        <a href="<?= BASEURL; ?>/projects/page/<?= $i ?>" class="text-decoration-none mx-1 text-reset"><?= $i ?></a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($data['projects'][2] < $data['jmlhalaman']) : ?>
                    <a href="<?= BASEURL; ?>/projects/page/<?= $data['active'] + 1 ?>" class="text-decoration-none text-reset fs-5"> &raquo; </a>
                <?php endif; ?>
            </div>
        </div>
        <!-- End of Pagination -->
    </div>
</section>
<!-- Akhir MyProject -->