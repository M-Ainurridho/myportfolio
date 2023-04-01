<!-- MyProject -->
<section id="myProjects" class="myprojects">
    <div class="container py-5">
        <div class="row pt-5 pb-2">
            <div class="col-lg">
                <h1 class="text-center">Projects</h1>
            </div>
        </div>

        <div class="row justify-content-center mt-3 gy-3">
            <?php foreach ($data['projects'] as $project) : ?>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="../public/images/<?= $project["image"] ?>" class="card-img-top" height="200" alt="project-image">
                        <div class="card-body">
                            <h5 class="card-title"><?= $project["title"] ?></h5>
                            <p class="card-text text-nowrap overflow-hidden text-truncate"><?= $project["description"] ?></p>
                            <a href="<?= BASEURL ?>/projects/detail/<?= $project["id"]; ?>" class="btn btn-info">Read more</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Akhir MyProject -->