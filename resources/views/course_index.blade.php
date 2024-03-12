<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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
</head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h1>Course Index<span class="float-right"><a class="btn btn-primary" href="course_add.php">Add</a></span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Action</th>
                    </tr>  
                </thead>
                <tbody>
                    <tr>
                        <td>4312</td>
                        <td>BLOCKCHAIN AND APPLICATION</td>
                        <td>CSCI</td>
                        <td>
                            <button class="btn btn-success">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td> 4336</td>
                        <td>NETWORK SECURITY</td>
                        <td>CSCI</td>
                        <td>
                            <button class="btn btn-success">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2303</td>
                        <td>DATABASE PROGRAMMING</td>
                        <td>INFO</td>
                        <td>
                            <button class="btn btn-success">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3131</td>
                        <td>KHAT SKILLS COURSE 1</td>
                        <td>CCKS</td>
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
