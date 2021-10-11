<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';




Breadcrumbs::for('admin.news.index', function ($trail) {
    $trail->push('News', route('admin.news.index'));
});
Breadcrumbs::for('admin.news.create', function ($trail) {
    $trail->push('Create News', route('admin.news.create'));
});
Breadcrumbs::for('admin.news.edit', function ($trail) {
    $trail->push('Edit News', route('admin.news.edit',1));
});
