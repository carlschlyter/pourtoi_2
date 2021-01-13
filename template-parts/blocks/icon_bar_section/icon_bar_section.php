<?php 

$icons = get_field('icons');

?>

<div class="container-fluid" id="icon-bar-container">

    <div class="row">

        <div class="col-md-12" id="icon-container">

            <?php foreach($icons as $img) : 
            
            $cap = $img['label'];
            $pic = $img['icon']['sizes']['icon-image'];    
            
            ?>

                    <div id="icon-box">

                        <img src="<?php echo $pic; ?>" alt="" class="img-fluid">
                        <p><?php echo $cap; ?></p>

                    </div>   

            <?php endforeach; ?>    

        </div>

    </div>

</div>