<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>php-ajax-dischi</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./dist/css/app.css" />
</head>

<body>
  <div class="wrapper" id="app">
    <header>
      <div class="container">
        <img src="./dist/img/logo.png" alt="logo" />
      </div>
    </header>

    <div class="cds-container container">

      <div class="cd" v-for="album in albums">
        <img :src="album.poster" :alt="album.title" />
        <h3>{{album.title}}</h3>
        <span class="author">{{album.author}}</span>
        <span class="year">{{album.year}}</span>
      </div>

    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js" integrity="sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="./dist/js/app.js" charset="utf-8"></script>
</body>

</html>