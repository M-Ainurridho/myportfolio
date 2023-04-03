<!-- Create New Project -->
<section id="editproject" class="editproject">
    <div class="container pt-2 pb-5">
        <div class="row pt-5 pb-2 mt-5">
            <div class="col-lg">
                <h1 class="text-center">Edit Data Project</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-4">
                <form action="<?= BASEURL; ?>/projects/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['project']['id'] ?>">
                    <input type="hidden" class="form-control" id="oldimage" name="oldimage" value="<?= $data['project']['image'] ?>">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $data['project']['title'] ?>">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm">
                                <label for="startDate" class="form-label">Start date</label>
                                <input type="date" class="form-control" id="startDate" name="startDate" value="<?= $data['project']['start_date'] ?>">
                            </div>
                            <div class="col-sm">
                                <label for="endDate" class="form-label">End date</label>
                                <input type="date" class="form-control" id="endDate" name="endDate" value="<?= $data['project']['end_date'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description" rows="7"><?= $data['project']['description'] ?>"</textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="uploadImg" name="newimage">
                        <label class="input-group-text" for="uploadImg"><i class="fa-solid fa-paperclip"></i></label>
                    </div>
                    <div class="mb-3 d-flex justify-content-end gap-2">
                        <a href="<?= BASEURL ?>/admin/projects" class="btn btn-secondary" name="add">Cancel</a>
                        <button type="submit" class="btn btn-primary" name="add">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End of Create New Project -->