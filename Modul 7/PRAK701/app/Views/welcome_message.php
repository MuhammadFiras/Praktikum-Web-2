<?= $this->extend('layout/main') ?> 
 
<?= $this->section('content') ?> 
 
<div class="container vh-1 d-flex justify-content-center align-items-center">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="h3">
        Hello 
        <?php 
          if (session()->get('logged_in') === TRUE) {
            echo esc(session()->get('username'));
          } else {
            echo "Guest";
          } 
        ?>!
      </h3>
      <p>Selamat datang</p>
    </div>
  </div>
</div>

<?= $this->endSection() ?> 