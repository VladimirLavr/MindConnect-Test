<!DOCTYPE html>
<html lang="en">

<?php include 'result.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <style>   <?php include 'style.css'; ?>
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="inputGroup">
            <form action="" id="searchForm">
                <div class="form-floating mb-3">
                    <input autocomplete="off" type="text" class="form-control" id="userName" placeholder="userName">
                    <label for="userName">User name</label>
                    <div class="help_block"></div>
                </div>
                <div class="form-floating">
                    <input autocomplete="off" type="text" class="form-control" id="userNumber" placeholder="userNumber">
                    <label for="userNumber">User number</label>
                    <div class="help_block"></div>
                </div>
                <button type="submit" class="btn btn-primary">Post Data</button>
            </form>
            <div class="task"></div>
        </div>
        <div>
            <table id="myTable" class="display">
                <thead>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<script src="index.js"></script>
</body>
</html>

