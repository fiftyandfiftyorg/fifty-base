<div id="paginate-links">
  <?php
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $args = array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?page=%#%',
      'total' => $wp_query->max_num_pages,
      'current' => max( 1, get_query_var( 'paged') ),
      'prev_text' => __('Prev'),
      'next_text' => __('Next'),
    );

    echo paginate_links($args);
  ?>
</div>