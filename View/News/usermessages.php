<?foreach ($data['messages'] as $value){?>
    <div style="border:1px dashed royalblue; text-align: center;">
        <p1>Имя: <?php echo $value['login'] ?></p1>
        <br>
        <p2>Комментарий: <?php echo $value['message'] ?></p2>
        <br>
        <p2>Рейтинг: <?php echo $value['rating'] ?></p2>
        <br>
        <p2>Опубликовано: <?php echo $value['message_time'] ?></p2>
        <br>
        <?php if (isset($_SESSION['isLogged']) && $_SESSION['is_admin']==1) { ?>
            <a href="news/edit/<?php echo $value['message_id']?>">Редакторовать комментарий</a>
        <?php } ?>
    </div>
<?php }?>
<ul class="pagination">
    <? while ($data['currentPage']<=$data['pagesP']){?>
        <li><a href="news/usermessages/<?php echo $data['messages'][0]['user_id']?>?page=<?php echo $data['currentPage']?>"><?php echo $data['currentPage']+1?></a></li>
        <?php $data['currentPage']++; }?>
</ul>