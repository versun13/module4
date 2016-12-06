<h1>Новости по тегу "<?php echo $data['articles'][0]['tag_name'] ?>"</h1>
<?php foreach ($data['articles'] as $value){?>
<h2 id="news_header"><a href="news/display/<?php echo $value['article_id'] ?>" ><?php echo $value['title']; ?></a></h2>
<?php } ?>