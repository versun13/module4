<script>
    setInterval(function(){
        document.getElementById('readers').innerHTML = Math.floor((Math.random() * 5)+1);
    }, 3000);
</script>
<h1><?php echo $data['article'][0]['title'] ?></h1>
<img src="<?php echo $data['article'][0]['photo'] ?>"> <br>
<p2> <?php echo $data['article'][0]['description'] ?></p2>
<h5><b>Читателей:</b> <?php echo $data['article'][0]['views'] ?></h5>
<h5><b>Читатают сейчас:</b><span id="readers">1</span></h5>
<h5><b>Теги:
        <?php foreach ($data['tags'] as $key => $value) { ?>
            <a href="news/tags/<?php echo $value['tag_id'] ?>"><?php echo $value['tag_name']; ?> </a>
        <?php } ?>
    </b></h5>
<?php if ($_SESSION['isLogged']==1) { ?>
    <a href="news/comment/<?php echo $data['article'][0]['article_id'] ?>" class="btn btn-success" role="button">Комментировать</a>
<?php } ?>
<h3>Комментарии: </h3>
<?php foreach ($data['messages'] as $key => $value) { ?>
    <?php if ($value['category_id'] !== '1' || ($value['category_id'] == '1' && $value['is_agreed'] == '1')) { ?>
        <div style="border:1px solid black; text-align: left;">
            <p1>Имя: <?php echo $value['login'] ?></p1>
            <br>
            <p2>Комментарий: <?php echo $value['message'] ?></p2>
            <br>
            <p2>Рейтинг: <?php echo $value['rating'] ?><a href="news/rating/<?php echo $value['message_id'] ?>?value=1&article=<?php echo $data['article'][0]['article_id']?>">+</a>/<a href="news/rating/<?php echo $value['message_id'] ?>?value=0&article=<?php echo $data['article'][0]['article_id']?>">-</a></p2>
            <br>
            <p2>Опубликовано: <?php echo $value['message_time'] ?></p2>
            <br>
            <?php if (isset($_SESSION['isLogged'])) { ?>
                <a href="news/answer/<?php echo $data['article'][0]['article_id'] ?>?commentId=<?php echo $value['message_id'] ?> ">Ответить
                    на комментарий</a>
            <?php } ?>
            <?php if (isset($_SESSION['isLogged']) && $_SESSION['is_admin']==1) { ?>
                <a href="news/edit/<?php echo $value['message_id']?>">Редакторовать комментарий</a>
            <?php } ?>
        </div>
    <?php } ?>
    <br>
    <br>
    <br>
    <?php foreach ($value['answers'] as $key => $value) { ?>
        <?php if ($value['category_id'] !== '1' || ($value['category_id'] == '1' && $value['is_agreed'] == '1')) { ?>
            <div style="border:1px dashed royalblue; text-align: center;">
                <p1>Имя: <?php echo $value['login'] ?></p1>
                <br>
                <p2>Комментарий: <?php echo $value['message'] ?></p2>
                <br>
                <p2>Рейтинг: <?php echo $value['rating'] ?><a href="news/rating/<?php echo $value['message_id'] ?>?value=1&article=<?php echo $data['article'][0]['article_id']?>">+</a>/<a href="news/rating/<?php echo $value['message_id'] ?>?value=0&article=<?php echo $data['article'][0]['article_id']?>">-</a></p2>
                <br>
                <p2>Опубликовано: <?php echo $value['message_time'] ?></p2>
                <br>
                <?php if (isset($_SESSION['isLogged']) && $_SESSION['is_admin']==1) { ?>
                    <a href="news/edit/<?php echo $value['message_id']?>">Редакторовать комментарий</a>
                <?php } ?>
            </div>
            <br>
        <?php } ?>
    <?php } ?>
<?php } ?>