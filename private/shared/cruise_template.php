<?php
require_once(dirname(__DIR__) . '/init.php');
//var_dump(json_decode($file, true));
?>

<?php

for ($index = $pagination->offset(); $index < $pagination->limit(); $index++) {
    ?>

    <a href="#">
        <div class="card text-center" data-page="<?php echo $currentPage ?>" style="margin-top: 20px">
            <img class="card-img-top" src="<?php echo $json[$index]['imageurl']; ?>" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title"><?php echo $json[$index]['name']; ?></h3>
                <p class="card-text">Departing from: <?php echo $json[$index]['port']; ?></p>
                <p class="card-text">Cabin: <?php echo $json[$index]['cabinType']; ?></p>
                <p class="card-text">Number of nights: <?php echo $json[$index]['nights']; ?>nts</p>
                <p class="card-text"><small class="text-muted">Departure Date: <?php echo $json[$index]['date']; ?></small></p>
            </div>
            <div class="card-footer">
                <p class="card-text"><small class="text-muted">Cruise from only: £<?php echo $json[$index]['price']; ?></small></p>
            </div>
        </div>
    </a>

    <?php
}
