<form class="form-inline pull-right lol" action="/news/tags/">
    <div class="form-group">
        <input type="text" class="form-control" id="tags" placeholder="Поиск по тегам" name="tag">
    </div>
    <button type="submit" class="btn btn-default">Поиск</button>
</form>
<br>
<h1><?php echo $data['siteName'] ?>Добро пожаловать на наш новостной сайт</h1>
<h2>Топ 5 комментаторов:</h2>
<div style="border: solid 4px">
    <?php foreach ($data['users'] as $value) { ?>
        <h3><a href="news/usermessages/<?php echo $value['user_id'] ?>?page=0"><?php echo $value['login']; ?>
                <?php echo $value['count(*)']; ?> сообщения</a></h3>


    <?php } ?>
</div>
<h2>Топ 3 самых комментируемых новости за последние сутки:</h2>
<div style="border: solid 4px">
    <?php foreach ($data['threearticle'] as $value) { ?>
        <h3><a href="news/display/<?php echo $value['article_id']?>"><?php echo $value['title']; ?></a></h3>
    <?php } ?>
</div>
<div id="myCarousel" class="carousel slide" style="height: 768px;width: 900px;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php echo $data['articles'][0]['photo'] ?>" style="height: 768px;width: 900px;" alt="image">
            <div class="carousel-caption">
                <h3>
                    <a href="news/display/<?php echo $data['articles'][0]['article_id'] ?>"><?php echo $data['articles'][0]['title'] ?></a>
                </h3>
            </div>
        </div>

        <div class="item">
            <img src="<?php echo $data['articles'][1]['photo'] ?>" style="height: 768px;width: 900px;" alt="image">
            <div class="carousel-caption">
                <h3>
                    <a href="news/display/<?php echo $data['articles'][1]['article_id'] ?>"><?php echo $data['articles'][1]['title'] ?>
                </h3>
            </div>
        </div>

        <div class="item">
            <img src="<?php echo $data['articles'][2]['photo'] ?>" style="height: 768px;width: 900px;" alt="image">
            <div class="carousel-caption">
                <h3>
                    <a href="news/display/<?php echo $data['articles'][2]['article_id'] ?>"><?php echo $data['articles'][2]['title'] ?>
                </h3>
            </div>
        </div>

        <div class="item">
            <img src="<?php echo $data['articles'][3]['photo'] ?>" style="height: 768px;width: 900px;" alt="image">
            <div class="carousel-caption">
                <h3>
                    <a href="news/display/<?php echo $data['articles'][3]['article_id'] ?>"><?php echo $data['articles'][3]['title'] ?>
                </h3>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="row">
    <?php foreach ($data['category'] as $product) { ?>
        <div id="news_block">
            <h1 style="border: solid 5px"><a
                        href="news/pagination/<?php echo $product['category_id'] ?>?page=0"><?php echo $product['category_name']; ?></a>
            </h1>
            <?php foreach ($product['articles'] as $article) { ?>
                <h2 id="news_header"><a
                            href="news/display/<?php echo $article['article_id'] ?>"><?php echo $article['title']; ?></a>
                </h2>
            <?php } ?>
        </div>
    <?php } ?>
</div>