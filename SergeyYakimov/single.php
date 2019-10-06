<?php get_header(); ?>

    <!-- Page Title
	   ================================================== -->
    <div id="page-title">

        <div class="row">

            <div class="ten columns centered text-center">
                <h1>Post<span>.</span></h1>

                <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                    enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
            </div>

        </div>

    </div> <!-- Page Title End-->

    <!-- Content
	================================================== -->
    <div class="content-outer">

        <div id="page-content" class="row">

            <div id="primary" class="eight columns">

                <article class="post">

                    <div class="entry-header cf">

                        <h1><?php the_title(); ?></h1>

                    </div>

                </article>
            </div>

            <div id="secondary" class="four columns end">

				<?php get_sidebar(); ?>

            </div> <!-- Comments End -->

        </div>

    </div> <!-- Content End-->

    <!-- Tweets Section
	================================================== -->
    <section id="tweets">

        <div class="row">

            <div class="tweeter-icon align-center">
                <i class="fa fa-twitter"></i>
            </div>

            <ul id="twitter" class="align-center">
                <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
                    <b><a href="#">2 Days Ago</a></b>
                </li>
                <!--
				<li>
				   <span>
				   This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
				   Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
				   <a href="#">http://t.co/CGIrdxIlI3</a>
				   </span>
				   <b><a href="#">3 Days Ago</a></b>
				</li>
				-->
            </ul>

            <p class="align-center"><a href="#" class="button">Follow us</a></p>

        </div>

    </section> <!-- Tweet Section End-->

<?php get_footer(); ?>