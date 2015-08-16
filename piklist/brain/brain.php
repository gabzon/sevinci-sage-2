<?php
class Brain{

   public static function get_brain_dominance($brain){
      // Conceptual Brain ------------------------------------------------------
      $brain_conceptual = array(
            'title'         => __('Conceptual', 'roots'),
            'tagline'	    => __("Experimental Self, Artist, Entrepreneur", 'roots'),
            'img'           => get_stylesheet_directory_uri().'/assets/img/brain/conceptual.png',
            'interest'      => __('Why','roots'),
            'focus'         => __('Future','roots'),
            'business'      => array(
               __('Vision','roots'),
               __('Purpose','roots'),
               __('Long term Strategy','roots'),
               __('New concepts','roots'),
               __('Future trends','roots'),
               __('Global','roots'),
               __('Competition','roots'),
               __('Environment','roots'),
            ),
            'traits'     => array(
               __('Imagination','roots'), __('Synthesis','roots'), __('Intuition','roots'),
               __('Risk Taker','roots'), __('Rules Breaker','roots'), __('Likes surprises','roots'),
               __('Holistic','roots'), __('Infers','roots'),
            )
      );

      // Social Brain ----------------------------------------------------------
      $brain_emotional = array(
         'title'         => __('Emotional', 'roots'),
         'tagline'       => __('Feeling Self, Service and Social', 'roots'),
         'img'           => get_stylesheet_directory_uri().'/assets/img/brain/social.png',
         'interest'      => __('Who','roots'),
         'focus'         => __('Feelings','roots'),
         'business'      => array(
            __('Training','roots'),
            __('Development','roots'),
            __('Customer relations','roots'),
            __('Communication','roots'),
            __('Community','roots'),
            __('Culture','roots'),
            __('Values','roots'),
            __('Recognition','roots'),
            __('Teamwork','roots'),
         ),
         'traits'        => array(
            __('Talker','roots'),
            __('Emotional','roots'),
            __('Sensitive','roots'),
            __('Supportive','roots'),
            __('Teaching','roots'),
            __('Expressive','roots'),
            __('Interpersonal','roots'),
            __('Kinesthetic','roots'),
            __('Spiritual','roots'),
         )
      );

      $brain_structural = array(
         'title'         => __('Structural', 'roots'),
         'tagline'	    => __('Safekeeping Self, Administrator', 'roots'),
         'img'           => get_stylesheet_directory_uri().'/assets/img/brain/structural.png',
         'interest'      => __('How','roots'),
         'focus'         => __('Form','roots'),
         'business'      => array(
            __('Methods','roots'),
            __('Policy','roots'),
            __('Risk reduction','roots'),
            __('Resources','roots'),
            __('Quality','roots'),
            __('Control','roots'),
            __('Timing','roots'),
            __('Regulations','roots'),
         ),
         'traits'     => array(
            __('Plan','roots'),
            __('Controls','roots'),
            __('Establishes procedures','roots'),
            __('Sequence','roots'),
            __('Get things done','roots'),
            __('Reliabilily','roots'),
            __('Takes preventive actions','roots'),
            __('Organisation','roots'),
            __('Administration','roots'),
         )
      );

      $brain_analytical = array(
         'title'         => __('Analytical', 'roots'),
         'tagline'	    => __('Rational Self, Financial, Technical', 'roots'),
         'img'           => get_stylesheet_directory_uri().'/assets/img/brain/analytical.png',
         'interest'      => __('What','roots'),
         'focus'         => __('Facts','roots'),
         'business'      => array (
            __('Goals-Objectives','roots'),
            __('Measurements','roots'),
            __('Financials','roots'),
            __('Efficiency','roots'),
            __('Performace','roots'),
            __('Technology','roots'),
            __('Past Trends','roots'),
         ),
         'traits'       => array(
            __('Logical','roots'),
            __('Problem Solver','roots'),
            __('Mathematical','roots'),
            __('Technical','roots'),
            __('Critical','roots'),
            __('Realistic','roots'),
            __('Quantifies','roots'),
            __('Understand how it works','roots'),
         )
      );

      switch ($brain) {
         case 'C':
            $brain_dominance = $brain_conceptual;
            break;

         case 'E':
            $brain_dominance = $brain_emotional;
            break;

         case 'S':
            $brain_dominance = $brain_structural;
            break;

         case 'A':
            $brain_dominance = $brain_analytical;
            break;
      }
      return $brain_dominance;
   }
}
