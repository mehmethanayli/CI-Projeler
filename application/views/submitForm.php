<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            background-color: #eee
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0rem rgba(0, 123, 255, .25)
        }

        .btn-secondary:focus {
            box-shadow: 0 0 0 0rem rgba(108, 117, 125, .5)
        }

        .close:focus {
            box-shadow: 0 0 0 0rem rgba(108, 117, 125, .5)
        }

        .mt-200 {
            margin-top: 200px
        }
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'arrows',
                autoAdjustHeight: true,
                transitionEffect: 'fade',
                showStepURLhash: false,

            });

        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-200"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Kay??t Formunu Ba??lat </button> </div> <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form ??rne??i</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">

                        <form action="<?php echo base_url("submitForm/insert") ?>" method="GET">
                            <div id="smartwizard">
                                <ul>
                                    <li><a href="#kullaniciBilgileri">A??ama 1<br /><small>Kullan??c?? Bilgileri</small></a></li>
                                    <li><a href="#kisiselBilgiler">A??ama 2<br /><small>Ki??isel Bilgiler</small></a></li>
                                    <li><a href="#odemeBilgileri">A??ama 3<br /><small>??deme Bilgileri</small></a></li>
                                    <li><a href="#onay">A??ama 4<br /><small>Onay ????lemi</small></a></li>
                                </ul>
                                <div class="mt-4">
                                    <div id="kullaniciBilgileri">
                                        <div class="row">
                                            <div class="col-md-6"> <input type="text" name="isim" class="form-control" placeholder="??sim Giriniz" > </div>
                                            <div class="col-md-6"> <input type="text" name="email" class="form-control" placeholder="Email Giriniz" > </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"> <input type="text" name="kullaniciAdi" class="form-control" placeholder="Kullan??c?? Ad??" > </div>
                                            <div class="col-md-6"> <input type="password" name="parola" class="form-control" placeholder="Parola" > </div>
                                        </div>
                                    </div>
                                    <div id="kisiselBilgiler">
                                        <div class="row">
                                            <div class="col-md-6"> <input type="text" name="adres" class="form-control" placeholder="Address" > </div>
                                            <div class="col-md-6"> <input type="text" name="sehir" class="form-control" placeholder="??ehir" > </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"> <input type="text" name="ilce" class="form-control" placeholder="??l??e" > </div>
                                            <div class="col-md-6"> <input type="text" name="mahalle" class="form-control" placeholder="Mahalle" > </div>
                                        </div>
                                    </div>
                                    <div id="odemeBilgileri" class="">
                                        <div class="row">
                                            <div class="col-md-6"> <input type="text" name="kartNumarasi" class="form-control" placeholder="Kart Numaras??" > </div>
                                            <div class="col-md-6"> <input type="text" name="kartIsim" class="form-control" placeholder="Kart ??zerindeki ??sim" > </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"> <input type="text" name="cvv" class="form-control" placeholder="CVV" > </div>
                                            <div class="col-md-6"> <input type="text" name="gsm" class="form-control" placeholder="Gsm" > </div>
                                        </div>
                                    </div>
                                    <div id="onay" class="">
                                        <div class="row">
                                            <div class="col-md-12"> <input type="submit" class="form-control btn btn-success" value="Formu G??nder" > </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>