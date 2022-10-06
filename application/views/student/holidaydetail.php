<!doctype html>
<html lang="en">

<?php $this->load->view("common/header.php"); ?>

<main class="bg_lemonYellow">
  <div class="container py-5">
    <!-- breadcrumb -->
    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb d-flex align-items-center">
        <li class="breadcrumb-item">
          <a class="text-decoration-none text_dark" href="/home">首頁</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-decoration-none text_dark" href="/student">學生學習區</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-decoration-none text_dark" href="/student/holiday">中華節慶</a>
        </li>
        <li class="breadcrumb-item text_dark active" aria-current="page"><?php echo $main; ?></li>
      </ol>
    </div>

    <div class="bg_light round_1" id="mainContent">
      <!-- 簡介 -->
      <div class="d-md-flex justify-content-evenly px-3 py-5 px-md-5 gap-3" id="item1">
        <div class="text-center">
          <div class="title_ctrl">
            <img class="img-fluid" src="/images/holiday/<?php echo $main_title; ?>" alt="">
          </div>
          <div class="pic_ctrl my-2">
            <img class="img-fluid" src="/images/holiday/<?php echo $main_img; ?>" alt="">
          </div>
          <div class="src_ctrl">
            <div class="text_dark fs_s">圖片來源：https://www.irasutoya.com/</div>
          </div>
        </div>
        <div class="text-center d-flex flex-column">
          <div class="d-flex justify-content-center my-3">
            <audio class="" src="/wav/holiday/<?php echo $main_audio; ?>.wav" controls></audio>
          </div>
          <div class="m-auto content_ctrl">
            <picture>
              <source class="img-fluid" srcset="/images/holiday/<?php echo $main_content; ?>.svg" media="(min-width: 425px)">
              <img class="img-fluid" src="/images/holiday/<?php echo $main_content; ?>m.svg" alt="">
            </picture>
          </div>
        </div>
      </div>

      <!-- 習俗 -->
      <div class="position-relative px-2 py-5 px-md-5 gap-1 item_hide" id="item2">
        <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" data-bs-touch="false">

          <div class="carousel-indicators">
            <?php for ($i = 0; $i < count($customs_title); $i++) { ?>
              <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="<?php echo $i ?>" class="<?php if ($i == '0') echo 'active'; ?>" aria-current="true" aria-label="Slide <?php echo $i + 1; ?>"></button>
            <?php } ?>
          </div>
          <div class="carousel-inner">
            <?php for ($i = 0; $i < count($customs_title); $i++) { ?>
              <div class="carousel-item <?php if ($i == '0') echo 'active'; ?>">
                <div class="d-md-flex justify-content-evenly gap-3">
                  <div class="text-center">
                    <div class="title_ctrl">
                      <img class="img-fluid" src="/images/holiday/<?php echo $customs_title[$i]; ?>" alt="">
                    </div>
                    <div class="pic_ctrl">
                      <img class="img-fluid" src="/images/holiday/<?php echo $customs_img[$i]; ?>" alt="">
                    </div>
                  </div>
                  <div class="text-center d-flex flex-column">
                    <div class="d-flex justify-content-center my-3">
                      <audio class="" src="/wav/holiday/<?php echo $customs_audio[$i]; ?>.wav" controls></audio>
                    </div>
                    <div class="m-auto content_ctrl">
                      <picture>
                        <source class="img-fluid" srcset="/images/holiday/<?php echo $customs_content[$i]; ?>.svg" media="(min-width: 425px)">
                        <img class="img-fluid" src="/images/holiday/<?php echo $customs_content[$i]; ?>m.svg" alt="">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
          <img class="img-fluid carousel-control-prev-icon" aria-hidden="true" src="/images/holiday/4_往左.svg" onclick="stopMp3()">
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
          <img class="img-fluid carousel-control-next-icon" aria-hidden="true" src="/images/holiday/4_往右.svg" onclick="stopMp3()">
        </button>
      </div>

      <!-- 故事 -->
      <div class="text-center px-3 py-5 px-md-5 item_hide" id="item3">
        <div class="title_ctrl mb-3">
          <img class="img-fluid" src="/images/holiday/<?php echo $story_title; ?>" alt="">
        </div>
        <div class="video_ctrl">
          <iframe id="videoPlayer" src="" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="d-flex justify-content-center my-3">
          <audio class="" src="/wav/holiday/<?php echo $story_audio; ?>.wav" controls></audio>
        </div>
        <div class="content_ctrl">
          <picture>
            <source class="img-fluid" srcset="/images/holiday/<?php echo $story_content; ?>.svg" media="(min-width: 768px)">
            <source class="img-fluid" srcset="/images/holiday/<?php echo $story_content; ?>t.svg" media="(min-width: 425px)">
            <img class="img-fluid" src="/images/holiday/<?php echo $story_content; ?>m.svg" alt="">
          </picture>
        </div>
      </div>

      <!-- 遊戲 -->
      <div class="text-center px-3 py-5 px-md-5 item_hide" id="item4">
        <div class="title_ctrl mb-3">
          <img class="img-fluid" src="/images/holiday/<?php echo $game_title; ?>" alt="">
        </div>
        <div class="scratch_ctrl">
          <iframe id="scratchPlayer" src="" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen></iframe>
        </div>
      </div>

      <!-- 按鈕 -->
      <div class="row px-3 pb-5 pt-3 px-md-5">
        <div class="col-6 col-md-3 text-center mb-3">
          <img class="img-fluid bg_blue round_1 box_shadow_2 pointer" id="btn1" src="/images/holiday/4_簡介.svg" alt="簡介" onclick="changeItem(1)">
        </div>
        <div class="col-6 col-md-3 text-center mb-3">
          <img class="img-fluid bg_lightBlue round_1 box_shadow_2 pointer" id="btn2" src="/images/holiday/4_習俗.svg" alt="習俗" onclick="changeItem(2)">
        </div>
        <div class="col-6 col-md-3 text-center mb-3">
          <img class="img-fluid bg_lightBlue round_1 box_shadow_2 pointer" id="btn3" src="/images/holiday/4_故事.svg" alt="故事" onclick="changeItem(3,'<?php echo $story_youtube; ?>')">
        </div>
        <div class="col-6 col-md-3 text-center mb-3">
          <img class="img-fluid bg_lightBlue round_1 box_shadow_2 pointer" id="btn4" src="/images/holiday/4_遊戲.svg" alt="遊戲" onclick="changeItem(4, '<?php echo $game_scratch; ?>')">
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <a class="text-center" href="/student/holiday">
        <img class="img-fluid bg_gold round_1 box_shadow_2 pointer" src="/images/holiday/4_返回目錄.svg" alt="返回目錄">
      </a>
    </div>
  </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>



<script>
  let prevI = 1;
  let curI = 1;
  // let prevCustom = 0;

  $('#topNav').removeClass('sticky-top');

  function changeItem(i, iframeId) {
    curI = i;

    // 每切換選項，復原前一個選項按鈕的背景顏色、隱藏內容
    $('#btn' + prevI).removeClass('bg_blue').addClass('bg_lightBlue');
    $('#item' + prevI).addClass('item_hide');

    $('#btn' + i).removeClass('bg_lightBlue').addClass('bg_blue');
    $('#item' + i).removeClass('item_hide');

    // 設定此選項按鈕的背景顏色、秀出來，並自動滑動到上面
    const item = $('#mainContent').offset().top;
    $('html,body').animate({
      scrollTop: item
    }, 200);

    // 呼叫 停止播放音檔
    stopMp3();

    // 如果前一個選項是故事或遊戲，把來源移除強制結束
    if (prevI == 3) {
      $('#videoPlayer').attr('src', '');
    } else if (prevI == 4) {
      $('#scratchPlayer').attr('src', '');
    }

    // 如果現在的選項是故事或遊戲，加入來源
    if (i == 3) {
      $('#videoPlayer').attr('src', 'https://www.youtube.com/embed/' + iframeId);
    } else if (i == 4) {
      $('#scratchPlayer').attr('src', 'https://scratch.mit.edu/projects/' + iframeId + '/embed');
    }

    prevI = i; // 更新前一個選項編號
  }

  // 滑動切換習俗時， 停止播放音檔
  // $(window).scroll(function() {
  //   if (curI == 2) {
  //     let curCustom = $('.carousel-indicators .active').attr('data-bs-slide-to');
  //     // console.log(curCustom);
  //     if (curCustom !== prevCustom) {
  //       stopMp3();
  //       // console.log(prevCustom);
  //       prevCustom = curCustom;
  //     }
  //   }
  // })

  // 每切換選項，停止播放音檔
  function stopMp3() {
    $('audio').each(function() {
      this.pause(); // Stop playing
      this.currentTime = 0; // Reset time
    });
  }
</script>