
<?php 
    session_start();
    include 'components/header.php';
    include 'account/auth/dbConfig.php';
    // if (!isset($_SESSION['loggedin']) {
    //     header('Location: ../login/');
    //     exit;
    // }
?>
<!-- image loading -->
  <div class="bg-slate-100 flex items-center">
 
      <div class="container mx-auto text-center text-blue-900">
  
      </div>
    </section>
  </div>
  <?php include 'components/navigation.php'; ?>
  <?php include 'components/latest.php'; ?>
  


  
    </div>
</section>


  <?php include 'components/footer.php'; ?>

