<?php
/**
 * The template for displaying single posts (news articles)
 * Updated to match Figma design with title on left, content on right
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php while (have_posts()) : the_post(); ?>
        
        <!-- Single Post Container -->
        <div class="single-post-container">
            <div class="container">
                
                <!-- Breadcrumb Navigation -->
                <nav class="breadcrumb-nav" aria-label="Breadcrumb">
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

                <!-- Main Content Grid (like About page) -->
                <div class="post-content-grid">
                    
                    <!-- Left Column - Title & Meta -->
                    <div class="post-heading-column">
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        
                        <div class="post-meta">
                            <time class="post-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                <?php echo get_the_date('F j, Y'); ?>
                            </time>
                            
                            <?php if (get_the_author()) : ?>
                                <br>Author: <?php echo get_the_author(); ?>
                            <?php endif; ?>
                            
                            <?php if (get_the_category()) : ?>
                                <div class="post-categories" style="margin-top: 16px;">
                                    <?php 
                                    $categories = get_the_category();
                                    foreach ($categories as $category) {
                                        echo '<span class="post-category" style="display: inline-block; padding: 4px 12px; background: #f0f4ff; color: #155BFF; font-size: 12px; font-weight: 500; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.5px; margin-right: 8px;">' . esc_html($category->name) . '</span>';
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="post-content-column">
                        <div class="post-content-wrapper">
                            
                            <!-- Featured Image (if available) -->
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-featured-image" style="margin-bottom: 32px;">
                                    <div class="featured-image-wrapper" style="border-radius: 12px; overflow: hidden;">
                                        <?php the_post_thumbnail('large', array('class' => 'post-thumbnail')); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Post Excerpt (if available) -->
                            <?php if (has_excerpt()) : ?>
                                <div class="post-excerpt" style="font-size: 20px; line-height: 1.6; color: #6B7280; font-weight: 400; margin-bottom: 32px;">
                                    <?php the_excerpt(); ?>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Post Content -->
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

        <!-- Back to News -->
        <div class="back-to-news">
            <div class="container">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>" class="back-to-news-link">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.5 5L7.5 10L12.5 15" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Back to All News</span>
                </a>
            </div>
        </div>
        
        <?php endwhile; ?>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>