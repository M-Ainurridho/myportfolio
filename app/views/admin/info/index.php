<!-- Create New Project -->
<section id="information" class="information">
    <div class="container pt-2 pb-5">
        <div class="row pt-5 pb-2 mt-5">
            <div class="col-lg">
                <h1 class="text-center">Info Message</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 mt-4">
                <table class="table table-striped-columns table-hover">
                    <tr class="text-center bg-body-tertiary">
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Description</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($data['info'] as $info) : ?>
                        <tr>
                            <th class="text-center"><?= $i ?>.</th>
                            <td><?= $info['name'] ?></td>
                            <td><?= $info['email'] ?></td>
                            <td><?= $info['subject'] ?></td>
                            <td class="text-nowrap overflow-hidden text-truncate"><?= $info['description'] ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

    </div>
</section>
<!-- End of Create New Project -->