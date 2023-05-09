<?php 
       include '../components/header.php';
       include '../components/navigation.php';
?>
<div class="flex h-screen w-full items-center justify-center bg-gray-200 bg-cover bg-no-repeat" style="background-image:url('assets/images/login_bg.jpg')">
  <div class="rounded-xl bg-gray-100 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-blue-900">
      <div class="mb-8 flex flex-col items-center">
        <img src="<?php ROOT_DIR ?>assets/images/clyde_theatre_tp.png" width="120" alt="" srcset="" />
        <h1 class="mb-2 text-2xl">CLYDE THEATRE</h1>
        <span class="text-blue-900">Enter Login Details</span>
      </div>
      <form action="account/auth/authenticate.php" method="post">
        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-white shadow-lg outline-none backdrop-blur-md" 
          type="text" name="username" placeholder="username" />
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-white shadow-lg outline-none backdrop-blur-md" 
          type="Password" name="password" placeholder="*********" />
        </div>
        <div class="mt-8 flex justify-center text-lg text-black">
          <!-- <button type="submit" 
          class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button> -->
        <input type="submit" class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600" value="LOGIN">

        </div>
      </form>
    </div>
  </div>
</div>
<?php 
    include '../components/footer.php';
?>