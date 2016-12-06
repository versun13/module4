<?foreach ($data['pages'] as $value){?>
<h2 id="news_header"><a href="news/display/<?php echo $value['article_id'] ?>" ><?php echo $value['title']; ?></a></h2>
<?php }?>
<ul class="pagination">
    <? while ($data['currentPage']<=$data['pagesP']){?>
    <li><a href="news/pagination/<?php echo $data['pages'][0]['category_id']?>?page=<?php echo $data['currentPage']?>"><?php echo $data['currentPage']+1?></a></li>
    <?php $data['currentPage']++; }?>
</ul>