<div class="cards">
    <?php
foreach($database as $album){?>
    <div class="card">

        <img src="<?php echo $album['poster'] ?>" alt="">

        <span class="song_title"> <?php echo $album['title'] ?> </span>
        <span class="author"> <?php echo $album['author'] ?> </span>
        <span class="year"> <?php echo $album['year'] ?> </span>

    </div>

    <?php
    };
    ?>
</div>