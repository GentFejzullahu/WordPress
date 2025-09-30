<?php
get_headers();


?>
<div id="content" class="site-content">
    <main id="main" class="contact-hero">
     <section class="contact-hero">
        <div class="cotainer">
            <h1>Contact us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

        </div>
     </section>
     <section class="contact-form-hero">
        <div class="cotainer">
           <form action="" method="post" class="contact-form">
            <p>
            <label for="name">your name:</label>
            <input type="text" id="name" name="name" required>
            </p>
            <p>
                   <label for="subject">subject:</label>
            <input type="text" id="subject" name="subject" required>
            </p>
  <p>
                   <label for="message">message:</label>
            <input type="text" id="message" name="message" required>
            </p>

           </form>
        </div>
     </section>
</main>

</div>
<?php get_footer(); ?>