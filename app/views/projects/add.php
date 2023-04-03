<!-- Create New Project -->
<section id="addproject" class="addproject">
    <div class="container pt-2 pb-5">
        <div class="row pt-5 pb-2 mt-5">
            <div class="col-lg">
                <h1 class="text-center">Create New Project</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-4">
                <form action="<?= BASEURL; ?>/projects/insert_data" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm">
                                <label for="startDate" class="form-label">Start date</label>
                                <input type="date" class="form-control" id="startDate" name="startDate" required>
                            </div>
                            <div class="col-sm">
                                <label for="endDate" class="form-label">End date</label>
                                <input type="date" class="form-control" id="endDate" name="endDate" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description" rows="7" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="uploadImg" name="image">
                        <label class="input-group-text" for="uploadImg" required><i class="fa-solid fa-paperclip"></i></label>
                    </div>
                    <div class="mb-3 d-flex justify-content-end gap-2">
                        <button type="submit" class="btn btn-primary" name="add">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End of Create New Project -->