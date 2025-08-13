<?php

$news_query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<?php if ($news_query->have_posts()) : ?>

<section class="homepage-news-section">
    <div class="container"> 
        <div class="section-header">
            <h2 class="section-title">Our News</h2>
            <p class="section-description">Stay updated with the latest news, insights, and developments in satellite communications and inflight connectivity.</p>
        </div>
        

        <div class="homepage-news-grid">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            

            <article class="homepage-news-card">
                

                <a href="<?php the_permalink(); ?>" class="homepage-news-card-link-overlay" aria-label="Read article: <?php the_title_attribute(); ?>"></a>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="homepage-news-card-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', array('class' => 'homepage-news-thumbnail')); ?>
                        </a>
                    </div>
                <?php endif; ?>
                
                <div class="homepage-news-card-content">

                    <?php if (should_show_post_date(get_the_ID())) : ?>
                        <div class="homepage-news-card-date">
                            <?php echo get_the_date('M j, Y'); ?>
                        </div>
                    <?php endif; ?>

                    <h3 class="homepage-news-card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    

                    <div class="homepage-news-card-excerpt">
                        <?php 
                        if (has_excerpt()) {
                            echo wp_trim_words(get_the_excerpt(), 20, '...');
                        } else {
                            echo wp_trim_words(get_the_content(), 20, '...');
                        }
                        ?>
                    </div>
                    
                    <div class="homepage-news-card-link">
                        <a href="<?php the_permalink(); ?>" class="homepage-read-more-link">
                            <span>Read More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
                                <path d="M0.999507 7.50012L15.1414 7.49985M15.1414 7.49985L10.0027 2.36114M15.1414 7.49985L10.0027 12.6386" stroke="#155BFF" stroke-width="2" stroke-linecap="square"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            
            <?php endwhile; ?>
        </div>
        
        <div class="homepage-news-cta">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="read-all-news-btn">
                <span>Read All News</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
                    <path d="M0.999507 7.50012L15.1414 7.49985M15.1414 7.49985L10.0027 2.36114M15.1414 7.49985L10.0027 12.6386" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                </svg>
            </a>
        </div>
        
    </div>
</section>

<?php 
wp_reset_postdata(); 
endif; 
?>