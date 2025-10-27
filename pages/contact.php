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

            <div class="contact-section">
                <h1>Contact Me</h1>

                <p>
                    Hello! If you’d like to get in touch with me regarding my projects, thoughts, or anything related to
                    this site,
                    you can contact me directly by email.
                </p>
</br>
                <p>
                    <strong>Important:</strong> I do not use any contact forms on this website.
                    As stated in my Privacy Policy, I prefer direct email communication to protect your privacy.
                    This means no personal data is collected or stored on this site — your message stays completely
                    between us.
                </p>
</br>
                <p>
                    <a href="mailto:connect@reseer.life?subject=Hello%20Resteer">📧 Send me an email</a>
                </p>
</br>

                <p>
                    If the button above doesn’t work, you can manually send your message to:
                    <strong>connect@reseer.life</strong>
                </p>
            </div>




         <?php include("../templates/author.php") ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include("../templates/footer.php") ?>