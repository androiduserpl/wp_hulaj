<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="posts">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <article>
        <p class="category">
            <?php the_category(); ?>
        </p>
        <h2>
            <?php the_title(); ?>
        </h2>
        <div class="info">
            <span>
                <?php the_author(); ?></span> |
            <span>
                <?php the_time('d-m-Y'); ?></span>
        </div>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="more">Czytaj więcej</a>
        <p class="comments">
            <?php comments_popup_link ('Brak komentarzy', 'Jeden komentarz', 'Komentarzy: %'); ?>
        </p>

    </article>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

</div>
<!--tutaj zamykamy page-content-->

<?php get_footer(); ?>
