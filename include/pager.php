<!-- Pager-->
<?php if(get_next_posts_link() && get_previous_posts_link()): ?>
    <div class="d-flex justify-content-around mb-4">    
<?php elseif(!get_next_posts_link()): ?>
    <div class="d-flex justify-content-start mb-4">
<?php elseif(!get_previous_posts_link()): ?>
    <div class="d-flex justify-content-end mb-4">
<?php endif; ?>
<?php
$link = get_previous_posts_link('新しい記事へ &larr;');
if ($link) {
    $link = str_replace('<a', '<a class="btn btn-primary"', $link);
    echo $link;
}
?>
<?php
$link = get_next_posts_link('古い記事へ &rarr;');
if ($link) {
    $link = str_replace('<a', '<a class="btn btn-primary"', $link);
    echo $link;
}
?>
</div>