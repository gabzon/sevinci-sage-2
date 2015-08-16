<?php if(!empty($quotes['tool_quote'][0])): ?>
   <?php $quote_count = count($quotes); ?>
   <section class="tool-quote">
      <div id="carousel-tool-quote" class="carousel slide" data-ride="carousel">
         <div class="jumbotron" style="background:white">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <?php $i = 0; ?>
               <?php foreach ($quotes as $key): ?>
                     <li data-target="#carousel-tool-quote" data-slide-to="<?php $i; ?>" class="<?php if($i==0){ echo "active"; } ?>"></li>
               <?php $i++; endforeach; ?>
            </ol>

            <div class="container">
               <!-- Wrapper for slides -->
               <div class="carousel-inner text-center" role="listbox">
                  <?php for ($i=0; $i < $quote_count; $i++): ?>
                        <div class="item col-md-8 col-md-offset-2 <?php if($i==0){echo "active";} ?>">
                           <h2><?php echo $quotes['tool_quote'][$i]; ?></h2>
                           <p> <?php echo $quotes['tool_quote_author'][$i]; ?></p>
                        </div>

                  <?php endfor; ?>
               </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-tool-quote" role="button" data-slide="prev" style="background:transparent">
               <span class="glyphicon glyphicon-chevron-left" style="color:#c90333"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-tool-quote" role="button" data-slide="next" style="background:transparent">
               <span class="glyphicon glyphicon-chevron-right" style="color:#c90333"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </section>
<?php endif; ?>
