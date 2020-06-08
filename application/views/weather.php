<!DOCTYPE html>
<html>

<head>
    <title>Weather Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 style="text-align: center;">Weather Information Page</h2>
        <div class="form-group">
            <div style="text-align:center">
                <input style="text-align:center" type="text" name="city" placeholder="Enter your City" class="form-control " required />
                <button style="text-align:center;margin:10px" type="button" name="add" id="add" class="btn btn-success">Show Weather</button>
            </div>
        </div>
        <div>

            <table id="weather_table" class="table">
                <thead>
                    <tr>
                        <th>City</th>
                        <th>Temperature</th>
                        <th>Humidity</th>
                        <th>Pressure</th>
                        <th>Wind Speed</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>

        <script type="text/javascript">
            $('#weather_table').hide();

            var base_url = "http://localhost/ci/index.php/";

            $("#add").click(function() {
                $('#weather_table').hide();

                var city = $("input[name='city']").val();
                $.ajax({
                    url: base_url + "CityController/",
                    type: 'POST',
                    data: {
                        city: city
                    },
                    error: function() {
                        alert('Something is wrong');
                    },
                    success: function(response) {
                        if (response) {
                            if (response.city && response.temperature && response.humidity && response.pressure && response.speed) {
                                var row = "<tr><td>" + response.city + "</td><td>" + response.temperature + "</td><td>" + response.humidity + "</td><td>" + response.pressure + "</td><td>" + response.speed + "</td></tr>";
                                $("#weather_table tbody").html(row);
                                $("#weather_table").fadeIn(500);
                            }
                        }
                    }
                });
            });
        </script>
</body>

</html>