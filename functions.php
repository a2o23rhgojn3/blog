<?php
add_action('init', function() {
    register_nav_menus([
        'global_nav' => 'グローバルナビゲーション',
    ]);
});