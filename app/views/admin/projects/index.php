<!-- MyProject -->
<section id="myprojects" class="myprojects">
    <div class="container py-5">
        <div class="row pt-5 pb-2">
            <div class="col-lg">
                <h1 class="text-center">Projects</h1>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <?php if (isset($_SESSION['image'])) : ?>
                    <?= Message::errorUploadMessage(); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-5">
                <?php if (isset($_SESSION['message'])) : ?>
                    <?= Message::message(); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-2 mb-4">
                <a href="<?= BASEURL ?>/projects/add" class="btn btn-primary position-absolute">New Project</a>
            </div>
        </div>


        <div class="row justify-content-center mt-3 gy-4">
            <?php foreach ($data['projects'][0] as $project) : ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="<?= BASEURL ?>/images/projects/<?= $project["image"] ?>" class="card-img-top" height="200" alt="project-image">
                        <div class="card-body">
                            <h5 class="card-title"><?= $project["title"] ?></h5>
                            <p class="card-text text-nowrap overflow-hidden text-truncate"><?= $project["description"] ?></p>
                            <div class="d-flex gap-2 flex-grow-1">
                                <a href="<?= BASEURL ?>/projects/edit/<?= $project["id"]; ?>" class="btn btn-primary  d-block flex-grow-1">Edit</a>
                                <a href="#deleteProject" class="btn btn-danger d-block flex-grow-1" data-bs-toggle="modal">Delete</a>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Pagination -->
        <div class="row justify-content-center mt-4">
            <div class="col-lg-6 text-center">
                <?php if ($data['active'] > 1) : ?>
                    <a href="<?= BASEURL; ?>/admin/projects/page/<?= $data['active'] - 1 ?>" class="text-decoration-none text-reset fs-5"> &laquo; </a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $data['jmlhalaman']; $i++) : ?>
                    <?php if ($data['active'] == $i) : ?>
                        <a href="<?= BASEURL; ?>/admin/projects/page/<?= $i ?>" class="text-decoration-none fs-4 mx-1 text-primary"><?= $i ?></a>
                    <?php else : ?>
                        <a href="<?= BASEURL; ?>/admin/projects/page/<?= $i ?>" class="text-decoration-none mx-1 text-reset"><?= $i ?></a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($data['projects'][2] < $data['jmlhalaman']) : ?>
                    <a href="<?= BASEURL; ?>/admin/projects/page/<?= $data['active'] + 1 ?>" class="text-decoration-none text-reset fs-5"> &raquo; </a>
                <?php endif; ?>
            </div>
        </div>
        <!-- End of Pagination gt-->
    </div>
</section>
<!-- Akhir MyProject -->

<!-- Modal - Hapus Project -->
<div class="modal fade" id="deleteProject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteProjectLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteProjectLabel">Delete Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure, want to delete this project?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="<?= BASEURL ?>/projects/delete/<?= $project["id"]; ?>" class="btn btn-primary">Confirm</a>
            </div>
        </div>
    </div>
</div>