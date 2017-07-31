<h3>Добавить статью</h3>
<div class="add">
    <form action="" method="post">
        <label>Title:</label> <br/><br/>
        <input name="title" type="text"><br/><br/>
        <b class="error"><?php if(isset($errors['title'])) echo $errors['title']; ?></b> <br/>
        <label>Content</label><br/><br/>
        <textarea name="content" cols="25" rows="5"></textarea><br/><br/>
        <b class="error"><?php if(isset($errors['content'])) echo $errors['content']; ?></b><br/>
        <input name="send" type="submit" value="Отправить" />
    </form>
</div>