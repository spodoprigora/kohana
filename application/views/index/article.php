<?php if($article): ?>
  <div class="item">
    <strong><?php echo $article['title']; ?></strong><br/>
    <i>Дата публикации: <?php echo $article['created_at']; ?></i><br/><br/>
    <p><?php echo $article['content']; ?></p>
  </div>
<?php else: ?>
  <div class="item">
    Статья не найдена или не существует
  </div>
<?php endif; ?>