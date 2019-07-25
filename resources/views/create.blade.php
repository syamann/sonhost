
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                    <label for=""></label>

                    <input type="submit" name="submit" value="submit">

                    <div class="response_msg"></div>
            </div>
        </div></div>

</form>

</body>

</html>