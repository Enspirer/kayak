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


Breadcrumbs::for('admin.homepage_news.create', function ($trail) {
    $trail->push('HomePage News', route('admin.homepage_news.create'));
});

Breadcrumbs::for('admin.homepage_news.edit', function ($trail) {
    $trail->push('Edit HomePage News', route('admin.homepage_news.edit',1));
});

Breadcrumbs::for('admin.contact_us.index', function ($trail) {
    $trail->push('Contact Us', route('admin.contact_us.index'));
});
Breadcrumbs::for('admin.contact_us.edit', function ($trail) {
    $trail->push('Status', route('admin.contact_us.edit',1));
});
