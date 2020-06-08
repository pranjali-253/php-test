<!DOCTYPE html>
<html>

<head>
  <title>Palindrome Checker</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <h2 style="text-align: center">Palindrome Checker</h2>
    <div style="text-align:center">
      <input style="text-align:center" type="text" name="string_name_pal" placeholder="Enter String" class="form-control " required />
      <button style="text-align:center;margin:10px" type="button" name="string_pal" id="string_pal" class="btn btn-success">Check Palindrome</button>
    </div>
  </div>

</body>

</html>


<script type="text/javascript">
  var base_url = "http://localhost/ci/index.php/";

  $("#string_pal").click(function() {

    var input = $("input[name='string_name_pal']").val();
    $.ajax({
      url: base_url + "PalindromeController/isPalindrome/" + input,
      type: 'GET',
      error: function() {
        alert('Something is wrong');
      },
      success: function(response) {
        if (response.isPalindrome) {
          alert('String is palindrome');
        } else {
          alert('String is not palindrome');
        }
      }
    });

  });

</script>