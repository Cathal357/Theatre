<?php 
  //Include header and navigation components
  include '../components/header.php';
  include '../components/navigation.php';
?>

<!-- A div containing login form and background image-->
<div class="flex h-screen w-full items-center justify-center bg-gray-600 bg-cover bg-no-repeat" style="background-image: url('<?= ROOT_DIR ?>assets/images/login_bg.jpeg')">
  
<!-- A div containing the login form -->
  <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-white">
      
    <!-- A div containing logo, title, and subtitle -->
      <div class="mb-8 flex flex-col items-center">
        <img src="<?= ROOT_DIR ?>assets/images/theatre_logo.png" width="150" alt="logo" srcset=""/>
        <h1 class="mb-2 text-2xl">CLYDE THEATRE</h1>
        <span class="text-gray-300">Enter Login Details</span>
      </div>

      <!-- A form to get username and password -->
      <form action="../account/auth/authenticate.php" method="post">
        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-blue-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" 
          type="text" name="username" placeholder="username" />
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-blue-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" 
          type="Password" name="password" placeholder="*********" />
        </div>

        <!-- A div containing the login button -->
        <div class="mt-8 flex justify-center text-lg text-black">
          <input type="submit" class="rounded-3xl bg-blue-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-blue-600" value="LOGIN">
        </div>
      </form>
    </div>
  </div>
</div>

<?php 
  //Include footer component
  include '../components/footer.php';
?>
