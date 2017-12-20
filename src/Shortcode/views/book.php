<article class="<?php post_class(); ?>" itemscope itemtype="https://schema.org/Book">
    <header class="book-header">
        <h2 class="book-title" itemprop="name">
            <a href="<?php echo $permalink; ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
        <p class="book-meta">
            <span class="book-pages"
                  itemprop="numberOfPages"><?php echo (int)esc_attr(get_post_meta($bookId, 'book_number_of_pages', true)); ?></span>
            &middot;
            <span class="book-publisher" itemprop="publisher" itemtype="http://schema.org/Organization" itemscope>
                <span itemprop="name"><?php echo esc_html(get_post_meta($bookId, 'book_publisher', true)); ?></span>
            </span>
        </p>
    </header>
    <div class="book-content" itemprop="description"><?php the_excerpt(); ?></div>
    <footer class="book-footer">
        <p class="book-genre" itemprop="genre"><?php $this->renderGenres($bookId); ?></p>
        <p class="read-more">
            <a href="<?php echo $permalink; ?>" class="button" rel="bookmark">
                <?php echo esc_html($this->attributes['read_more']); ?>
            </a>
        </p>
    </footer>
</article>