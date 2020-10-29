<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
             <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Capital</th>
                        <th>Poblacio</th>
                        <th>Superficie</th>
                        <th>Region</th>
                        <th>Subregion</th>
                        <th>Bandera</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $paisos=file_get_contents('https://restcountries.eu/rest/v2/all');
                    // echo $paisos;
                    $str_data = file_get_contents("paisos.json");
                    $data = json_decode($str_data, true);
                
                     
                    /*Dynamically generating rows & columns*/
                    for($i = 0; $i < sizeof($data["paisos"]); $i++)
                    {
                      echo"<tr>";
                    echo "<td>" . $data["paisos"][$i]["name"] . "</td>";
                    echo "<td>" . $data["paisos"][$i]["capital"] . "</td>";
                    echo "<td>" . $data["paisos"][$i]["population"] . "</td>";
                    echo "<td>" . $data["paisos"][$i]["area"] . "</td>";
                    echo "<td>" . $data["paisos"][$i]["region"] . "</td>";
                    echo"<td>" . $data["paisos"][$i]["subregion"] . "</td>";
                    echo "<td><img width='50' src='".$data["paisos"][$i]["flag"]."'></td>";
                    echo "</tr>";
                    }
                     
                    /*End tag of table*/
                
                    ?>
                </tbody>





            </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>
</html>
