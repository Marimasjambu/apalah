<?php 
include ('layout/header.php'); 
?>



        <?php
        $packages = [
            ["title" => "Es Teh Manis", "description" => "Teh Manis dengan Es", "image" => "layout/img/teh2.jpg"],
            ["title" => "Lemon Tea", "description" => "Lemon Tea dengan Es", "image" => "layout/img/teh1.jpg"],
            ["title" => "Es Teh Melati", "description" => "Es Teh dengan aroma melati", "image" => "layout/img/teh3.jpg"],
            /*["title" => "Tour Package 3 hari", "description" => "Tour Package 3 Hari 1 peserta include pelayanan, penginapan dan transportasi", "image" => "layout/img/teh3.jpg"],
            ["title" => "Tour Package 4 hari", "description" => "Tour Package 4 Hari 1 peserta include pelayanan, penginapan dan transportasi", "image" => "layout/img/gb3.jpg"],
        */];
        ?>
        
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?php foreach ($packages as $package) : ?>
                            <div class="col-md-6 mb-3">
                                <div class="card" style="width: 22rem;">
                                    <img src="<?php echo $package['image']; ?>" class="card-img-top" alt="Paket 1 Wisata">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $package['title']; ?></h5>
                                        <p class="card-text"><?php echo $package['description']; ?></p>
                                        <a href="#" class="btn btn-primary">Daftar Paket</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!--<div class="col-md-4">
                    <?php //foreach ($video as $v) : ?>
                        <div class="card mb-3 ml-auto" style="width: 22rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?//= $v['title']; ?></h5>
                                <div class="embed-responsive embed-responsive-16by9 video-card">
                                    <iframe class="embed-responsive-item" src="<?//= $v['src']; ?>" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    <?php //endforeach; ?>
                </div>-->
            </div>
        </div>
    </body>
</html>