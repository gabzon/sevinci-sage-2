<?php if(!empty($sources)): ?>
   <section class="tool-source">
      <div class="jumbotron" style="background:white">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <h4><i class="fa fa-book"></i> <?php _e('Sources','roots'); ?></h4>
                  <hr>
                  <ul>
                     <?php foreach($sources as $src): ?>
                        <li><?php display_source($src->ID); ?></li>
                     <?php endforeach; ?>
                  </ul>
               </div>
               <div class="col-md-3">
                  <h4><i class="fa fa-pencil"></i> <?php _e('Resources','roots'); ?></h4>
                  <hr>
                  <?php
                     $resource = get_the_terms($post->ID,'resource');
                     if ( $resource && ! is_wp_error( $resource ) ) :
                        foreach ( $resource as $r ):
                           echo $r->name . "<br>";
                        endforeach;
                     endif;
                  ?>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>
