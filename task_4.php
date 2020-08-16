<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>

                    <?php 
                        $progbars = [

                                [
                                    'title' => 'My Tasks',
                                    'text' => '130 / 500',
                                    'colorcode' => 'bg-fusion-400',
                                    'valuenumb'=> '65',
                                    'valuemin' => '0',
                                    'valuemax' => '100'
                                ],

                                [
                                    'title' => 'Transfered',
                                    'text' => '440 TB',
                                    'colorcode' => 'bg-success-500',
                                    'valuenumb'=> '34',
                                    'valuemin' => '0',
                                    'valuemax' => '100'
                                ],

                                [
                                    'title' => 'Bugs Squashed',
                                    'text' => '77%',
                                    'colorcode' => 'bg-info-400',
                                    'valuenumb'=> '77',
                                    'valuemin' => '0',
                                    'valuemax' => '100'
                                ],

                                [
                                    'title' => 'User Testing',
                                    'text' => '7 days',
                                    'colorcode' => 'bg-primary-300',
                                    'valuenumb'=> '84',
                                    'valuemin' => '0',
                                    'valuemax' => '100'
                                ],

                        ];
                     ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                        <?php foreach ($progbars as $progbar) { ?>
                            <div class="d-flex">
                                <?php echo $progbar['title']; ?>
                                <span class="d-inline-block ml-auto"><?php echo $progbar['text']; ?></span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar <?php echo $progbar['colorcode']; ?>" role="progressbar" style="width: <?php echo $progbar['valuenumb']; ?>%;" aria-valuenow="<?php echo $progbar['valuenumb']; ?>" aria-valuemin="<?php echo $progbar['valuemin']; ?>" aria-valuemax="<?php echo $progbar['valuemax']; ?>"></div>
                            </div>
                         <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
