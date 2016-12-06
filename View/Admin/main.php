<h1>Добавление категории новостей</h1>
<form method="post">
    <div class="form-group">
        <label for="inputName">Создать новую категорию</label>
        <input name="newCategory" type="text" class="form-control" id="inputName" placeholder="Название категории">
    </div>
    <button type="submit" class="btn btn-default">Добавть категорию</button>
</form>
<br>
<br>
<br>
<h1>Добавление страницы</h1>
<form method="post">
    <div class="form-group">
        <label for="articleName">Название статьи</label>
        <input name="articleName" type="text" class="form-control" id="articleName" placeholder="Название статьи">
    </div>
    <div class="form-group">
        <label for="image">Ссылка на картинку</label>
        <input name="image" type="text" class="form-control" id="image" placeholder="Ссылка на картинку">
    </div>
    <div class="form-group">
        <label for="image">Теги</label>
        <input name="tags" type="text" class="form-control" id="image" placeholder="Политика,Авто,Министр,Коты">
    </div>
    <label for="sel1">Выберите категорию новости:</label>
    <select class="form-control" id="sel1" name="category">
        <option selected disabled>Выберите категорию новости</option>
        <?php foreach ($data['categories'] as $value){?>
        <option value="<?php echo $value['category_id']?>"><?php echo $value['category_name']?></option>
        <?php }?>
    </select>
    <div class="form-group">
        <label for="inputMessage">Контент страницы</label>
        <textarea name="content" class="form-control" id="inputMessage" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Добавть статью</button>
</form>

<a href="admin/agree/" class="btn btn-success" role="button">Просмотреть комментарии необходимые для одобрения категории политика</a>
<a href="admin/addad/" class="btn btn-success" role="button">Панель управления рекламой</a>