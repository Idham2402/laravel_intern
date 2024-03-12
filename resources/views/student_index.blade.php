<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Index</title>
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
                            <h1>Student Index<span class="float-right"><a class="btn btn-primary" href="student_add.php">Add</a></span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Matric</th>
                        <th>Gender</th>
                        <th>Image-path</th>
                        <th>Action</th>
                    </tr>  
                </thead>
                <tbody>
                    <tr>
                        <td>Muhammad Aiman </td>
                        <td>2012034</td>
                        <td>Male</td>
                        <td>images/Aiman.png</td>
                        <td>
                            <button class="btn btn-success">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Muhammad Afiq</td>
                        <td>2012596</td>
                        <td>Male</td>
                        <td>images/Afiq.png</td>
                        <td>
                            <button class="btn btn-success">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Nur Zulaikha</td>
                        <td>2019940</td>
                        <td>Female</td>
                        <td>images/Zulaikha.png</td>
                        <td>
                            <button class="btn btn-success">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Nabilah Aida</td>
                        <td>2014589</td>
                        <td>Female</td>
                        <td>images/Nabilah.png</td>
                        <td>
                            <button class="btn btn-success">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr> 
                </tbody>
            </table>
        </hr>  
    </body>
</html>
