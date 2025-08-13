<?php
get_header(); ?>

<main id="primary" class="site-main">
    
    <?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header">
                    <h1 class="entry-title">
                        <?php 
                        if (is_singular()) :
                            the_title();
                        else :
                        ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                    </h1>
                </header>

                <div class="entry-content">
                    <?php 
                    if (is_singular()) :
                        the_content();
                    else :
                        the_excerpt();
                    endif;
                    ?>
                </div>

            </article>
            
        <?php endwhile; ?>
        
        <?php
        the_posts_navigation();
        ?>
        
    <?php else : ?>
        
        <section class="no-results not-found">
            <header class="page-header">
                <h1 class="page-title">Nothing here</h1>
            </header>
            <div class="page-content">
                <p>It looks like nothing was found at this location. Maybe try a search?</p>
                <?php get_search_form(); ?>
            </div>
        </section>
        
    <?php endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>