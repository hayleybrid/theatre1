<?php 
    session_start();
    include '../components/header.php';
    include '../components/navigation.php';
    include '../account/auth/dbConfig.php';
?>
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mb-12">
   
<div class="text-gray-900 pt-12 pr-0 pb-14 pl-0 ">
  <div class="w-full pt-4 pr-5 pb-6 pl-5 mt-0 mr-auto mb-0 ml-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16
      max-w-7xl">
      </div>
          <a class="text-5xl text-blue-900 font-bold leading-none ">Blogs</a>
</div>
    <!-- annie image -->
    <div class="grid grid-cols-12 sm:px-5 gap-x-8 gap-y-16">
      <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
        <img
            src="<?= ROOT_DIR ?>assets/images/shows/annie.jpeg" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
        <p class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
            rounded-full uppercase inline-block">Entertainment</p>
        <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <div class="pt-2 pr-0 pb-0 pl-0">
          <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
          <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
          <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
        </div>
      </div>
      <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
        <img
            src="<?= ROOT_DIR ?>assets/images/shows/pretty_woman.jpeg" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
        <p class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
            rounded-full uppercase inline-block">Entertainment</p>
        <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <div class="pt-2 pr-0 pb-0 pl-0">
          <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
          <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
          <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
        </div>
      </div>
      <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
        <img
            src="<?= ROOT_DIR ?>assets/images/shows/dirty_dancing.jpeg" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
        <p class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
            rounded-full uppercase inline-block">Entertainment</p>
        <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <div class="pt-2 pr-0 pb-0 pl-0">
          <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
          <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
          <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php
    include '../components/footer.php';
?>