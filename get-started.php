<?php
/*
Template Name: User guide
*/
?>

<div class="ui basic red inverted vertical segment">
    <br>
    <br>
    <div class="ui container text-center">
        <h1><?php _e('You don\'t need to be an expert to create a successful company','roots'); ?></h1>
        <h4 class="subtitles"><?php _e('A simple and effective set of business tools to help you innovate and create a business strategy.','roots'); ?></h4>
    </div>
    <br>
    <br>
</div>

<div class="ui basic vertical segment" style="background:#eee">
    <div class="text-center">
        <h2><?php _e('Innovation toolbox','roots'); ?></h2>
        <p><?php _e('Tools are ordered according to categories and phases','roots'); ?></p>
    </div>
    <br>
</div>

<div class="ui basic vertical segment ">
    <div class="ui container">
        <br>
        <div class="ui grid stackable">
            <div class="eight wide column">
                <br>
                <h3><?php _e('Categories','roots'); ?></h3>
                <?php _e('A general classification of tools for your business needs:','roots'); ?>
                    <ul>
                        <li><?php _e('Marketing','roots'); ?></li>
                        <li><?php _e('Sales','roots'); ?></li>
                        <li><?php _e('Customer service','roots'); ?></li>
                        <li><?php _e('Risk Management','roots'); ?></li>
                        <li><?php _e('IT','roots'); ?></li>
                        <li><?php _e('and more...','roots'); ?></li>
                    </ul>
                </div>
                <div class="eight wide column">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/get-started/category.png" width="400" class="ui image" />
                </div>
            </div>
        </div>
    </div>
    <div class="ui basic vertical inverted segment ">
        <br><br>
        <div class="ui container">
            <div class="ui centered grid stackable">
                <div class="five wide column">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/get-started/phases.png" width="300" alt="" class="img-responsive"/>
                </div>
                <div class="one wide column"></div>
                <div class="five wide column">
                    <h2><?php _e('Phases','roots'); ?></h2>
                    <p><?php _e('Submerge in a particular mindset to help you be more effective. We give you the freedom to organize your business project the way it fits your particular needs','roots'); ?></p>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>

    <div class="ui basic red inverted vertical segment">
        <br>
        <div class="ui container">
            <h3 class="text-center"><?php _e('6 basic phases','roots'); ?></h3>
            <br>
            <div class="ui six column centered grid stackable">
                <div class="column aligned center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phases/directions.png" class="fa-stack-1x" alt="" width="80"/>
                    <h4><?php _e('Direction','roots'); ?></h4>
                    <?php _e('Think and reconsider which decision to make and which path to take','roots'); ?>
                </div>
                <div class="column aligned center">
                    <span class="fa-stack fa-5x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phases/discover.png" class="fa-stack-1x" alt="" width="80"/>
                    </span>
                    <h4><?php _e('Discovery','roots'); ?></h4>
                    <?php _e('When you don\'t know. You need to listen, observe and learn','roots'); ?>
                </div>
                <div class="column aligned center">
                    <span class="fa-stack fa-5x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phases/design.png" class="fa-stack-1x" alt="" width="80"/>
                    </span>
                    <h4><?php _e('Design','roots'); ?></h4>
                    <?php _e('A simple, useful and attractive solution takes time and needs thinking','roots'); ?>
                </div>
                <div class="column aligned center">
                    <span class="fa-stack fa-5x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phases/disrupt.png" class="fa-stack-1x" alt="" width="80"/>
                    </span>
                    <h4><?php _e('Disrupt','roots'); ?></h4>
                    <?php _e('Think outside the box, come up with crazy ideas, and let your imagination go wild','roots'); ?>
                </div>
                <div class="column aligned center">
                    <span class="fa-stack fa-5x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phases/defy.png" class="fa-stack-1x" alt="" width="80"/>
                    </span>
                    <h4><?php _e('Defy','roots'); ?></h4>
                    <?php _e('Test your prototypes, assess teams and evaluate your performance','roots'); ?>
                </div>
                <div class="column aligned center">
                    <span class="fa-stack fa-5x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phases/deploy.png" class="fa-stack-1x" alt="" width="80"/>
                    </span>
                    <h4><?php _e('Deploy','roots'); ?></h4>
                    <?php _e('Communication is the first step to deploy your ideas with others','roots'); ?>
                </div>
            </div>
        </div>
        <br>
    </div>

    <div class="ui basic segment vertical">
        <br><br>
        <div class="ui container">
            <h1 class="ui header centered">
                <?php _e('How to use our toolbox','roots') ?>
                <div class="sub header">
                    <?php _e('Each tool is divided in 12 sections, each section will give you an advice on the tool and how to get better','roots') ?>
                </div>
            </h1>
            <br>
            <br>
            <div class="ui two column grid centered stackable gs-tool-section">
                <div class="eight wide column">
                    <h4>1) <?php _e('Tips & Tricks','roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('As the title suggests, tips and tricks gives you advice that will help you accomplish the task faster and better','roots'); ?>
                    </span>
                </div>
                <div class="five wide column">
                    <h4><?php _e('Tips & Tricks','roots') ?></h4>
                    <hr class="sevinci-hr-dark">
                    <ul>
                        <li><?php _e('Try to be objective','roots'); ?></li>
                        <li><?php _e('Order criteria on a scale from 1 to 10','roots'); ?></li>
                        <li><?php _e('Two criteria cannot have the same weight','roots'); ?></li>
                        <li><?php _e('Get the coefficients based on the decision makers opinions','roots'); ?></li>
                    </ul>
                </div>
                <div class="five wide column">
                    <h2 class="ui center aligned icon header">
                        <i class="circular inverted red clock icon"></i>
                        <div class="sub header">
                            60&nbsp; <?php _e('Minutes','roots'); ?>
                        </div>
                    </h2>
                </div>
                <div class="eight wide column">
                    <h4>2) <?php _e('Time','roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('This is an average time for using the tool. Keep in mind that you need at least this amount of time to complete this task. The longer a task takes you the less efficient you are. ','roots'); ?>
                    </span>
                </div>
                <div class="eight wide column">
                    <h4>3) <?php _e('Participants', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('Two brains are better than one, but too many brains are worst than one. We advice people to complete tasks with a certain amount of people, otherwise you will be less efficient. If you are too many divide the people in different groups','roots'); ?>
                    </span>
                </div>
                <div class="five wide column">
                    <h2 class="ui center aligned icon header">
                        <i class="circular inverted red users icon"></i>
                        <div class="sub header">
                            1-2 &nbsp;
                            <?php _e('Participants', 'roots'); ?>
                        </div>
                    </h2>
                </div>
                <div class="five wide column">
                    <h4><i class="fa fa-tags"></i> <?php _e('Tags','roots'); ?></h4>
                    <hr class="sevinci-hr-dark">
                    <?php _e('Diagram','roots') ?><br>
                    <?php _e('Organisation','roots') ?><br>
                    <?php _e('Sequence','roots') ?><br>
                    <?php _e('Structure','roots') ?><br>
                    <?php _e('Task','roots') ?>
                </div>
                <div class="eight wide column">
                    <h4>4) <?php _e('Tags', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('Tags are keywords related to this tool, it helps you make connections between different things, it is connecting the dots','roots'); ?>
                    </span>
                </div>
                <div class="eight wide column">
                    <h4>5) <?php _e('Attitudes', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('Having the right attitude at the right place at the right time will increase your chances of success when you work. It brings you luck. Try to get into the right mood','roots'); ?>
                    </span>
                </div>
                <div class="five wide column">
                    <h4><i class="fa fa-smile-o"></i> <?php _e('Attitudes','roots'); ?></h4>
                    <hr class="sevinci-hr-dark">
                    <?php _e('Analytic','roots'); ?><br>
                    <?php _e('Critical','roots'); ?><br>
                    <?php _e('Rational','roots'); ?><br>
                </div>
                <div class="five wide column">
                    <h4><i class="fa fa-user-md"></i> <?php _e('Used by','roots'); ?></h4>
                    <hr class="sevinci-hr-dark">
                    <?php _e('Advisors','roots'); ?><br>
                    <?php _e('Consultants','roots'); ?><br>
                    <?php _e('Decision makers','roots'); ?><br>
                    <?php _e('Directors','roots'); ?><br>
                    <?php _e('Engineers','roots'); ?><br>
                    <?php _e('Entrepreneurs','roots'); ?>
                </div>
                <div class="eight wide column">
                    <h4>6) <?php _e('Used by', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('This a list of professions that use this tool often in their environment. Our tools work because they have been used by many people for decades. You might not be aware of this because it is not in your field of expertise','roots'); ?>
                    </span>
                </div>
                <div class="five wide column">
                    <h4>7) <?php _e('Quotes', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('As many say, leaders are always readers. A good way motivate people and to inspire action is by using quotes. We added some quotes related to your task, they will help you to ignite the energy you need to succeed','roots'); ?>
                    </span>
                </div>
                <div class="eight wide column aligned center">
                    <h2>"<?php _e('It is in your moments of decision that your destiny is shaped','roots') ?>"</h2>
                    <p><?php _e('Anthony Robbins','roots'); ?></p>
                </div>
                <div class="five wide column">
                    <h4><i class="fa fa-question-circle"></i> <?php _e('Questions','roots'); ?></h4>
                    <hr class="sevinci-hr-dark">
                    <?php _e('How can I make a logical decision?','roots'); ?><br>
                    <?php _e('Is this a good idea?','roots'); ?><br>
                    <?php _e('What is the best option?','roots'); ?><br>
                    <?php _e('Which decision to make?','roots'); ?><br>
                </div>
                <div class="eight wide column">
                    <h4>8) <?php _e('Questions', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('A list of questions that are related to this tool, maybe the tool helps you to answer these questions or maybe these questions could inspire you to find a solution never thought before','roots'); ?>
                    </span>
                </div>
                <div class="eight wide column">
                    <h4>9) <?php _e('Versions', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('Just as cars and cellphones evolve, our tools evolve too. Innovation is in our DNA, we believe in self-improvement. We adapt to new changes and we take new opportunities','roots'); ?>
                    </span>
                </div>
                <div class="five wide column">
                    <h4><i class="fa fa-paste"></i> <?php _e('Versions','roots'); ?></h4>
                    <hr class="sevinci-hr-dark">
                    Version 1.0 : 12/03/2012<br>
                    Version 1.1 : 14/06/2013<br>
                    Version 1.2 : 02/07/2014<br>
                </div>
                <div class="five wide column">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brain/conceptual.png" alt="" width="250"/>
                </div>
                <div class="eight wide column">
                    <h4>10) <?php _e('Brain dominance', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('The Brain dominance section helps you and your colleagues set the right energy to work together. Having the right attitude and mindset will increase your performance while working','roots'); ?>
                    </span>
                </div>
                <div class="five wide column">
                    <h4>11) <?php _e('Sources', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('Sources and references from where these tools come from, its author(s), book(s), website(s) and more. We don\'t take credit for anything, without their work this project would have never existed. We encourage you to buy and read their books and articles because it will help you as much it did to us','roots'); ?>
                    </span>
                </div>
                <div class="eight wide column">
                    <h4><i class="fa fa-book"></i> <?php _e('Sources', 'roots'); ?></h4>
                    <hr class="sevinci-hr-dark">
                    <ul>
                        <li>
                            Disciplined dreaming<br>
                            Josh Linkner, « Disciplined dreaming», United States, Jossy Bass, 2011
                        </li>
                        <li>
                            GameStorming<br>
                            Dave Gray, Sunni Brown & James Makanufo, « GameStorming», United States, O'reiley, 2010
                        </li>
                        <li>
                            Designing For The Multifaceted User<br>
                            Stephanie Troeth, «Designing For The Multifaceted User», Smashing Magazine, 2013<br>
                            http://uxdesign.smashingmagazine.com/2013/03/12/design-multifaceted-user/ (accessed on 08/14/2013)
                        </li>
                    </ul>
                </div>
                <div class="five wide column">
                    <h4><i class="fa fa-pencil"></i> <?php _e('Resources', 'roots'); ?></h4>
                    <hr class="sevinci-hr-dark">
                    <?php _e('Pen','roots'); ?><br>
                    <?php _e('Post-its','roots'); ?><br>
                    <?php _e('Video camera','roots'); ?>
                </div>
                <div class="eight wide column">
                    <h4>12) <?php _e('Resources', 'roots'); ?></h4>
                    <span class="section-subheading text-muted">
                        <?php _e('Did you bring the charger?... This is a list of things to remind you what you need to start working and to accomplish your task, even little things can make you waste your valuable time','roots'); ?>
                    </span>
                </div>
            </div>
        </div>
        <br>
    </div>

    <div class="ui basic vertical segment">
        <div class="ui container text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/get-started/challenge.png"/>
            <h1><?php _e('The innovation challenge','roots'); ?></h1>
            <h1 class="ui header">
                <?php _e('Go through the phases 1 to 6 to innovate','roots'); ?>
                <div class="sub header">
                    <?php _e(' A journey of a thousand miles begins with a single step ','roots'); ?>
                </div>
            </h1>
            <p>-Lao-tzu</p>
            <a class="ui red huge button" href=""><?php _e('Start','roots'); ?></a>
        </div>
    </div>
<br><br>
