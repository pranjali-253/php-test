<!DOCTYPE html>
<html>

<head>
  <title> Reverse String </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <h2 style="text-align: center">Reverse String Program</h2>
    <div style="text-align:center">
      <input style="text-align:center" type="text" name="string_name_rev" placeholder="Enter String" class="form-control " required />
      <button style="text-align:center;margin:10px" type="button" name="string_rev" id="string_rev" class="btn btn-success">Reverse String</button>
    </div>
  </div>

</body>

</html>


<script type="text/javascript">
  var base_url = "http://localhost/ci/index.php/";

  $("#string_rev").click(function() {

    var string = $("input[name='string_name_rev']").val();
    $.ajax({
      url: base_url + "ReverseStringController/reverse/" + string,
      type: 'POST',
      error: function() {
        alert('Something is wrong');
      },
      success: function(response) {
        if (response) {
          alert('Reverse of ' + string + ' is ' + response);
        }
      }
    });


  });
</script>