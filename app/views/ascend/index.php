<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascending</title>
    <!-- add bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- add custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
               <!-- add card -->
            <div class="col-md-3"></div>
            <div class="col-sm-12 col-md-6">
               <!-- add card -->

                <div class="card">
                     <div class="card-header">
                          <h3 class="card-title">
                            Ascending
                          </h3>
                     </div>
                     <div class="card-body">
                     <p> <strong>Sorted string: </strong><?php echo $data['data']; ?></p>
                     </div>
                     <!-- footer -->
                        <div class="card-footer">
                            <a href="/you_source/public/" class="btn btn-default">
                                Back
                            </a>
                        </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>

