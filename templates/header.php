<!DOCTYPE html>
<html lang="en">
<head>
<?php
// ==========================================================
// AUTO META TAG SYSTEM (URL Parameter + Auto Page Detection)
// Works globally across pages & subfolders
// Author: Resteer John L. Lumbab
// ==========================================================

// 🧩 Enable debug to show info as HTML comments (set to false for production)
$debug = false;

// 🔹 Locate meta.json safely (first try relative to this file, then document root)
$jsonPath = realpath('./databases/meta.json');
if (!$jsonPath || !file_exists($jsonPath)) {
    $jsonPath = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/databases/meta.json';
}

// 🔹 Load JSON data
$metaRaw = [];
$jsonError = null;
if (file_exists($jsonPath)) {
    $raw = @file_get_contents($jsonPath);
    if ($raw !== false) {
        $metaRaw = json_decode($raw, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $jsonError = json_last_error_msg();
            $metaRaw = [];
        }
    } else {
        $jsonError = 'file_get_contents failed';
    }
} else {
    $jsonError = 'meta.json not found';
}

// 🔹 Normalize JSON keys for case-insensitive access
$metaData = array_change_key_case($metaRaw, CASE_LOWER);

// 🔹 Detect page key (via ?page= param or fallback to PHP filename)
$pageKey = strtolower(trim($_GET['page'] ?? '', ' '));
if ($pageKey === '') {
    $pageKey = strtolower(
        str_replace(
            ['/', '\\', '-', '.php'],
            ['_', '_', '_', ''],
            trim(str_replace($_SERVER['DOCUMENT_ROOT'], '', $_SERVER['SCRIPT_FILENAME']), '/')
        )
    );
    if ($pageKey === '') $pageKey = 'index';
}

// 🔹 Default meta values (yours preserved exactly)
$defaults = [
    'title' => 'Reseer J | Home',
    'description' => "This is my place in the digital world. Here I share my opinions, thoughts, and experiences in my life aspect that I feel just want to share it.",
    'keywords' => "Resteer John L. Lumbab, Personal Blog, Stories, Knowledge, Experiences",
    'author' => 'Resteer John L. Lumbab',
    'canonical' => 'https://reseer.life/',
    'og_image' => '/assets/images/preview.webp',
    'theme_color' => '#0d0d0d',
    'language' => 'English',
    'robots' => 'index, follow'
];

// 🔹 Merge with JSON page meta (or fallback to index/default)
$currentMeta = array_merge($defaults, $metaData[$pageKey] ?? $metaData['index'] ?? []);

// 🔹 Debug info (viewable in page source)
if ($debug) {
    echo "\n<!-- DEBUG INFO\n";
    echo "jsonPath: {$jsonPath}\n";
    echo "jsonExists: " . (file_exists($jsonPath) ? 'yes' : 'no') . "\n";
    echo "jsonError: " . ($jsonError ?? 'none') . "\n";
    echo "pageKey: {$pageKey}\n";
    echo "availableKeys: " . implode(', ', array_keys($metaData)) . "\n";
    echo "metaUsed: " . json_encode($currentMeta, JSON_PRETTY_PRINT) . "\n";
    echo "-->\n";
}
?>

<!-- ======================= META TAGS ======================= -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($currentMeta['title']) ?></title>

<!-- Primary SEO Meta Tags -->
<meta name="title" content="<?= htmlspecialchars($currentMeta['title']) ?>">
<meta name="description" content="<?= htmlspecialchars($currentMeta['description']) ?>">
<meta name="keywords" content="<?= htmlspecialchars($currentMeta['keywords']) ?>">
<meta name="author" content="<?= htmlspecialchars($currentMeta['author']) ?>">
<meta name="robots" content="<?= htmlspecialchars($currentMeta['robots']) ?>">
<meta name="language" content="<?= htmlspecialchars($currentMeta['language']) ?>">
<meta name="theme-color" content="<?= htmlspecialchars($currentMeta['theme_color']) ?>">

<!-- Canonical URL -->
<link rel="canonical" href="<?= htmlspecialchars($currentMeta['canonical']) ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?= htmlspecialchars($currentMeta['canonical']) ?>">
<meta property="og:title" content="<?= htmlspecialchars($currentMeta['title']) ?>">
<meta property="og:description" content="<?= htmlspecialchars($currentMeta['description']) ?>">
<meta property="og:image" content="<?= htmlspecialchars($currentMeta['og_image']) ?>">
<meta property="og:site_name" content="Reseer J">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?= htmlspecialchars($currentMeta['canonical']) ?>">
<meta name="twitter:title" content="<?= htmlspecialchars($currentMeta['title']) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($currentMeta['description']) ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($currentMeta['og_image']) ?>">
<!-- ========================================================== -->

    <!-- ========================================================== -->


    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon.jpg">

    <!-- Stylesheets -->
    <link href="/assets/css/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- Structured Data (JSON-LD for Google) -->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Blog",
    "url": "https://reseer.life/",
    "name": "Reseer J",
    "alternateName": "Reseer J Blog",
    "description": "A personal blog by J. Reseer — exploring reflections, creativity, and personal growth under the Reseer Life project.",
    "author": {
      "@type": "Person",
      "name": "J. Reseer",
      "url": "https://reseer.life/pages/about"
    },
    "publisher": {
      "@type": "Person",
      "name": "J. Reseer"
    },
    "inLanguage": "en"
  }
  </script>
</head>



<body>
    <!-- Header -->
    <header class="header" id="header">

        <nav class="navbar container">
            <a href="/">
                <h2 class="logo">Reseer J</h2>
            </a>

            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="/" class="list-link current">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="/blogs.php?page=blogs" class="list-link">Blog</a>
                    </li>

                     <li class="list-item">
                        <a href="/pages/about.php?page=about" class="list-link">About</a>
                    </li>
                    <li class="list-item">
                        <a href="/pages/contact.php?page=contact" class="list-link">Contact</a>
                    </li>
                    <li class="list-item">
                        <a href="/pages/support.php?page=support" class="list-link">Support</a>
                    </li>

                </ul>
            </div>

            <div class="list list-right">
                <button class="btn place-items-center" id="theme-toggle-btn">
                    <i class="ri-sun-line sun-icon"></i>
                    <i class="ri-moon-line moon-icon"></i>
                </button>

                <button class="btn place-items-center" id="search-icon">
                    <i class="ri-search-line"></i>
                </button>

                <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </button>


            </div>

        </nav>

    </header>

    <!-- Search -->
    <div class="search-form-container container" id="search-form-container">

        <div class="form-container-inner">

            <form action="" class="form">
                <input class="form-input" type="text" placeholder="What are you looking for?">
                <button class="btn form-btn" type="submit">
                    <i class="ri-search-line"></i>
                </button>
            </form>
            <span class="form-note">Or press ESC to close.</span>

        </div>

        <button class="btn form-close-btn place-items-center" id="form-close-btn">
            <i class="ri-close-line"></i>
        </button>

    </div>