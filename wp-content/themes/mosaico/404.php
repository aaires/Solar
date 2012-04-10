<?php get_header(); ?>
<div id="core" class="container raster">

	<div class="row">

			<h2 class="textcenter"><?php _e('Nothing found here','themnific');?></h2>
            
            <div class="threecol first">
				
                <h3><?php _e('Perhaps You will find something interesting form these lists...','themnific');?></h3>

            </div>
            

            <div class="threecol">

                <h3><?php _e('Pages','themnific');?></h3>

                <ul><?php wp_list_pages("title_li="); ?></ul>

            </div>
            
          	<div class="threecol">
            
               	<h3><?php _e('Categories','themnific');?></h3>
                
				<ul><?php wp_list_categories("title_li="); ?></ul>
                
            </div>            

            <div class="threecol">

                <h3><?php _e('All Blog Posts','themnific');?>:</h3>

                <ul><?php $archive_query = new WP_Query('showposts=1000&cat=-8');
while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>

                        </a>
                    </li>

                    <?php endwhile; ?>
                </ul>

            </div>
            



    </div>

</div>

<?php get_footer(); ?>
