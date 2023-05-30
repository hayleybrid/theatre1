
<?php
    session_start();
     include '../../auth/dbConfig.php';
     include '../../../components/header.php';
     include '../../../components/navigation.php';
    $userId = $_SESSION['id'];
     $userComments = $conn->prepare('SELECT 
	
     c.id,
     c.heading,
     c.comment,
     c.date_added,
     c.pending,
     u.id,
     b.img_path
     
     FROM comments c
     LEFT JOIN userblog ub ON c.fk_userBlog = ub.id
     LEFT JOIN blog b ON ub.fk_blog_id = b.id
     LEFT JOIN users u ON ub.fk_user_id = u.id
     where ub.fk_user_id = '.$userId .' 
     order by date_added DESC
     ');
     $userComments->execute();
     $userComments->store_result();
     $userComments->bind_result($cID, $cHeading, $comment, $cDateAdded, $pending, $userID, $imgPath);
     
     $uid = $_SESSION['id'];

     $userDetails = $conn->prepare("SELECT 
           u.username,
           u.active,
           u.email,
           count(distinct ub.fk_blog_id),
           count(ub.fk_user_id)
            FROM comments c
            left join userblog ub ON c.fk_userBlog = ub.id 
             left join users u on ub.fk_user_id = u.id
             left join blog b on ub.fk_blog_id = b.id
             WHERE ub.fk_user_id = $uid
          
     ");
     $userDetails->execute();
     $userDetails->store_result();
     $userDetails->bind_result( $username, $active, $email, $totalBlogs, $totalComments);
     $userDetails->fetch();
?>
<div class="container mx-auto my-5 p-5">
  <!-- account page inner container -->
  <div class="md:flex no-wrap md:-mx-2 ">
    <!-- sidebar -->
  <section class="bg-white dark:bg-gray-900 w-full md:w-9/12 mx-2">
  <?php while ($userComments->fetch()): ?>
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="hidden lg:mt-0 md:col-span-3 lg:flex">
                <img src="<?= ROOT_DIR ?>assets/images/shows/<?= $imgPath ?>" alt="mockup">
            </div>   
            <div class="mr-auto place-self-center md:col-span-9 px-10">
            <p class=" mb-2 font-light text-gray-500  md:text-md lg:text-m dark:text-gray-400">Your added this comment on <?= $cDateAdded ?></p>
                <p class="max-w-2xl mb-4 text-2xl font-extrabold leading-none md:text-2xl xl:text-2xl dark:text-white"><?= $cHeading ?></p>
                <p class=" mb-3 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"><?= $comment ?></p>
                <?php if($pending == 0): ?>
                    <p class="bg-green-900 px-3 py-1 border rounded shadow inline-flex items-center justify-center text-base font-medium text-center text-white">
                        Published
                    </p>
                    <?php else: ?>
                        <p class="bg-orange-900 px-3 py-1 border rounded shadow inline-flex items-center justify-center text-base font-medium text-center text-white">
                        Pending
                    </p>                        
                <?php endif ?>
            
               
            </div>
                        
        </div>
        <?php endwhile ?>
    </section>
                    </div>
                    </div>
    <?php
     include '../../../components/footer.php';
    ?>