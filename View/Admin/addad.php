<form method="post">
    <div class="form-group">
        <label for="articleName">Имя товара</label>
        <input name="name" type="text" class="form-control" id="articleName" placeholder="Имя товара или услуги">
    </div>
    <div class="form-group">
        <label for="image">Цена</label>
        <input name="price" type="text" class="form-control" id="image" placeholder="Цена">
    </div>
    <div class="form-group">
        <label for="image">Сайт</label>
        <input name="site" type="text" class="form-control" id="image" placeholder="https://www.ukr.net/">
    </div>
    <label for="sel1">Выберите сторону экрана на которой будет реклама:</label>
    <select class="form-control" id="sel1" name="side">
        <option selected disabled>Выберите категорию новости</option>
        <option value="Left">Левая сторона</option>
        <option value="Right">Правая сторона</option>
    </select>
    <button type="submit" class="btn btn-default">Добавить рекламу</button>
</form>