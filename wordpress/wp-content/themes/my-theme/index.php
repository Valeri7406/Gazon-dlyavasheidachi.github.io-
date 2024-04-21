<?php get_header(); ?>

       <div class="row">       
 <?php get_sidebar(); ?>
            <div class="main">
                <p><h2>Посты от наших любителей газонов:</h2></p><br>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <img src=<?php the_post_thumbnail("medium"); ?>
                    <h2><?php the_title();?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">Читать далее</a><br><br>
                <?php endwhile; ?>
               <?php next_posts_link();?>         
                <?php previous_posts_link();?>
               <?php single_post_title();?>
                             <p>Календарь на 2024 г<?php get_calendar(); ?></p>
                 <?php else: ?>
                    <img src="https://avatars.mds.yandex.net/i?id=a943c4d03ba217b1febcf46df712cfc7579487ad-12144750-images-thumbs&n=13">
                    <h2>Постов пока нет :()</h2>
                    <p>Но мы уже работаем над этим, скоро появится первый пост</p>
                    <a href="цель-1.html">Цель-1</a>
                <?php endif; ?>
           </div>
        </div>

        <?php get_footer(); ?>
    </body>
</html>
