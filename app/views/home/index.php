<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                          <h3>
                             String Sorter
                          </h3>
                     </div>
                     <div class="card-body">
                          <!-- form to sort string -->
                            <form action="ascend" id="sort-form" method="post">
                                <div class="form-group">
                                    <label for="string">Enter String</label>
                                    <input type="text" class="form-control" id="string" name="string" placeholder="Enter String">
                                </div>
                                <div class="form-group">
                                    <!-- strategy for sorting -->
                                    <label for="strategy">Select Strategy</label>
                                    <select class="form-control" id="strategy" name="strategy">
                                        <option value="ascend">Ascending</option>
                                        <option value="descend">Descending</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                     </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        // ready document
        $(document).ready(
            function(){
                $("#strategy").on('change', function(e){
                    $("#sort-form").attr('action', $(this).val());
                })

            }
        )
    </script>
</body>
</html>

