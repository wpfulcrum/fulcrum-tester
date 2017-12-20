<a href="<?php echo esc_url(get_term_link($genre->slug, $this->config->taxonomy)); ?>"
   class="genre genre-id-<?php echo esc_attr($genre->term_id); ?>">
    <?php echo esc_html($genre->name); ?>
</a>