<?php get_header(); ?>
        <div class="row">      
            <?php get_sidebar(); ?>
            <div class="main">
                <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <mark> Автор записи: </mark><?php get_the_author(); ?> 
                    <?php the_author_link(); ?> <br>       
            </div>
        </div>
        <?php get_footer(); ?>
    </body>
</html>
