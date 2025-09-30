<?php
    $title = 'Значение 1';
    echo '<h1>', $title, '</h1>';

    $title = 'Значение 2';
    echo '<div>', $title, '</div>';

    unset($title);
<?php
    $title = 'Заголовок статьи';
    $content = 'Содержимое статьи';
?>

<h1><?= $title; ?></h1>
<div><?= $content; ?></div>
