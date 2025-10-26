<!-- Header -->
<?php include("../templates/header.php") ?>

<section class="blog-post section-header-offset">
    <div class="blog-post-container container">
        <div class="blog-post-data">
            <h3 class="title blog-post-title"><?= htmlspecialchars($currentMeta['title']) ?></h3>
            <div class="article-data">
                <span>Site Info</span>
                <span class="article-data-spacer"></span>
                <span>4 Min read</span>
            </div>
            <img src="<?= htmlspecialchars($currentMeta['og_image']) ?>" alt="">
        </div>

        <div class="container">

         




<?php include("../templates/author.php") ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include("../templates/footer.php") ?>