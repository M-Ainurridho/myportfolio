<!-- Contact Page -->
<section id="addproject" class="addproject">
    <div class="container pt-2 pb-5">

        <div class="row pt-5 pb-2 mt-5">
            <div class="col-lg">
                <h1 class="text-center">Contact</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <?php if (isset($_SESSION['contact'])) : ?>
                    <?= Message::contactInfoAlert(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6 mt-4">
                <form action="<?= BASEURL; ?>/contact/send" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <select class="form-select" id="subject" name="subject">
                            <option value="Discussion">Discussion</option>
                            <option value="Hiring">Hiring</option>
                            <option value="Collaboration">Collaboration</option>
                            <option value="Suggestion">Suggestion</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description" rows="7" required placeholder="Leave a comment here"></textarea>
                    </div>
                    <div class="mb-3 d-flex justify-content-end gap-2">
                        <button type="submit" class="btn btn-primary" name="send">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End of Contact Page -->