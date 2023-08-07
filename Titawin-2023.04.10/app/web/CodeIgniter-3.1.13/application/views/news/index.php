<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo 'id: '.$news_item['id']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo base_url('News/view/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>