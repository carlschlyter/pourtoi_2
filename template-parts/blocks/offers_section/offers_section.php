<?php

$offers = get_field('offers_boxes');

?>


<div class="container-fluid" id="offers-wrap">

    <div class="row" id="offers-row">

        <div class="col-md-12" id="offer-container">

            <?php foreach($offers as $offer) : 
                
            $img = $offer['image']['sizes']['offers-image-2'];
            $label = $offer['label'];
            $text = $offer['text'];
            $link = $offer['link'];
                
            ?>
                
                <div id="offer-box">

                    <img src="<?php echo $img; ?>" alt="" >
                    <h3><?php echo $label; ?></h3>
                    <p><?php echo $text; ?></p>

                </div>
                

            <?php endforeach; ?>


        </div>

    </div>

</div>