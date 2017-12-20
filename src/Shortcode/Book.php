<?php

namespace Fulcrum\Tester\Shortcode;

use Fulcrum\Custom\Shortcode\Shortcode;

class Book extends Shortcode
{
    /**
     * Build the Shortcode HTML and then return it.
     *
     * @since 1.0.0
     *
     * @return string Shortcode HTML
     */
    protected function render()
    {
        $books = $this->getBooks();
        if (!$books->have_posts()) {
            return sprintf('<p>%s</p>', esc_html($this->attributes['no_books_message']));
        }

        ob_start();
        require $this->config->view;
        $html = ob_get_clean();

        wp_reset_postdata();

        return $html;
    }

    protected function renderBook($books)
    {
        while ($books->have_posts()) {
            $books->the_post();

            $bookId    = get_the_ID();
            $permalink = esc_url(get_permalink());

            include $this->config->view_book;
        }
    }

    protected function getBooks()
    {
        $args = [
            'post_type'      => $this->config->postType,
            'posts_per_page' => (int)$this->attributes['number_books'],
            'orderby'        => $this->attributes['orderby'],
        ];

        if (!empty($this->attributes['genre'])) {
            $args['tax_query'] = [
                [
                    'taxonomy' => $this->config->taxonomy,
                    'field'    => 'slug',
                    'terms'    => explode(', ', $this->attributes['genre']),
                ],
            ];
        }

        return new \WP_Query($args);
    }

    protected function renderGenres($bookId)
    {
        $genres = get_the_terms($bookId, $this->config->taxonomy);
        if (empty($genres) || is_wp_error($genres)) {
            return '';
        }

        $lastGenre = end($genres);
        foreach($genres as $genre) {
            include $this->config->view_genre;
            if ($genre !== $lastGenre) {
                echo ', ';
            }
        }
    }
}