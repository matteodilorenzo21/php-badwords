<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>PHP Badwords</title>
</head>

<body class="bg-info bg-opacity-25">

    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="form-control text-center shadow-lg pb-2" action="censor.php" method="POST">
                    <label for="paragraph" class="fs-2 mb-2">Paragrafo:</label><br>
                    <textarea name="paragraph" id="paragraph" rows="10" cols="50" class="bg-success bg-opacity-50"></textarea><br><br>
                    <label for="word" class="fs-2">Parola da censurare:</label><br>
                    <input type="text" name="word" id="word" class="bg-success bg-opacity-50">
                    <button type="submit" class="btn btn-primary mb-1 ms-1">Invia</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>