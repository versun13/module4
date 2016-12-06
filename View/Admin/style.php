<form method="post">
    <label for="sel1">Выберите шапку сайта:</label>
    <select class="form-control" id="sel1" name="head">
        <option selected disabled>Выберите шапку сайта</option>
        <?php foreach ($data['head'] as $value){?>
            <option value="<?php echo $value['head_id']?>"><?php echo $value['name']?></option>
        <?php }?>
    </select>
    <button type="submit" class="btn btn-default">Добавть статью</button>
</form>
<form method="post">
    <label for="sel1">Выберите цвет фона сайта:</label>
    <select class="form-control" id="sel1" name="back">
        <option selected disabled>Выберите цвет фона сайта</option>
        <?php foreach ($data['back'] as $value){?>
            <option value="<?php echo $value['back_id']?>"><?php echo $value['back_color']?></option>
        <?php }?>
    </select>
    <button type="submit" class="btn btn-default">Добавть статью</button>
</form>