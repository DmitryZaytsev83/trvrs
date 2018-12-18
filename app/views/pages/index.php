<?php
require APPROOT . '/views/inc/header.php';
echo '<h1>' . $data['title'] . '</h1>';
echo '<ul>';
foreach($data['posts'] as $post) {
    echo '<li>' . $post->title . '</li>';
}
echo '</ul>';
require APPROOT . '/views/inc/footer.php';
