<?php
/**
 * The template for displaying single posts (news articles)
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php while (have_posts()) : the_post(); ?>
        
        <!-- Single Post Container -->
        <div class="single-post-container">
            
            <!-- Breadcrumb Navigation -->
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
                            <li class="breadcrumb-item">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>" class="breadcrumb-link">News</a>
                            </li>
                            <li class="breadcrumb-separator">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
                                    <path d="M1 1.5L4 4.5L1 7.5" stroke="#091026" stroke-linecap="square"/>
                                </svg>
                            </li>
                            <li class="breadcrumb-item breadcrumb-current" aria-current="page">
                                <span class="breadcrumb-current"><?php echo wp_trim_words(get_the_title(), 5, '...'); ?></span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Post Header -->
            <div class="post-header">
                <div class="container">
                    <div class="post-meta">
                        <time class="post-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                            <?php echo get_the_date('F j, Y'); ?>
                        </time>
                        
                        <?php if (get_the_category()) : ?>
                            <div class="post-categories">
                                <?php 
                                $categories = get_the_category();
                                foreach ($categories as $category) {
                                    echo '<span class="post-category">' . esc_html($category->name) . '</span>';
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    
                    <?php if (has_excerpt()) : ?>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-featured-image">
                    <div class="container">
                        <div class="featured-image-wrapper">
                            <?php the_post_thumbnail('large', array('class' => 'post-thumbnail')); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Post Content -->
            <div class="post-content">
                <div class="container">
                    <div class="post-content-wrapper">
                        
                        <?php the_content(); ?>
                        
                        <?php
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'gss'),
                            'after'  => '</div>',
                        ));
                        ?>
                        
                    </div>
                </div>
            </div>

            <!-- Post Tags -->
            <?php if (has_tag()) : ?>
                <div class="post-tags">
                    <div class="container">
                        <div class="tags-wrapper">
                            <span class="tags-label">Tags:</span>
                            <div class="tags-list">
                                <?php
                                $tags = get_the_tags();
                                foreach ($tags as $tag) {
                                    echo '<span class="post-tag">' . esc_html($tag->name) . '</span>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Post Navigation -->
            <div class="post-navigation">
                <div class="container">
                    <div class="post-nav-wrapper">
                        
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>
                        
                        <?php if ($prev_post) : ?>
                            <div class="nav-previous">
                                <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="nav-link">
                                    <div class="nav-direction">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 5L7.5 10L12.5 15" stroke="#487fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span>Previous Article</span>
                                    </div>
                                    <h4 class="nav-title"><?php echo esc_html($prev_post->post_title); ?></h4>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($next_post) : ?>
                            <div class="nav-next">
                                <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="nav-link">
                                    <div class="nav-direction">
                                        <span>Next Article</span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#487fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <h4 class="nav-title"><?php echo esc_html($next_post->post_title); ?></h4>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>

            <!-- Back to News -->
            <div class="back-to-news">
                <div class="container">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>" class="back-to-news-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 5L7.5 10L12.5 15" stroke="#487fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Back to All News</span>
                    </a>
                </div>
            </div>

            <!-- Related Posts -->
            <?php
            $related_posts = get_posts(array(
                'category__in' => wp_get_post_categories(get_the_ID()),
                'numberposts' => 3,
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'rand'
            ));
            
            if ($related_posts) :
            ?>
                <div class="related-posts">
                    <div class="container">
                        <h3 class="related-posts-title">Related Articles</h3>
                        <div class="related-posts-grid">
                            
                            <?php foreach ($related_posts as $related_post) : setup_postdata($related_post); ?>
                                <article class="related-post-card">
                                    
                                    <?php if (has_post_thumbnail($related_post->ID)) : ?>
                                        <div class="related-post-image">
                                            <a href="<?php echo esc_url(get_permalink($related_post)); ?>">
                                                <?php echo get_the_post_thumbnail($related_post->ID, 'medium', array('class' => 'related-post-thumbnail')); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="related-post-content">
                                        <div class="related-post-date">
                                            <?php echo get_the_date('M j, Y', $related_post); ?>
                                        </div>
                                        <h4 class="related-post-title">
                                            <a href="<?php echo esc_url(get_permalink($related_post)); ?>">
                                                <?php echo esc_html($related_post->post_title); ?>
                                            </a>
                                        </h4>
                                        <div class="related-post-excerpt">
                                            <?php echo wp_trim_words($related_post->post_content, 15, '...'); ?>
                                        </div>
                                    </div>
                                </article>
                            <?php endforeach; wp_reset_postdata(); ?>
                            
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
        
        <?php endwhile; ?>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>