<?php get_header(); ?>

	<main>


		<div id="hero" class="wrapper hero-flex">
			<div>
				<h1>Organize<br><span>your daily jobs</span></h1>
				<p>The only way to get things done.</p>
				<a href="">Meet the To-do list</a>
			</div>
			<div>
				<img id="img-hero" src="https://coopers-henrique.000webhostapp.com/wp-content/uploads/2024/03/hero-img-OPT.jpg" alt="Hero Image">
			</div>
		</div>

		<section id="to-do">
			<h2>To-do List</h2>
			<p class="wrapper">Choose the right plan for you and get in touch through our contact form. We are here to help.</p>
		</section>

		<section id="plans" class="wrapper">
			<?php get_cards() ?>
		</section>

		<section id="blog" class="wrapper">
			<div class="blog">
				<h3>good things</h3>
				<div class="blog-container">
					<?php get_blog_cards() ?>
				</div>
			</div>
			<div class='bg'></div>
		</section>

		<section id="contact" class="wrapper">
            <img  class="form-img" src="https://coopers-henrique.000webhostapp.com/wp-content/uploads/2024/03/form-OPT.png" alt="">
            <span class="green-bar"></span>
            <div class="form-title">
                <img src="https://coopers-henrique.000webhostapp.com/wp-content/uploads/2024/03/icon-mail-OPT.png" alt="">
                <h3>get in</br><span>touch</span></h3>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="874b95e" title="Contact form 1"]'); ?>
        </section>

	</main>

<?php get_footer(); ?>
