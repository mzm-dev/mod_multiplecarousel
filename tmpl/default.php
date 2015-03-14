<?php
/**
 * @version     1.0
 * @package     mod_multiplecarousel
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Mohamad Zaki Mustafa <mohdzaki04@gmail.com>
 */
//No Direct Access
defined('_JEXEC') or die;
?>
<link rel="stylesheet" href="<?php echo JURI::base(); ?>media/mod_multiplecarousel/css/mod_multiplecarousel.css" type="text/css" />
<script src="<?php echo JURI::base() ?>media/mod_multiplecarousel/css/mod_multiplecarousel.js"></script>            
<div class="panel">

    <div class="carousel-slide carousel slide" id="<?php echo $moduleid_sfx; ?>">                
        <!-- Wrapper for slides -->
        <div class="carousel-items carousel-inner">
            <?php //print_r($data_slide); ?>
            <?php
            foreach ($slideritems as $key => $item) {
                $active = ($key == 1) ? " active" : "";
                if (!empty($item['image'])):
                    ?>            
                    <div class="item<?php echo $active; ?>">
                        <div class="col-lg-4 col-xs-12 col-md-4 col-sm-6">
                            <a title="<?php echo $item['caption']; ?>" href="<?php echo (!empty($item['link'])) ? $item['link'] : "#"; ?>">
                                <div class="jumbotron">
                                    <div class="jumbotron-photo">
                                        <?php if ($item['image']) : ?>                       
                                            <img src="<?php echo JURI::base(); ?><?php echo $item['image']; ?>" alt="<?php echo $item['caption']; ?>" />
                                            <?php
                                        else:
                                            echo '<img src="http://placehold.it/250x150">';
                                        endif;
                                        ?>
                                    </div>
                                    <div class="jumbotron-captions"><p>
                                            <?php echo (!empty($item['caption']) ? $item['caption'] : "Caption Empty"); ?>
                                        </p></div>
                                </div>                                        
                            </a>
                        </div>                                               
                    </div>        
                    <?php
                endif;
            }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#<?php echo $moduleid_sfx; ?>" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#<?php echo $moduleid_sfx; ?>" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
</div>