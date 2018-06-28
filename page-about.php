<?php 
/*
Template Name: О компании
*/
 ?>

 <?php 
/*
Template Name: Главная
*/
 ?>

 <?php get_header(); ?>
			
			<div class="row">
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
					<!-- /.left-sidebar -->
				</div>
				<!-- /.col-md-4 -->
				<div class="col-lg-8">
					<div class="content">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
					<!-- end content -->

					<?php  get_template_part('directions') ?>
				</div>
				<!-- /.col-md-8 -->
			</div>
			<!-- /.row -->

		</div>
		<!-- /.container -->

		<?php get_footer(); ?>