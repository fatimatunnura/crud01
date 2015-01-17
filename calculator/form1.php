<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>

<header class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Calculator</h3>
                </div>


                <div class="panel-body">
                    <div class="bs-example">
                        <form class="form-horizontal" action="calculator111.php" method="post" role="form">
                            <div class="form-group">
                                <label for="number1" class="col-sm-2 control-label">Enter Number1</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="number1" placeholder="number1" type="number" name="number1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="number2" class="col-sm-2 control-label">Enter Number2</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="number2" placeholder="number2" type="number" name="number2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input value="add" type="radio" name="cal"> Add
                                </label>
                                <label class="radio-inline">
                                    <input  value="subtract" type="radio" name="cal"> Subtract
                                </label>
                                <label class="radio-inline">
                                    <input  value="multiply" type="radio" name="cal">Multiply
                                </label>
                                <label class="radio-inline">
                                    <input value="divide" type="radio" name="cal">Divide
                                </label>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Calculate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>
</html>
