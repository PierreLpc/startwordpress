
<body class="EcranIntro">

<?php get_header(); ?>


	<div class="row EcranIntro">


        <div>
            <p class="TxtIntro"> "Voici notre exemple pour le tp git"</p>
            <p> Blalbablablbablba </p>
        </div>

		<div class="col-sm-12">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->

	</div> <!-- /.row -->




<?php get_footer(); ?>

</body>
