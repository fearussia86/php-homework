<h2>Главная страница</h2>
<!--$pictures-->
<div class="grid">
    <?php foreach ($pictures as $picture): ?>
    <div>
<!--        заголовок статьи-->
        <h2><?php echo $picture['title']; ?></h2>
        <h2><?php echo $picture['description']; ?></h2>
       
        <a href="/picture/show/<?php echo $picture['id'];?>">
            <img src="/img/<?php echo $picture['img']; ?>">
        </a>
    </div>
    <?php endforeach; ?>
</div>

<div class="grid">
     
      <?php foreach ($articles as $article): ?>
    <div>
<!--        заголовок статьи-->
        <h2><?php echo $article['title']; ?></h2>
        <h2><?php echo $article['content']; ?></h2>
       <h2><?php echo $article['date']; ?></h2>
        
    </div>
    <?php endforeach; ?>
     
</div>