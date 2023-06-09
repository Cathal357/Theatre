<?php 
    session_start();
    include '../../account/auth/dbConfig.php';
    include '../../components/header.php';
    include '../../components/navigation.php';
    

    $blog = $conn->prepare('SELECT 
	
    b.id,
    b.title,
    b.blog_content,
    b.created_on,
    b.img_path,
    b.show_name,
    b.published

   FROM blog b 
   order by b.published DESC ');

$blog->execute();
$blog->store_result();
$blog->bind_result($blogID, $blogTitle, $blogContent, $blogCreated, $imgPath, $showName, $published);
echo $blogID;
?>

  <!-- only show if admin -->
  <?php if (isset($_SESSION['loggedin']) == TRUE && ($_SESSION['is_admin']) == 1): ?>
  <div class="mt-3 flex items-end justify-center mb-10">
    <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
      <button onclick="window.location.href='a/addBlog';" class="text-sm">ADD BLOG ARTICLE</button>
    </div>
  </div>
  <?php endif ?>

<!-- Product List -->
<section class="py-10 bg-gray-100">
  <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
  <?php while ($blog->fetch()): ?>
    <?php if (isset($_SESSION['loggedin']) == TRUE && ($_SESSION['is_admin']) == 1): ?>

  <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
      
        <div class="relative flex items-end overflow-hidden rounded-xl">
          <img src="<?= ROOT_DIR ?>assets/images/shows/<?= $imgPath ?>" alt="<?= $showName ?>" />
        </div>

        <div class="mt-1 p-2">
          <h2 class="text-slate-700"><?= $blogTitle ?></h2>
          <p class="mt-1 text-sm text-slate-400 blog-content">
            <?= $blogContent ?>
          </p>
          <div class="mt-3 flex items-end justify-between">
            <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
             
            <button onclick="window.location.href='blogDetails/<?= $blogID ?>';" class="text-sm">READ MORE...</button>

            </div>
            
          </div>
          <hr class="mt-6 mb-6">
          <?php if($published == 1): ?>
          <p class="mt-1 text-md text-green-400 blog-content">
            Published
          </p>
          <?php else: ?>
            <p class="mt-1 text-md text-red-900 blog-content">
            Not Published
          </p>
          <?php endif ?>
         

          <div class="mt-3 flex items-end justify-between">
              <?php if($published == 1): ?>
            <div class="flex items-center space-x-1.5 rounded-lg bg-slate-500 px-4 py-1.5 text-white duration-100 hover:bg-slate-600">
              <button onclick="window.location.href='<?= ROOT_DIR ?>account/dashboard/admin/config/unpublishBlog.php?bid=<?= $blogID ?>';" class="text-sm">UNPUBLISH</button>
            </div>
            <?php else: ?>
              <div class="flex items-center space-x-1.5 rounded-lg bg-slate-500 px-4 py-1.5 text-white duration-100 hover:bg-slate-600">
              <button onclick="window.location.href='<?= ROOT_DIR ?>account/dashboard/admin/config/publishBlog.php?bid=<?= $blogID ?>';" class="text-sm">PUBLISH</button>
            </div>
            <?php endif ?>
          </div>
        
        </div>
      
    </article>
    <?php elseif($published == 1): ?>
        <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
      
      <div class="relative flex items-end overflow-hidden rounded-xl">
        <img src="<?= ROOT_DIR ?>assets/images/shows/<?= $imgPath ?>" alt="<?= $showName ?>" />
      </div>

      <div class="mt-1 p-2">
        <h2 class="text-slate-700"><?= $blogTitle ?></h2>
        <p class="mt-1 text-sm text-slate-400 blog-content">
          <?= $blogContent ?>
        </p>
        <div class="mt-3 flex items-end justify-between">
          <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
           
          <button onclick="window.location.href='blogDetails/<?= $blogID ?>';" class="text-sm">READ MORE...</button>

          </div>
          
        </div>
        
      
      </div>
    
  </article>
    <?php endif ?>
    <?php endwhile ?>
  
</section>
<?php
    include '../../components/footer.php';
?>