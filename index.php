
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-moi !</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
        <form id="contact-form" method="post" action="" role="form">
            <div class="row">
                <div class="col-lg-6">
                    <label for="firstname" class="form-label">Prénom <span class="blue">*</span></label>
                    <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" >
                    <p class="comments"></p>
                </div>
                <div class="col-lg-6">
                    <label for="name" class="form-label">Nom <span class="blue">*</span></label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" ">
                    <p class="comments"></p>
                </div>
                <div class="col-lg-6">
                    <label for="email" class="form-label">Email <span class="blue">*</span></label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Votre Email" ">
                    <p class="comments"></p>
                </div>
                <div class="col-lg-6">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone" ">
                    <p class="comments"></p>
                </div>
                <div>
                    <label for="message" class="form-label">Message <span class="blue">*</span></label>
                    <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                    <p class="comments"></p>
                </div>
                <div>
                    <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                </div>
                <div>
                    <input type="submit" class="button1" value="Envoyer">
                </div>    
            </div>
        </form>
    </div>
</body>
</html>