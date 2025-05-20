<?= $this->extend('layout/main') ?> 

<?= $this->section('content') ?> 

<div class="container mt-5"> 
    <div class="row"> 
        <div class="col-md-4 offset-md-4"> 
            <div class="card"> 
                <div class="card-body"> 
                    <h4 class="text-center" style="font-weight: bold;">REGISTER</h4> 
                    <hr> 

                    <?php if (session()->getFlashdata('success')) : ?> 
                        <div class="alert alert-success"> 
                           <?= session()->getFlashdata('success'); ?> 
                        </div> 
                    <?php endif; ?> 

                    <?php if (session()->getFlashdata('error')) : ?> 
                        <div class="alert alert-danger"> 
                            <?= session()->getFlashdata('error'); ?> 
                        </div> 
                    <?php endif; ?> 

                    <?= validation_list_errors() ?> 

                    <?= form_open('register'); ?> 

                    <div class="form-group mb-3"> 
                        <label for="username">Username</label> 
                        <input type="text" name="username" class="form-control" required> 
                    </div> 

                    <div class="form-group mb-3"> 
                        <label for="email">Email</label> 
                        <input type="email" name="email" class="form-control" required> 
                    </div> 

                    <div class="form-group mb-3"> 
                        <label for="password">Password</label> 
                        <input type="password" name="password" class="form-control" required> 
                    </div> 

                    <div class="form-group mb-3"> 
                        <button class="btn btn-primary">Regis</button> 
                        <a class="btn btn-secondary" href="<?= base_url('main'); ?>">Back</a> 
                    </div> 

                    <?= form_close(); ?> 
                </div> 
            </div> 

            <div class="text-center mt-2"> 
                Sudah punya akun? <a href="<?= base_url('login'); ?>">Silakan login.</a> 
            </div> 
        </div> 
    </div> 
</div> 

<?= $this->endSection() ?> 
