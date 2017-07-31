<h3>Главная страница</h3>
<br/>
<?php if($articles):?>
<?php foreach($articles as $article): ?>

    <div class="item">
        <b><?php echo $article['title']; ?></b><br/>
        <i>Дата публикации: <?php echo $article['created_at']; ?></i><br/><br/>
        <p><?php echo Text::limit_words($article['content'], 10); ?></p>

        <p class="more">
            <a href="<?php echo URL::site('articles/'. $article['id']); ?>">Подробнее</a>
        </p>
    </div>
<?php endforeach; ?>
<?php echo $pagination; ?>
<?php endif;?>
