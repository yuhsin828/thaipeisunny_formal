<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="國北小泰陽 學習資源網">
  <meta name="keywords" content="國北小泰陽, 華語文教學, 華語文學習, 泰北華校, 學習資源網">

  <!-- style sheet -->
  <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/vendor/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/vendor/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/main.css">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&family=Noto+Serif+TC:wght@400;700&display=swap" rel="stylesheet">

  <title>小泰陽華文樂園</title>
</head>

<body>
  <!-- navbar with hambergur and fixed-top -->
  <nav class="navbar navbar-expand-md navbar-light sticky-top shadow-sm bg_white" id="topNav">
    <div class="container">
      <a class="navbar-brand" href="/home">
        <img class="img-fluid" src="/image/小泰陽華文樂園logo_d.svg" alt="小泰陽華文樂園logo" width="250px">
      </a>
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav row ms-auto" id="navList">
          <li class="nav-item col-sm-6 col-md-3">
            <a class="nav-link text-center m-auto text_dark w_150 <?php if ($page == "student") echo 'active'; ?>" href="/student">學生學習區</a>
          </li>
          <li class="nav-item col-sm-6 col-md-3">
            <a class="nav-link text-center m-auto text_dark w_150 <?php if ($page == "teacher") echo 'active'; ?>" href="/teacher">教師交流區</a>
          </li>
          <li class="nav-item col-sm-6 col-md-3">
            <a class="nav-link text-center m-auto text_dark w_150 <?php if ($page == "recommend") echo 'active'; ?>" href="/recommend">好站推薦</a>
          </li>
          <li class="nav-item col-sm-6 col-md-3">
            <a class="nav-link text-center m-auto text_dark w_150" href="https://drive.google.com/drive/u/5/folders/1PZ2xdEBupc0j3_NFL2_Ch7p-gLDAUHYc" target="_blank">下載專區</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- goTop button -->
  <button class="shadow top_btn" id="goTop" type="button">
    <i class="fa fa-angle-up fs-3 text_dark" aria-hidden="true"></i>
  </button>