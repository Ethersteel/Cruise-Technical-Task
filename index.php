<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Holiday Cruises</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="public/css/main.css" rel="stylesheet" type="text/css"/>
        <script src="public/js/main.js" type="text/javascript"></script>
    </head>
    <body>

        <?php
        require_once('private/init.php');
        ?>

        <?php include('private/shared/header.php'); ?>

        <div class="container">
            <div class="row">
                <div id="nav" class="col-md-12 spacing text-right">
                    <span class="badge badge-pill badge-info">Number of results: <?php echo count($json); ?></span>
                    <nav aria-label="...">
                        <ul id="nav" class="pagination justify-content-end">
                            <?php for ($index = 0; $index < $pagination->totalPages(); $index++) { ?>
                            <li class="page-item"><a class="page-link" href="#" data-page="<?php echo $index + 1 ?>" onclick="loadPage(this.getAttribute('data-page'))"><?php echo $index + 1 ?></a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container">  
            <div class="row">
                <div class="col-md-12">
                    <div id="cruises" class="card-deck">
                        <?php include('private/shared/cruise_template.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div id="nav" class="col-md-12 spacing text-right">
                    <nav aria-label="...">
                        <ul id="nav" class="pagination justify-content-end">
                            <?php for ($index = 0; $index < $pagination->totalPages(); $index++) { ?>
                            <li class="page-item"><a class="page-link" href="#" data-page="<?php echo $index + 1 ?>" onclick="loadPage(this.getAttribute('data-page'))"><?php echo $index + 1 ?></a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <?php include('private/shared/footer.php'); ?> 

    </body>

</html>