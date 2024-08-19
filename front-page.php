<?php
get_header(); ?>

<div class="header-postsbox container mt-5 d-flex">
    <?php
    // Get the sticky post
    $sticky = get_option('sticky_posts');
    $sticky_args = array(
        'post__in' => $sticky,
        'ignore_sticky_posts' => 1,
        'posts_per_page' => 1, // Ensures only one sticky post is fetched
    );
    $sticky_query = new WP_Query($sticky_args);
    ?>

    <?php if ($sticky_query->have_posts()) : ?>
        <?php while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
            <div class="wide-postbox">
                    <a href="<?php the_permalink(); ?>">
                        <div class="sticky-post" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>');">
                            <?php
                            // Get the categories of the post
                            $categories = get_the_category();
                            if (!empty($categories)) :
                            ?>
                                <div class="sticky-post-cat">
                                    <?php foreach ($categories as $category) : ?>
                                        <span><?php echo esc_html($category->name); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <h2 class="text-white"><?php the_title(); ?></h2>
                        </div>
                    </a>
               
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <?php
    $header_postsarray = array();
    $category_ids = array(4, 6, 5);
    $counter = 1; ?>
 <div class="postrightcol">
   <?php foreach ($category_ids as $cat_id) {
        // Set up the query arguments
        $args = array(
            'posts_per_page' => 1,
            'cat' => $cat_id,
            'ignore_sticky_posts' => 1,
            'post__not_in' => $header_postsarray // Exclude already displayed posts
        );

        // Create a new WP_Query
        $loop2 = new WP_Query($args);

        // Loop through the posts
        while ($loop2->have_posts()) : $loop2->the_post();
            ?>
           
                 <div class="header-postcards postcards-<?php echo $counter; ?>" <?php if (has_post_thumbnail()) : ?> style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat;" <?php endif; ?>>
               <span class="badge bg-danger text-white"> <?php the_category(); ?></span>
                <h2 class="text-white"><?php the_title(); ?></h2>
                <div><?php the_excerpt(); ?></div>
                <div>
                    <img src="http://blogzine.local/wp-content/uploads/2024/08/Dummy-Gravtar.png">
                    <p>by <?php the_author(); ?> . <?php the_date(); ?></p>
                </div>
            </div>
           
           
            <?php
            $counter++;
        endwhile;
        // Reset post data to avoid conflicts
        wp_reset_postdata();
    }
    ?>
</div>
 </div>

 <!-- ------------ Second Section ------------------------ -->
 <div class="container-fluid cat-list-container-fluid">
    <div class="container cat-list-container">

            <ul>
                <?php wp_list_categories( array(
                    'orderby'            => 'id',
                    'show_count'         => false,
                    'title_li' => false,
                    'show_option_all'     => 'View All Categories',
                   
                ) ); ?>
            </ul>

    </div>
</div>

<!-- ================ -->
<div class="container-fluid cat-list-container-fluid">
    <div class="container cat-list-container">
        <ul id="category-list">
            <?php
            // Get all categories
            $categories = get_categories(array(
                'orderby' => 'id',
                'hide_empty' => false,
            ));

            // Loop through categories and output them
            $count = 0;
            foreach ($categories as $category) {
                // Add a class to hide categories beyond the first 4
                $class = ($count >= 4) ? 'cat-list' : 'hidden';
                echo '<li class="' . $class . '"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                $count++;
            }
            ?>
        </ul>

        <!-- Show All Button -->
        <a href="#" id="show-all-categories">Show All</a>
    </div>
</div>

<script>
    // JavaScript to handle "Show All" button click
    document.getElementById('show-all-categories').addEventListener('click', function(event) {
        event.preventDefault();
        // Show all hidden categories
        var hiddenCategories = document.querySelectorAll('#category-list li.hidden');
        hiddenCategories.forEach(function(category) {
            category.classList.remove('hidden');
        });
        // Hide the "Show All" button after clicking
        this.style.display = 'none';
    });
</script>

<style>
    /* Hide the categories initially beyond the 4th */
    .hidden {
        display: none;
    }
</style>
