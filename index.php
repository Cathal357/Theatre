<!-- Include head of the html -->
<?php 
    session_start();
    include 'components/header.php'; 
    include 'account/auth/dbConfig.php';
?>

<!-- The main image of the home page -->
  <div class="bg-gray-50 flex items-center">
    <section class="w-full bg-cover bg-center py-32" style="background-image: url('<?= ROOT_DIR ?>/assets/images/header_bg.jpg');">
      <div class="fit-content mx-auto text-center text-white" >
        <h1 class="text-5xl text-gray-200 font-black fit-content bg-opacity-80 px-5 py-5 shadow-lg backdrop-blur">Welcome to Clyde Theatre</h1>
      </div>
    </section>
  </div>

  <!-- Include navigation -->
  <?php include 'components/navigation.php'; ?>
  <?php include 'components/latest.php'; ?>
  <?php include 'components/footer.php'; ?>