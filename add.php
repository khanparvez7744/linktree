<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociapa.Social</title>
    <link rel="icon" href="images2/favicon.png" sizes="32x32">
    <meta name="title" content="Sociapa.Social">
    <meta name="keywords" content="Sociapa.Social">
    <meta name="description" content="Sociapa.Social">
    <meta name="author" content="Sociapa.Social">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css2/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <?php include('navbar.php'); ?>
 <div class="container indCont">
   <div class="row">
     <div class="col s12 m12 l12 xl6 offset-xl3">
        <form class="insertForm insLinkFrm" method="post">
          <div class="row">
          <div class="col s4">
            </div>
            <div class=" col s8">
               <h1 class="center Poppins-SemiBold">Add Your Social Links</h1>
            </div>
          </div>
          <div class="row">
            <div class="col s4">
            </div>
            <div class=" col s8 center">
            <div class="file-upload">
                 <div class="file-upload-content">
                    <img class="file-upload-image" src="images2/userLogo.jpg" alt="Add Your Logo" />
                  </div>
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Logo</button>
                  <div class="image-upload-wrap">
                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="images2/*" hidden />
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col s4 right-align">
              <label for=""><i class="fab fa-facebook fa-2x facebook-color"></i></label>
            </div>
            <div class=" col s8">
              <input id="" type="text" name="facebook" class=" browser-default" placeholder="Enter your facebook link">
            </div>
          </div>
          <div class="row">
            <div class="col s4  right-align">
            <label for=""><i class="fab fa-instagram fa-2x instagram-color"></i></label>
            </div>
            <div class=" col s8">
              <input id="" type="text" name="instagram" class=" browser-default" placeholder="Enter your instagram link">
            </div>
          </div>
          <div class="row">
            <div class="col s4  right-align">
            <label for=""><i class="fab fa-linkedin fa-2x linkedin-color"></i></label>
            </div>
            <div class=" col s8">
              <input id="" type="text" name="linkedin" class=" browser-default" placeholder="Enter your linkedin link">
            </div>
          </div>
          <div class="row">
            <div class="col s4  right-align">
            <label for=""><i class="fab fa-twitter fa-2x twitter-color"></i></label>
            </div>
            <div class=" col s8">
              <input id="" type="text" name="twitter" class=" browser-default" placeholder="Enter your twitter link">
            </div>
          </div>
          <div class="row">
            <div class="col s3">
            </div>
            <div class=" col s9 center">
            <button type="submit" name="submit" class="waves-effect waves-light btn white btnSubmit hoverable"><i class="material-icons right">save</i>Add</button>
            
            </div>
          </div>
        </form>
     </div>
   </div>
 </div>
  <?php include('footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js2/script.js" type="text/javascript"></script>
<script>
  function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});
</script>
</body>
</html>