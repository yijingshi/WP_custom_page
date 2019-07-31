<?php if(get_field('hero_image')):?>
<style>
    .hero-image {
        background-image: url("<?php the_field('hero_image');?>");
    }
</style>
<?php endif;?>
<?php get_header(); ?>
<div id="wrapper" class="container-wrapper">
    <div class = "main container-main">
        <div class="hero-image container-fluid">
            <?php if(get_field('hero_content')):?>
                <div class="hero-text">
                    <?php the_field('hero_content');?>
                </div>
            <?php endif;?>
        </div>
    </div>
    <div class="container-fluid text-center container-two">
        <div class="col-xs-12 col-sm-12 container-two-body">
            <?php
                the_field('text_field',$post_id); 
            ?>
        </div>
    </div>

    <div class="container-fluid container-three">
            <div class="container-fluid row cards">
                <?php
                    if( have_rows('card') ):
                    while ( have_rows('card') ) : the_row(); 
                ?>
                <div class="container-row card">
                    <div class="container-img">
                        <?php $image = get_sub_field('first_card_img'); ?>
                        <img src="<?php echo $image;?>" />
                    </div>
                    <div class="container-text text-center">
                        <?php echo get_sub_field('first_card_text'); ?>
                    </div>
                </div>
                <div class="container-row card"> 
                    <div class="container-img">
                        <?php $image = get_sub_field('second_card_img'); ?>
                        <img src="<?php echo $image;?>" />
                    </div>
                    <div class="container-text text-center">
                        <?php echo get_sub_field('second_card_text'); ?>
                    </div>
                </div>
                <div class="container-row card"> 
                    <div class="container-img">
                        <?php $image = get_sub_field('third_card_img'); ?>
                        <img src="<?php echo $image;?>" />
                    </div>
                    <div class="container-text text-center">
                        <?php echo get_sub_field('third_card_text'); ?>
                    </div>
                </div>
                <?php endwhile;
                    else :
                    endif;
                    ?>
            </div>

    </div>

    <div class="container-fluid row container-four">
        <div class="col-xs-12 col-md-6">
            <?php if( get_field('post_image') ): ?>
            <img src="<?php the_field('post_image'); ?>" />
            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="container-four-text">
                <?php the_field('post_text',$post_id); ?>
            </div>
        </div>  
    </div>
    
    <div class="container-fluid container-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="row">
            <div class="col-xs-12">  
            <?php
                if( have_rows('feedback') ):
                while ( have_rows('feedback') ) : the_row(); 
            ?>
            <div class="carousel-inner">
                <div class="item active carousel-body">
                    <div class="carousel-content">
                    <?php echo get_sub_field('feedback_1'); ?>
                    </div>
                </div>
                <div class="item carousel-body">
                    <div class="carousel-content">
                        <?php echo get_sub_field('feedback_2'); ?>  
                    </div>
                </div>
                <div class="item carousel-body">
                    <div class="carousel-content">
                        <?php echo get_sub_field('feedback_3'); ?>
                    </div>
                </div>
            </div>
            
            <?php endwhile;
                else:
                endif;
                ?>
            </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    

    <div class="container-fluid container-five">
        <div>
            <h3><?php the_field('help_header'); ?></h3>
        </div>
        <div class="container-fluid row">
            <?php if( have_rows('help_center') ):
            while ( have_rows('help_center') ) : the_row(); ?>
            <div class="col-xs-12 col-md-6 container-card">
                <div>
                    <?php $image = get_sub_field('help_img_1'); ?>
                    <img src="<?php echo $image;?>" />
                </div>
                <div>
                    <?php echo get_sub_field('help_text_1'); ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 container-card">
                <div>
                    <?php $image = get_sub_field('help_img_2'); ?>
                    <img src="<?php echo $image;?>" />
                </div>
                <div>
                    <?php echo get_sub_field('help_text_2'); ?>
                </div>
            </div>  
        </div>
        <?php endwhile;
        else :
        endif;?>
	</div>    
        
    <div class="container-fluid container-six">
        <div class="searchbar-header text-center">
            <h3><?php the_field('search_bar_header'); ?></h3>
        </div>
        <div class="row searchbar-body">
            <div class="col-md-2"></div>
            <div class="search-bar col-md-6">
                <?php the_field('search_bar'); ?>
            </div>
            <div class="search-button col-md-2">
                <?php the_field('search_bar_bt'); ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    
    <div class="container-fluid container-seven">
        <div class="col-xs-12"> 
            <?php if( have_rows('asked_question_body') ):
            while ( have_rows('asked_question_body') ) : the_row(); ?>
            <div class="seven-header text-center">
                <h3><?php the_field('asked_question_head'); ?></h3>
            </div>
        
            <div class= "seven-body">
                <button class="accordion"><?php echo get_sub_field('question_1'); ?></button>
                <div class="panel">
                    <?php echo get_sub_field('answer_1'); ?>
                </div>
            </div>
            <div class= "seven-body">
                <button class="accordion"><?php echo get_sub_field('question_2'); ?></button>
                <div class="panel">
                    <?php echo get_sub_field('answer_2'); ?>
                </div>
            </div>
            <?php endwhile;
                else :
                endif;?>
        </div> 
    </div> 
</div>
    
<?php get_footer(); ?>