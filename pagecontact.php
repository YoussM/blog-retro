        <?php

         /*
         Template name:pagecontact
         */
          ?>

         <?php get_header();?>




         <section id="contact" style="">
            <div class="container">
             <div class="row">
             <div class="about_our_company" style="margin-bottom: 20px;">
             <h1 style="color:#fff;">Contacter Moi</h1>
             <div class="titleline-icon"></div>
             <p style="color:#fff;"></p>
           </div>
             </div>
             <div class="row">
           <div class="col-md-8">
       <form name="sentMessage" id="contactForm" novalidate="">
           <div class="row">
               <div class="col-md-6">
         <div class="form-group">
         <input type="text" class="form-control" placeholder="Nom *" id="name" required="" data-validation-required-message="Please enter your name.">
         <p class="help-block text-danger"></p>
         </div>
       <div class="form-group">
     <input type="email" class="form-control" placeholder=" Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
     <p class="help-block text-danger"></p>
           </div>
         <div class="form-group">
     <input type="tel" class="form-control" placeholder="Téléphone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
         <p class="help-block text-danger"></p>
         </div>
         </div>
           <div class="col-md-6">
     <div class="form-group">
       <textarea class="form-control" placeholder="Votre Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                   <p class="help-block text-danger"></p>
                 </div>
            </div>
           <div class="clearfix"></div>
                 <div class="col-lg-12 text-center">
             <div id="success"></div>
       <button type="submit" class="btn btn-xl get" id="btn1" >Envoyer Votre Message</button>

        </div>
       </div>
     </form>
    </div>
    <div class="col-md-4">
     <p style="color:#fff;">
     <strong><i class="fa fa-map-marker"></i> Adresse</strong><br>
     xxxxxxxxxxxxx
    </p>
     <p style="color:#fff;"><strong><i class="fa fa-phone"></i>Numéro De Téléphone</strong><br>
    0606060606</p>
    <p style="color:#fff;">
    <strong><i class="fa fa-envelope"></i>Adresse Email</strong><br>
    Email@info.com</p>
   <p></p>
   </div>
   </div>
  </div>



</body>
<?php get_footer();?>
