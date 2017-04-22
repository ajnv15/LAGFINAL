
<script
src="https://code.jquery.com/jquery-3.1.1.slim.js"
integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function (){
$("input[name='dia']").on("change",function (){
// alert("gegeg");
  $.ajax({
    method: "post",
    url: "testesender",
    data: "",
    success: function(data){
      $("#render").html(data);
    }
  });

  //alert("heeehehel");


});

});
</script>


  <!-- /.col-lg-6 -->
  <div class="col-lg-6">
    <div class="col-lg-6" id="radio">
      <div class="input-group">
        <span class="input-group-addon">
          <input type="radio" id="miercoles" name="dia"></input>
          <label for="miercoles">Miercoles</label>
        </span>
      </div>

      <div class="input-group">
        <span class="input-group-addon">
          <input type="radio" id="jueves" name="dia"></input>
          <label for="jueves">Jueves</label>
        </span>
      </div>


      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" id="Viernes" name="dia"></input>
            <label for="Viernes">Viernes</label>
          </span>
        </div>

  </div><!-- /.col-lg-6 -->
</div>


  <div id="render"></div>
