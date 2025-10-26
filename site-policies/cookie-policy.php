<!-- Header -->
<?php include("../templates/header.php") ?>

<section class="blog-post section-header-offset">
    <div class="blog-post-container container">
        <div class="blog-post-data">
            <h3 class="title blog-post-title"><?= htmlspecialchars($currentMeta['title']) ?></h3>
            <div class="article-data">
                <span>Site Policies</span>
                <span class="article-data-spacer"></span>
                <span>4 Min read</span>
            </div>
            <img src="<?= htmlspecialchars($currentMeta['og_image']) ?>" alt="">
        </div>

        <div class="container">

            <div class="legal-page" id="cookie-policy">

                <h1>Cookie Policy for Reseer J</h1>
                <p><strong>Effective Date:</strong> October 26, 2025</p>
                <p><strong>Website:</strong> <a href="https://reseer.life" target="_blank"
                        rel="noopener noreferrer">https://reseer.life</a></p>
                <p><strong>Owner:</strong> Resteer John L. Lumbab (Philippines)</p>
                <p><strong>Contact:</strong> <a href="mailto:connect@reseer.life">connect@reseer.life</a></p>

                <hr>

                <h2>1. The Short Version</h2>
                <p>
                    This site doesn’t use cookies in the way most websites do.
                    There are no trackers, no advertising cookies, no hidden analytics scripts.
                    You can browse <strong>Reseer J</strong> freely without a pop-up demanding you “accept all cookies”
                    —
                    because there aren’t any worth accepting.
                </p>

                <h2>2. What Cookies Are (and Why People Use Them)</h2>
                <p>
                    Cookies are small text files that websites store on your device.
                    They’re usually used to keep you logged in, remember settings, track behavior, or serve targeted
                    ads.
                    Since this is a personal blog, there’s no login system, no settings to remember, and no ads to
                    track.
                    So, I have no reason to set or use cookies here.
                </p>

                <h2>3. Analytics (GoatCounter)</h2>
                <p>
                    This website uses <a href="https://www.goatcounter.com/" target="_blank"
                        rel="noopener noreferrer">GoatCounter</a>
                    for analytics.
                    GoatCounter is a privacy-friendly tool that doesn’t use cookies or personal identifiers.
                    It only counts visits in a general, anonymous way — things like which pages are visited and from
                    which type of device.
                    You’re not tracked across sessions or other websites.
                </p>

                <h2>4. Third-Party Embeds</h2>
                <p>
                    Right now, <strong>Reseer J</strong> doesn’t use any embedded content that sets cookies (like
                    YouTube, Google Maps, or social widgets).
                    If that ever changes — for example, if I embed videos or media that come from external services —
                    those services might set their own cookies.
                    When that happens, I’ll update this policy clearly.
                </p>

                <h2>5. PHP and Temporary Cookies</h2>
                <p>
                    Since this site is built with PHP, it might generate a temporary “session cookie” internally,
                    but only if certain features require it — like form submissions or authentication.
                    At the moment, I don’t use any PHP features that set or rely on cookies.
                    If a session cookie is ever used, it’s temporary, anonymous, and deleted automatically when you
                    close your browser.
                </p>

                <h2>6. Managing or Blocking Cookies</h2>
                <p>
                    If you want to make absolutely sure your browser doesn’t store any cookies at all,
                    you can block or delete them in your browser settings.
                    Since this site doesn’t depend on cookies, doing that won’t break anything here.
                </p>

                <h2>7. Future Changes</h2>
                <p>
                    If I ever introduce new features that need cookies — for example, a login system, comment section,
                    or media embedding —
                    this page will be updated first.
                    I’ll explain clearly what’s being added and why.
                    No hidden changes, no sneaky tracking.
                </p>

                <h2>8. Contact</h2>
                <p>
                    If you have any questions about cookies or privacy on this site, just email me directly at
                    <a href="mailto:connect@reseer.life">connect@reseer.life</a>.
                    You’ll get an honest, human response — not an automated legal template.
                </p>

                <h2>9. Final Note</h2>
                <p>
                    <strong>Reseer J</strong> was built to be transparent and respectful of readers.
                    If I ever have to use cookies in the future, they’ll serve a clear purpose — never for advertising,
                    profiling, or tracking.
                </p>

            </div>




<?php include("../templates/author.php") ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include("../templates/footer.php") ?>