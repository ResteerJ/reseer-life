<!-- Header -->
<?php include("../templates/header.php") ?>

<section class="blog-post section-header-offset">
    <div class="blog-post-container container">
        <div class="blog-post-data">
            <h1 class="title blog-post-title"><?= htmlspecialchars($currentMeta['title']) ?></h1>
            <div class="article-data">
                <span>Site Info</span>
                <span class="article-data-spacer"></span>
                <span>4 Min read</span>
            </div>
            <img src="<?= htmlspecialchars($currentMeta['og_image']) ?>" alt="">
        </div>

        <div class="container">

            <div class="about-section">
                <h2>Who Am I</h2>
                <p>
                    Hello there! I’m <strong>Resteer John L. Lumbab</strong> — the owner and creator of this website.
                    I’m 24 years old and currently living in the Philippines.
                    This space is a personal extension of myself — a quiet corner of the internet I call home.
                </p>

                <h2>Why I Built This Website</h2>
                <p>
                    I wanted a place that’s truly mine — not another profile bound by social media rules or algorithms.
                    Here, I can share, build, and write freely without worrying about restrictions, bans, or
                    ever-changing policies.
                    It’s a small piece of digital independence where I have full control over my thoughts and work.
                </p>

                <h2>Everything I Need Is Already Here</h2>
                <p>
                    Whether it’s images, writings, or videos — I can post whatever I want, whenever I want.
                    This website might not have the reach of big platforms, but it gives me something far more valuable:
                    <em>freedom</em>. I can create, edit, or delete as I please — a personal digital studio that grows
                    with me.
                </p>

                <h2>What You’ll Find Here</h2>
                <p>
                    Expect a mix of personal reflections, stories, and creative projects.
                    Sometimes I’ll share lessons I’ve learned through experience; other times, I’ll experiment with
                    ideas, art, or small projects.
                    This site is not about trends or popularity — it’s about expression, curiosity, and growth.
                </p>

                <h2>If You Know Me Personally</h2>
                <p>
                    If you know me in real life, some of what I write here might not match how you see me — and that’s
                    fine.
                    This website is where I think out loud, share what I feel, and explore ideas without filters.
                    Nothing here is meant to impress or offend; it’s simply me being real.
                    If something feels off to you, just let it be and move on.
                </p>

            </div>


            <?php include("../templates/author.php") ?>

        </div>
    </div>
</section>

<!-- Footer -->
<?php include("../templates/footer.php") ?>