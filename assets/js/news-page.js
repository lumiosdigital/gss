/**
 * News Page JavaScript
 * Handles load more functionality and infinite scroll
 */

(function($) {
    'use strict';

    class NewsPage {
        constructor() {
            this.loadMoreBtn = $('#load-more-posts');
            this.newsGrid = $('#news-grid');
            this.currentPage = parseInt(this.loadMoreBtn.data('page')) || 1;
            this.maxPages = parseInt(this.loadMoreBtn.data('max-pages')) || 1;
            this.loading = false;
            
            this.init();
        }

        init() {
            if (this.loadMoreBtn.length) {
                this.bindEvents();
                this.setupInfiniteScroll();
            }
        }

        bindEvents() {
            // Load more button click
            this.loadMoreBtn.on('click', (e) => {
                e.preventDefault();
                this.loadMorePosts();
            });
        }

        setupInfiniteScroll() {
            // Optional: Automatic infinite scroll when near bottom
            $(window).on('scroll', () => {
                if (this.shouldLoadMore()) {
                    this.loadMorePosts();
                }
            });
        }

        shouldLoadMore() {
            if (this.loading || this.currentPage >= this.maxPages) {
                return false;
            }

            const scrollTop = $(window).scrollTop();
            const windowHeight = $(window).height();
            const documentHeight = $(document).height();
            const scrollPercentage = (scrollTop + windowHeight) / documentHeight;

            // Load more when user scrolled 80% of the page
            return scrollPercentage > 0.8;
        }

        loadMorePosts() {
            if (this.loading || this.currentPage >= this.maxPages) {
                return;
            }

            this.loading = true;
            this.setLoadingState(true);

            const nextPage = this.currentPage + 1;

            // AJAX request to load more posts
            $.ajax({
                url: ajax_object.ajax_url, // WordPress AJAX URL
                type: 'POST',
                data: {
                    action: 'load_more_posts',
                    page: nextPage,
                    nonce: ajax_object.nonce
                },
                success: (response) => {
                    if (response.success && response.data.html) {
                        this.appendPosts(response.data.html);
                        this.currentPage = nextPage;
                        this.updateButtonState();
                        
                        // Animate new posts
                        this.animateNewPosts();
                    } else {
                        this.showError('Failed to load more posts.');
                    }
                },
                error: () => {
                    this.showError('Network error. Please try again.');
                },
                complete: () => {
                    this.loading = false;
                    this.setLoadingState(false);
                }
            });
        }

        appendPosts(html) {
            const newPosts = $(html);
            
            // Hide new posts initially for animation
            newPosts.css('opacity', '0').css('transform', 'translateY(20px)');
            
            // Append to grid
            this.newsGrid.append(newPosts);
        }

        animateNewPosts() {
            // Animate the last batch of posts that were added
            const allCards = this.newsGrid.find('.news-card');
            const newCards = allCards.slice(-12); // Assuming 12 posts per load
            
            newCards.each((index, card) => {
                setTimeout(() => {
                    $(card).css({
                        'transition': 'opacity 0.5s ease, transform 0.5s ease',
                        'opacity': '1',
                        'transform': 'translateY(0)'
                    });
                }, index * 100); // Stagger animation
            });
        }

        updateButtonState() {
            if (this.currentPage >= this.maxPages) {
                this.loadMoreBtn.hide();
            } else {
                this.loadMoreBtn.data('page', this.currentPage);
            }
        }

        setLoadingState(loading) {
            if (loading) {
                this.loadMoreBtn.prop('disabled', true);
                this.loadMoreBtn.find('.load-more-text').text('Loading...');
                this.loadMoreBtn.find('.load-more-spinner').show();
            } else {
                this.loadMoreBtn.prop('disabled', false);
                this.loadMoreBtn.find('.load-more-text').text('Load More Articles');
                this.loadMoreBtn.find('.load-more-spinner').hide();
            }
        }

        showError(message) {
            // Create temporary error message
            const errorMsg = $('<div class="load-more-error">' + message + '</div>');
            errorMsg.css({
                'color': '#dc3545',
                'text-align': 'center',
                'margin-top': '1rem',
                'padding': '1rem',
                'background': '#f8d7da',
                'border': '1px solid #f5c6cb',
                'border-radius': '0.25rem'
            });
            
            this.loadMoreBtn.after(errorMsg);
            
            // Remove error message after 5 seconds
            setTimeout(() => {
                errorMsg.fadeOut(() => errorMsg.remove());
            }, 5000);
        }
    }

    // Initialize when document is ready
    $(document).ready(() => {
        new NewsPage();
    });

})(jQuery);