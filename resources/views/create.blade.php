@extends('layouts.app')
        <!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->

    <style>
        #loading-img{
            display:none;
        }
        .response_msg{
            margin-top:10px;
            font-size:13px;
            background:#E5D669;
            color:#ffffff;
            width:250px;
            padding:3px;
            display:none;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 width="80px">Bize Sorun</h1>
                <form name="contact-form"  method="post" action="{{route('web.question.store')}}" id="contact-form">

                    <div class="boxDetail row clearfix">

                        <div class="askUs_post clearfix">
                            <input name="_token" type="hidden" value="{{csrf_token()}}">

                            <div class="col-md-4 frmSubjects">
                                <div class="ttl">Konu:</div>

                                <select class="form-control" name="baslik">
                                    <option value="0">Konu Seçiniz...</option>
                                    <option value="1">Sipariş</option>
                                    <option value="Site Hakkında">Site Hakkında</option>
                                    <option value="Öneri">Öneri</option>
                                    <option value="Diğer">Diğer</option>
                                </select>
                            </div>

                        </div></div>
                    <div class="form-group">
                        <label for="konu">Konu</label>
                        <input type="text" class="form-control" name="konu" placeholder="konu" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email adresi</label>
                        <input type="email" class="form-control" name="email" placeholder="Email adresinizi giriniz." required>
                    </div>

                    <div class="form-group">
                        <label for="aciklama">Açıklama</label>
                        <textarea name="aciklama" class="form-control" rows="3" cols="28" rows="5" placeholder="Sorunuzu yazınız."></textarea>
                    </div>
                    <!doctype html>
                    <html class="demo">
                    <head>
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
                        <!--[if lt IE 9]>

                        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                        <script src="js/respond.min.js"></script>

                        <![endif]-->
                    </head>

                    </div></div>
        <div class="form-group">


                    <label for="multiple" class="control-label"  >Etiket</label>
                    <select id="multiple" class="form-control select2-multiple" name="label" multiple>
                        <optgroup label="~Eklenmiş Etiketler~">

                            <option value="bug" >Bug</option>
                            <option value="kargo" >Kargo</option>
                            <option value="acil">Acil</option>
                            <option value="hasarli">Hasarlı</option>
                            <option value="iade">İade</option>

                        </optgroup>

                    </select>
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>

                    <script>
                        var placeholder = "Lütfen Etiket Seçiniz...";
                        $( ".select2-single, .select2-multiple" ).select2( {
                            tags: true,
                            tokenSeparators: [',', ' '],
                            placeholder: placeholder,
                            containerCssClass: ':all:'
                        } );

                    </script>
        </div></div></body>
                    </html>
                    <label for=""></label>

                    <input type="submit" name="submit" value="submit">

                    <div class="response_msg"></div>
               </form> </div>
        </div></div>



</body>

</html>
