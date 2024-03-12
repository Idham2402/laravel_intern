<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #DDD;
        }
        tr:hover {background-color: #D6EEEE;}
    </style>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h1>Student Form</h1>
                            <div class="form-group">
                            <form>
                                <label for="name">Name:</label><br>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Ali" required><br>
                                <label for="matric">Matric:</label><br>
                                <input class="form-control" type="number" id="matric" name="matric" placeholder="1111111" required><br>
                                <label for="gender">Gender:</label><br>
                                <input class="form-control" type="text" id="gender" name="gender" placeholder="Male/Female" required><br>
                                <label for="image-path">Image path:</label><br>
                                <input class="form-control" type="text" id="image-path" name="image-path" placeholder="images/xxxx" required><br><br>
                                <input type="button" value="submit">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
