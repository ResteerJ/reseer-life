// ======================================================
// 📰 Article Loader for Reseer J (reseer.life)
// Unified JSON system — supports multiple categories per article
// Author: Resteer John L. Lumbab
// ======================================================

fetch('./databases/articles.json')
  .then(response => response.json())
  .then(data => {
    const articles = data.articles;

    /**
     * ---------------------------------------------
     * RENDER FUNCTION
     * Dynamically builds article blocks for a chosen category.
     * @param {string} category - e.g., "trending", "older", "travel"
     * @param {string} containerId - HTML container where articles will appear
     * @param {object} options - { limit, random, template }
     * ---------------------------------------------
     */
    function renderCategory(category, containerId, options = {}) {
      const container = document.getElementById(containerId);
      if (!container) {
        console.warn(`⚠️ Container not found: #${containerId}`);
        return;
      }

      // 🔎 Filter articles by category (case-insensitive)
      let filtered = articles.filter(a =>
        a.categories.map(c => c.toLowerCase()).includes(category.toLowerCase())
      );

      // 🔀 Shuffle if random
      if (options.random) filtered = filtered.sort(() => Math.random() - 0.5);

      // ✂️ Limit the number of displayed articles
      if (options.limit) filtered = filtered.slice(0, options.limit);

      // 🧱 Select the display template
      const templateType = options.template || "default";

      // 🧩 Build the HTML
      container.innerHTML = filtered.map((article, index) => {
        switch (templateType) {

          // -----------------------
          // 🟡 TRENDING TEMPLATE
          // -----------------------
          case "trending":
            return `
              <a href="${article.url}" class="trending-news-box">
                <div class="trending-news-img-box">
                  <span class="trending-number place-items-center">
                    ${String(index + 1).padStart(2, '0')}
                  </span>
                  <img src="${article.image}" alt="${article.title}" class="article-image">
                </div>
                <div class="trending-news-data">
                  <div class="article-data">
                    <span>${article.date}</span>
                    <span class="article-data-spacer"></span>
                    <span>${article.read_time}</span>
                  </div>
                  <h3 class="title article-title">${article.title}</h3>
                </div>
              </a>`;

          // -----------------------
          // 🔵 OLDER POSTS TEMPLATE
          // -----------------------
          case "older":
            return `
              <a href="${article.url}" class="article d-grid">
                <div class="older-posts-article-image-wrapper">
                  <img src="${article.image}" alt="${article.title}" class="article-image">
                </div>
                <div class="article-data-container">
                  <div class="article-data">
                    <span>${article.date}</span>
                    <span class="article-data-spacer"></span>
                    <span>${article.read_time}</span>
                  </div>
                  <h3 class="title article-title">${article.title}</h3>
                  <p class="article-description">${article.description}</p>
                </div>
              </a>`;

          // -----------------------
          // 🟢 DEFAULT TEMPLATE
          // -----------------------
          default:
            return `
              <a href="${article.url}" class="article generic-article">
                <img src="${article.image}" alt="${article.title}" class="article-image">
                <div class="article-info">
                  <span>${article.date}</span>
                  <h3 class="title">${article.title}</h3>
                  <p class="description">${article.description}</p>
                  <div class="categories">
                    ${article.categories
                      .map(c => `<span class="category-tag">${c}</span>`)
                      .join(' ')}
                  </div>
                </div>
              </a>`;
        }
      }).join('') || `<p class="no-articles">No articles found in "${category}"</p>`;
    }

    /**
     * ---------------------------------------------
     * 🌍 RENDER ALL ARTICLES
     * For “All Posts” or archive pages.
     * ---------------------------------------------
     */
    function renderAll(containerId, options = {}) {
      const container = document.getElementById(containerId);
      if (!container) return;

      let allArticles = [...articles];

      if (options.random) allArticles.sort(() => Math.random() - 0.5);
      if (options.limit) allArticles = allArticles.slice(0, options.limit);

      container.innerHTML = allArticles.map(article => `
          <a href="${article.url}" class="article d-grid">
                <div class="older-posts-article-image-wrapper">
                  <img src="${article.image}" alt="${article.title}" class="article-image">
                </div>
                <div class="article-data-container">
                  <div class="article-data">
                    <span>${article.date}</span>
                    <span class="article-data-spacer"></span>
                    <span>${article.read_time}</span>
                  </div>
                  <h3 class="title article-title">${article.title}</h3>
                  <p class="article-description">${article.description}</p>
                </div>
              </a>
      `).join('');
    }

    // ======================================================
    // 🏠 HOMEPAGE USAGE EXAMPLES
    // ======================================================

    // 🟡 Trending News — 5 random items
    renderCategory("trending", "trending-container", {
      limit: 5,
      random: true,
      template: "trending"
    });

    // 🔵 Older Posts — static list
    renderCategory("older", "older-posts-container", {
      template: "older"
    });

    // 📚 Literature Highlights
    renderCategory("literature", "literature-container", {
      limit: 3,
      template: "older"
    });

    // 🧳 Travel Page Example
    renderCategory("travel", "travel-container", {
      template: "default",
      random: true,
      limit: 6
    });

    // 🌍 “All Posts” Page Example
    renderAll("all-container", {
      template: "older",
      random: true,
      limit: 15
    });

    /**
     * 💬 DEV NOTE:
     * To add a new category:
     * 1️⃣ Add `"categories": ["newcategory", ...]` in articles.json
     * 2️⃣ Add a new renderCategory("newcategory", "new-container", {...})
     * You can reuse existing templates or define your own in the switch.
     * Example:
     * renderCategory("reviews", "reviews-container", { template: "default", limit: 4 });
     */
  })
  .catch(error => console.error('❌ Error loading articles:', error));
