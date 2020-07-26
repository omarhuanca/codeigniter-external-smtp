<div clas="contaier">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Contact Form
                </div>
                <div class="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-warning" role="alert">
                        <strong>Error</strong><?php echo validation_errors(); ?>
                    </div>
                    <?php endif ?>

                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="to" class="col-sm-2 form-control-label"> To* </label>
                            <div class="col-sm-10">
                                <input type="email" name="to" class="form-control" placeholder="to@email.com" value="<?php echo set_value('to'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-sm-2 form-control-label"> Subject* </label>
                            <div class="col-sm-10">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" value="<?php echo set_value('subject'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-sm-2 form-control-label"> Description* </label>
                            <div class="col-sm-10">
                                <textarea name="body" name="body" cols="30" rows="10" class="form-control" value="<?php echo set_value('body'); ?>"></textarea>
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
