 <?php get_header(); ?>
			
			<div class="row">
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
					<!-- /.left-sidebar -->
				</div>
				<!-- /.col-md-4 -->
				<div class="col-lg-8">
					<div class="content">
						<h2><?php if (is_category()) {
							$cat_name = get_queried_object()->name;
							echo $cat_name;
						}

						 ?></h2>

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