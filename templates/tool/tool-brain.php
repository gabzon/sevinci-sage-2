<section class="tool-brain-dominance">
   <div class="jumbotron">
      <div class="container">
         <div class="col-lg-12 text-center">
            <h2 class="section-heading"><i class="fa fa-line-chart"></i> <?php _e('Boost yourself','roots'); ?></h2>
            <h3 class="section-subheading text-muted"><?php _e('Increase your performance by preparing yourself with the right mindset'); ?></h3>
         </div>
         <?php $brain = Brain::get_brain_dominance($brain); ?>
         <div class="row">
            <div class="col-md-6">
               <img src="<?php echo $brain['img'] ?>" alt="" width="400" class="img-responsive" />
            </div>
            <div class="col-md-6">
               <h3><?php echo $brain['title']; ?></h3>
               <hr class="sevinci-hr-dark">
               <h5><?php echo $brain['tagline']; ?> </h5>
               <strong><?php _e('Interest','roots'); ?>:</strong> <?php echo $brain['interest']; ?>
               <br>
               <strong><?php _e('Focus','roots'); ?>:</strong> <?php echo $brain['focus']; ?>
               <hr class="sevinci-hr-dark">
               <h5><?php _e('Characteristics','roots'); ?> </h5>
               <div class="row">
                  <div class="col-md-6">
                     <?php
                        foreach ($brain['business'] as $b):
                           echo $b ."<br>";
                        endforeach;
                     ?>
                  </div>
                  <div class="col-md-6">
                     <?php
                        foreach ($brain['traits'] as $t):
                           echo $t . "<br>";
                        endforeach;
                     ?>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>
