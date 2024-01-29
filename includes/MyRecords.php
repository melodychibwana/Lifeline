<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wyzy9Dl77Y/3p6IaLZ8StXT5n/fvDUCvx" crossorigin="anonymous">
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <style>
        /* Add custom styles for the fixed left column */
        .table-fixed th:first-child,
        .table-fixed td:first-child {
            position: sticky;
            left: 0;
            background-color: #f8f9fa;
            z-index: 1;
        }
        .table-fixed th, .table-fixed td {
            text-align: left;
            color: black;
        }
    </style>
    <title> Medical Records</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title-primary">View Medical Records</h4>
                        </div>
                        <button id="generatePdfBtn" class="btn btn-primary">Generate Records (PDF)</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="export-table" class="table table-bordered table-fixed">
                                <tbody>
                                    <?php
                                    include "connection.php";

                                    // Assuming you have a session variable for the user's first name, replace '$_SESSION['firstname']' with your actual session variable name.
                                    $loggedInFirstName = $_SESSION['firstname'];

                                    $sql = "SELECT * FROM `medicalrecords` WHERE `firstname` = '$loggedInFirstName'";
                                    $result = mysqli_query($con, $sql);
                                    $count = 0;

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $count += 1;
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td>Firstname:</td>
                                            <td><?php echo $row['firstname'] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Date:</td>
                                            <td><?php echo $row['date'] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Gender:</td>
                                            <td><?php echo $row['gender'] ?></td>
                                        </tr>
                                           <tr>
                                            <th scope="row"></th>
                                            <td>Department:</td>
                                            <td><?php echo $row['department'] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Birth Date:</td>
                                            <td><?php echo $row['age'] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Medical Problems:</td>
                                            <td><?php echo $row['problems'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMKLUvHG3u6Gw4UdGfMEG" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wyzy9Dl77Y/3p6IaLZ8StXT5n/fvDUCvx" crossorigin="anonymous"></script>
    <script>
        // Function to generate and download PDF
        function generatePDF() {
            const element = document.getElementById('export-table');
            html2pdf(element);
        }

        // Attach the click event to the button
        document.getElementById('generatePdfBtn').addEventListener('click', generatePDF);
    </script>
</body>
</html>
