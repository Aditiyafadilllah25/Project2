<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend'); ?>/css/maps.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend'); ?>/css/video.css">
</head>
<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> SIG GYM
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Gym_maps.html">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Training.html">Training</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br>

<body class="text-center">
    <div class="container" id="tengah">
        <div class="row">
            <div class="col-lg-6">
                <img src="https://images.hukumonline.com/frontend/lt5ab85eb0a42c8/lt5ac34a841155e.jpg" alt="Workingspace" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <!-- JUMBOTRON -->
                <div class="container">
                    <p class="display-4">SELAMAT DATANG DI
                        <br>SIG PUSAT KEBUGARAN DAN PANDUAN LATIHAN KEBUGARAN</p>
                </div>
                <!-- Trigger Large Modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    START
                </button>
            </div>
        </div>
    </div>
    <!-- Large modal -->
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php foreach ($vidio as $datavidio) { ?>
                <div class="modal-body">
                    <div class="container">
                        <div class="row" id="min-top">
                            <div class="col">
                                <div class="card-deck mb-3 text-center">
                                    <div class="card mb-4 shadow-sm">
                                        <div class="video-container">
                                            <iframe width="853" height="480" src="<?php echo $datavidio->url; ?>" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            	<a style="width: 50%; float: left;" type="button" class="btn btn-primary" href="<?php $prev=$datavidio->id_vidio-1; echo base_url('C_video/getVidio/').$prev; ?>">PREVIOUS</a>
                            </div>
                            <div class="col">
                            	<a style="width: 50%; float: right;" type="button" class="btn btn-primary" href="<?php $next=$datavidio->id_vidio+1; echo base_url('C_video/getVidio/').$next; ?>">NEXT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- /large modal -->
    <!-- <?php 
    	foreach ($vidio as $datavidio) {
    		echo $datavidio->id_vidio;
    		echo $datavidio->url;
    	}
     ?> -->
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>