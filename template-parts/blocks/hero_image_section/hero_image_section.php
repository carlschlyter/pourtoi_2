<?php 

$hero = get_field('hero_image');
$img = $hero['sizes']['hero-image-max'];
$header = get_field('welcome_message_header');
$message = get_field('welcome_message_message');
$logo = get_field('logo');

?>

<div id="hero-container">

    <div class="row">

        <div class="col-md-12" id="hero-box">

            <img src="<?php echo $img ?> " alt="" class="img-fluid">

                <div class="row" id="logo-container">

                    <div class="col-md-2" id="logo-box">

                        <h2> <?php echo $logo; ?> </h2>

                    </div>

                </div>

                <div  class="row" id="welcome-message-container">

                    <div class="col-md-6" id="welcome-message-box">

                        <h1> <?php echo $header ?> </h1>
                        <p> <?php echo $message ?> </p>

                    </div>
                
                </div>

        </div>

    </div>

</div>