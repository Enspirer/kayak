<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';




Breadcrumbs::for('admin.news.index', function ($trail) {
    $trail->push('News', route('admin.news.index'));
});

// Breadcrumbs::for('admin.articles.create_article', function ($trail) {
//     $trail->push('Articles / Create', route('admin.articles.create_article'));
// });

// Breadcrumbs::for('admin.articles.edit_article', function ($trail) {
//     $trail->push('Articles / Edit', route('admin.articles.edit_article', 1));
// });