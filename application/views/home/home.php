<!doctype html>
<html lang="en">

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
  <link rel="stylesheet" href="./css/vendor/animate.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/home.css">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&family=Noto+Serif+TC:wght@400;700&display=swap" rel="stylesheet">

  <title>小泰陽華文樂園</title>
</head>

<body>
  <header class="position-relative hw_100 bg_white">
    <!-- main background -->
    <div class="container">
      <div class="row justify-content-center align-items-center py-5 bg_ctrl">
        <div class="col-md-6 mb-3 text-center">
          <!-- lottie animation -->
          <div class="wheel_ctrl d-flex justify-content-center justify-content-lg-end">
            <div class="img-fluid wheel_svg" id="ferrisWheel"></div>
            <!-- <img class="img-fluid wheel_svg" src="/images/home/小泰陽摩天輪.png" alt="小泰陽摩天輪"> -->
          </div>
        </div>
        <div class="col-md-6 text-center text-lg-start">
          <div class="welcome_ctrl mb-2 mb-md-3">
            <img class="img-fluid welcome_svg animate__animated animate__zoomInRight wow" src="/images/home/welcome.svg" alt="歡迎來到小泰陽華文樂園">
          </div>
          <div class="slogan_ctrl">
            <img class="img-fluid slogan_svg animate__animated animate__bounceInRight wow" data-wow-delay="1s" src="/images/home/slogan.svg" alt="一起暢遊華文吧！">
          </div>
        </div>
      </div>
    </div>

    <!-- navbar with hambergur and fixed-top -->
    <nav class="navbar navbar-expand-md navbar-light nav_ctrl" id="topNav">
      <div class="container">
        <a class="navbar-brand d-none" href="/home">
          <img class="img-fluid" src="/images/小泰陽華文樂園logo_d.svg" alt="小泰陽華文樂園logo" width="250px">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav row mx-auto nav_list_bg" id="navList">
            <li class="nav-item col-sm-6 col-md-3">
              <a class="nav-link text-center m-auto text_dark nav_btn w_150" href="/student">學生學習區</a>
            </li>
            <li class="nav-item col-sm-6 col-md-3">
              <a class="nav-link text-center m-auto text_dark nav_btn w_150" href="/teacher">教師交流區</a>
            </li>
            <li class="nav-item col-sm-6 col-md-3">
              <a class="nav-link text-center m-auto text_dark nav_btn w_150" href="/recommend">好站推薦</a>
            </li>
            <li class="nav-item col-sm-6 col-md-3">
              <a class="nav-link text-center m-auto text_dark nav_btn w_150" href="https://drive.google.com/drive/u/5/folders/1PZ2xdEBupc0j3_NFL2_Ch7p-gLDAUHYc" target="_blank">下載專區</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- scrollDown button -->
    <div class="text-center down_btn animate__animated animate__bounceIn wow" data-wow-delay="2.5s" id="scrollDown" type="button">
      <i class="fa fa-angle-double-down fs-3" aria-hidden="true"></i>
    </div>
  </header>

  <!-- goTop button -->
  <button class="shadow top_btn" id="goTop" type="button">
    <i class="fa fa-angle-up fs-3 text_dark" aria-hidden="true"></i>
  </button>

  <!-- 熱門推薦 -->
  <section class="bg_light" id="section1">
    <div class="container py-5">
      <div class="mb-3">
        <h3 class="text-center fw-bolder">熱門推薦</h3>
      </div>
      <div class="p-3 owl-carousel owl-theme bg_lemonYellow round_1 animate__animated animate__fadeIn wow">
        <!-- huayu -->
        <div class="item">
          <div class="card round_1">
            <img class="card-img-top" src="/images/home/not yet.png" alt="生活華語">
            <div class="card-body">
              <h5 class="card-title text-center fw-bolder">生活華語</h5>
              <p class="card-text text-center overflow_dot">食物、場所、交通工具</p>
              <div class="text-center">
                <a class="text-decoration-none fw-bolder text_orange" href="">馬上學習
                  <i class="fa fa-arrow-right ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- holiday -->
        <div class="item">
          <div class="card round_1">
            <img class="card-img-top" src="/images/home/not yet.png" alt="中華節慶">
            <div class="card-body">
              <h5 class="card-title text-center fw-bolder">中華節慶</h5>
              <p class="card-text text-center overflow_dot">春節、元宵節、清明節、端午節、七夕、中元節、中秋節、重陽節</p>
              <div class="text-center">
                <a class="text-decoration-none fw-bolder text_orange" href="">馬上學習
                  <i class="fa fa-arrow-right ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- story -->
        <div class="item">
          <div class="card round_1">
            <img class="card-img-top" src="/images/home/not yet.png" alt="小泰陽故事集">
            <div class="card-body">
              <h5 class="card-title text-center fw-bolder">小泰陽故事集</h5>
              <p class="card-text text-center overflow_dot">三隻小豬、龜兔賽跑、誠實的小豬、小八立大功、天堂地獄、放羊的孩子、邦邦想飛</p>
              <div class="text-center">
                <a class="text-decoration-none fw-bolder text_orange" href="">馬上學習
                  <i class="fa fa-arrow-right ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 四大區塊 -->
  <section class="bg_light">
    <div class="container py-5">
      <!-- student -->
      <div class="row flex-row-reverse justify-content-evenly align-items-center mb-5 animate__animated animate__fadeIn wow">
        <div class="col-md-5 d-flex justify-content-center">
          <img class="img-fluid mb-4" src="/images/home/學生學習區.png" alt="學生學習區" width="360px">
        </div>
        <div class="col-md-5">
          <h5 class="fw-bolder">學生學習區</h5>
          <p class="lh-lg">這裡有注音符號、課文唸讀，以及課外學習等豐富的資源，陪伴你一同學習華文！</p>
          <div class="d-flex justify-content-center">
            <a class="btn text-decoration-none section_btn text_light animate__animated animate__zoomInLeft wow" href="/student" role="button">去學習</a>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div class="row flex-row justify-content-evenly align-items-center mb-5 animate__animated animate__fadeIn wow">
        <div class="col-md-5 d-flex justify-content-center">
          <img class="img-fluid mb-4" src="/images/home/教師交流區.png" alt="教師交流區" width="360px">
        </div>
        <div class="col-md-5">
          <h5 class="fw-bolder">教師交流區</h5>
          <p class="lh-lg">小泰陽與您分享我們整理的教學資源，以及教學經驗，一起為認真學習華文的孩子努力！</p>
          <div class="d-flex justify-content-center">
            <a class="btn text-decoration-none section_btn text_light animate__animated animate__zoomInRight wow" href="/teacher" role="button">去交流</a>
          </div>
        </div>
      </div>
      <!-- recommend -->
      <div class="row flex-row-reverse justify-content-evenly align-items-center mb-5 animate__animated animate__fadeIn wow">
        <div class="col-md-5 d-flex justify-content-center">
          <img class="img-fluid mb-4" src="/images/home/好站推薦.png" alt="好站推薦" width="360px">
        </div>
        <div class="col-md-5">
          <h5 class="fw-bolder">好站推薦</h5>
          <p class="lh-lg">許多珍貴且實用的學習和教學網站都在這裡，讓認真好學的你能夠有更多元的資源！</p>
          <div class="d-flex justify-content-center">
            <a class="btn text-decoration-none section_btn text_light animate__animated animate__zoomInLeft wow" href="/recommend" role="button">去認識</a>
          </div>
        </div>
      </div>
      <!-- download -->
      <div class="row flex-row justify-content-evenly align-items-center animate__animated animate__fadeIn wow">
        <div class="col-md-5 d-flex justify-content-center">
          <img class="img-fluid mb-4" src="/images/home/下載專區.png" alt="下載專區" width="360px">
        </div>
        <div class="col-md-5">
          <h5 class="fw-bolder">下載專區</h5>
          <p class="lh-lg">小泰陽將學習和教學的資源存放在雲端資料夾裡，歡迎您前往下載，隨時隨地都能使用！</p>
          <div class="d-flex justify-content-center">
            <a class="btn text-decoration-none section_btn text_light animate__animated animate__zoomInRight wow" href="https://drive.google.com/drive/u/5/folders/1PZ2xdEBupc0j3_NFL2_Ch7p-gLDAUHYc" target="_blank" role="button">去下載</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 加入FB交流社團 -->
  <section class="bg_lightYellow">
    <div class="container py-5">
      <!-- fb club -->
      <div class="mb-3">
        <h3 class="text-center fw-bolder">加入FB交流社團</h3>
      </div>
      <div class="row flex-row-reverse justify-content-center align-items-center">
        <div class="col-md-4 d-flex justify-content-center">
          <img class="img-fluid mb-4" src="/images/home/臉書社團.png" alt="加入FB交流社團" width="360px">
        </div>
        <div class="col-md-4">
          <p class="text-start lh-lg">歡迎在泰北學習華文的孩子們加入社團，跟著小泰陽的老師一起學習更多有趣的華文吧！</p>
          <div class="text-center animate__animated animate__tada wow" data-wow-delay="0.5s">
            <a class="text-decoration-none fw-bolder text_orange" target="_blank" role="button" href="https://www.facebook.com/groups/thaipeisunny.web.discussion">馬上加入
              <i class="fa fa-external-link ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 關於小泰陽 -->
  <article class="bg_light">
    <div class="container py-5">
      <div class="row animate__animated animate__fadeIn wow">
        <div class="col-lg-6 p-3">
          <img class="img-fluid round_1" src="/images/home/about-us.JPG" alt="關於小泰陽">
        </div>
        <div class="col-lg-6 p-3 d-flex align-items-center justify-content-center row">
          <div class="col-xl-10">
            <h5 class="fw-bolder">關於小泰陽</h5>
            <p class="fs-6 lh-lg overflow_lines_dot">
              國北小泰陽是由國立臺北教育大學的學生所組成的國際志工服務團隊，以提升整體的學習環境與教學品質為目標，陪伴著泰北的孩子重新發現希望、探索更多未來的可能性。
            </p>
            <div class="text-center animate__animated animate__tada wow" data-wow-delay="0.5s">
              <a class="text-decoration-none fw-bolder text_orange" href="/about">了解更多
                <i class="fa fa-arrow-right ms-1" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>

  <?php $this->load->view("common/footer.php"); ?>

  <script src="/js/home.js"></script>
  <script src="/js/lottie.js"></script>
  <script src="./js/vendor/wow.min.js"></script>

</body>

</html>