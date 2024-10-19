<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Language Translator</title>
  <link rel="icon" type="image/png" href="http://www.serversys.ru/icons/translator.png">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome CDN Link for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<style>
    body {
        background: url(http://serversys.ru/icons/back_profile.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .container {
        border-radius: 20px; background-color: rgba(255, 255, 255, 0.001); padding: 20px; border: 1px solid #333; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                Backdrop-filter: blur(15px);
    }
    .to-text {
        color: black;
    }
    .container .clean {
  width: 100%;
  padding: 14px;
  outline: none;
  border: none;
  color: #fff;
  cursor: pointer;
  margin-top: 20px;
  font-size: 17px;
  border-radius: 5px;
  background: #9e2f2f;
}
</style>
<body>
  <div class="container">
    <div class="wrapper">
      <div class="text-input">  
        <textarea spellcheck="false" class="from-text" placeholder="Enter text"></textarea>
        <textarea spellcheck="false" readonly disabled class="to-text" placeholder="Translation"></textarea>
        
      </div>
      <ul class="controls">
        <li class="row from">
          <div class="icons">
            <i id="from" class="fas fa-volume-up"></i>
            <i id="from" class="fas fa-copy"></i>
          </div>
          <select></select>
        </li>
        <li class="exchange"><i class="fas fa-exchange-alt"></i></li>
        <li class="row to">
          <select></select>
          <div class="icons">
            <i id="to" class="fas fa-volume-up"></i>
            <i id="to" class="fas fa-copy"></i>
          </div>
        </li>
      </ul>
    </div>
    <button class="trans">Translate Text</button>
    <button class="clean" onclick="location.reload(); return false;">Clear</button>
  </div>
  <script src="js/countries.js"></script>
  <script src="js/script.js"></script>

</body>

</html>