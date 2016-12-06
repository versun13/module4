<h3>Комментарии: </h3>
<?php foreach ($data['messages'] as $key => $value) { ?>
    <div style="border:1px solid black; text-align: left;">
        <p1>Имя: <?php echo $value['login'] ?></p1>
        <br>
        <p2>Комментарий: <?php echo $value['message'] ?></p2>
        <br>
        <p2>Рейтинг: <?php echo $value['rating'] ?></p2>
        <br>
        <p2>Опубликовано: <?php echo $value['message_time'] ?></p2>
        <br>

        <a href="admin/allow/<?php echo $value['message_id'] ?> "
           class="btn btn-success" role="button">Комментарий разрешить </a>
    </div>
<?php } ?>
<br>