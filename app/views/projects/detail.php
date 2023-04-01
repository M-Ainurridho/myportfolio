<!-- Project Detail -->
<section id="detailProject">
    <div class="container py-5 ">
        <div class="row pt-5 pb-4">
            <div class="col-lg">
                <h2 class="text-center title"><?= $data['project']["title"] ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <img src="<?= BASEURL ?>/images/<?= $data['project']["image"] ?>" class="img-fluid rounded-2 mb-2" alt="...">
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Duration</h5>
                        <small><i class="fa-solid fa-calendar-days me-1"></i> <?= $data['project']["start_date"] ?> - <?= $data['project']["end_date"] ?></small>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <h5>Technologies</h5>
                        <div class="row">
                            <div class="col-sm-3">
                                <ul>
                                    <li>
                                        <p>Nodejs</p>
                                    </li>
                                    <li>
                                        <p>ReactJs</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul>
                                    <li>
                                        <p>Laravel</p>
                                    </li>
                                    <li>
                                        <p>Typescript</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg">
                <p class="description"><?= $data['project']["description"] ?></p>
            </div>
        </div>

        <a href="<?= BASEURL ?>/projects" class="text-decoration-none"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
</section>
<!-- Akhir Project Detail -->