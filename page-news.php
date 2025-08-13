<?php

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="news-page-container">
            <div class="breadcrumb-nav">
                <div class="container">
                    <nav class="breadcrumb" aria-label="Breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb-link">Home</a>
                            </li>
                            <li class="breadcrumb-separator">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
                                    <path d="M1 1.5L4 4.5L1 7.5" stroke="#091026" stroke-linecap="square"/>
                                </svg>
                            </li>
                            <li class="breadcrumb-item breadcrumb-current" aria-current="page">
                                <span class="breadcrumb-current">News</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="news-header">
                <div class="container">
                    <h1 class="news-title">News</h1>
                </div>
            </div>

            <div class="news-grid-section">
                <div class="container">
                    <div class="news-grid" id="news-grid">
                        
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $news_query = new WP_Query(array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 12, 
                            'paged' => $paged,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        ));
                        
                        if ($news_query->have_posts()) :
                            while ($news_query->have_posts()) : $news_query->the_post();
                        ?>
                        
                        <article class="news-card">
                            
                            <a href="<?php the_permalink(); ?>" class="news-card-link-overlay" aria-label="Read article: <?php the_title_attribute(); ?>"></a>
                            
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="news-card-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'news-thumbnail')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="news-card-content">
                                <?php if (should_show_post_date(get_the_ID())) : ?>
                                    <div class="news-card-date">
                                        <?php echo get_the_date('M j, Y'); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <h3 class="news-card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                
                                <div class="news-card-excerpt">
                                    <?php 
                                    if (has_excerpt()) {
                                        echo wp_trim_words(get_the_excerpt(), 25, '...');
                                    } else {
                                        echo wp_trim_words(get_the_content(), 25, '...');
                                    }
                                    ?>
                                </div>
                                
                                <div class="news-card-link">
                                    <a href="<?php the_permalink(); ?>" class="read-more-link">
                                        <span>Read More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
                                            <path d="M0.999507 7.50012L15.1414 7.49985M15.1414 7.49985L10.0027 2.36114M15.1414 7.49985L10.0027 12.6386" stroke="#155BFF" stroke-width="2" stroke-linecap="square"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                        
                        <?php 
                            endwhile;
                        else : 
                        ?>
                        
                        <div class="no-posts-found">
                            <div class="container">
                                <h2>No news articles found</h2>
                                <p>There are currently no published articles. Please check back later.</p>
                            </div>
                        </div>
                        
                        <?php endif; ?>
                        
                    </div>
                    

                    <?php if ($news_query->max_num_pages > 1) : ?>
                        <div class="load-more-container">
                            <button class="load-more-btn" id="load-more-posts" 
                                    data-page="<?php echo $paged; ?>" 
                                    data-max-pages="<?php echo $news_query->max_num_pages; ?>">
                                <span class="load-more-text">Load More Articles</span>
                                <div class="load-more-spinner" style="display: none;">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="10" cy="10" r="8" stroke="#487fff" stroke-width="2" stroke-linecap="round" stroke-dasharray="50.27" stroke-dashoffset="12.57">
                                            <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" values="0 10 10;360 10 10"/>
                                        </circle>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    <?php endif; ?>
                    
                    <?php wp_reset_postdata(); ?>
                    
                </div>
            </div>
            
        </div>
        
    </main>
</div>

<?php get_footer(); ?>