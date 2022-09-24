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
        <li class="breadcrumb-item text_dark active" aria-current="page">小泰陽故事集</li>
      </ol>
    </div>

    <div class="row px-3 px-lg-5">
      <div class="owl-carousel owl-theme">
        <div class="item pointer" id="" onclick="storyClick('WVcJxerM6CA')">
          <img class="img-fluid round_1 box_shadow_2" src="/images/story/三隻小豬.png" alt="三隻小豬">
        </div>
        <div class="item pointer" id="" onclick="storyClick('WaCF-WGOrFw')">
          <img class="img-fluid round_1 box_shadow_2" src="/images/story/龜兔賽跑.png" alt="龜兔賽跑">
        </div>
        <div class="item pointer" id="" onclick="storyClick('G45JKiOGGtU')">
          <img class="img-fluid round_1 box_shadow_2" src="/images/story/誠實的小豬.png" alt="誠實的小豬">
        </div>
        <div class="item pointer" id="" onclick="storyClick('aww6goxkc6g')">
          <img class="img-fluid round_1 box_shadow_2" src="/images/story/小八立大功.png" alt="小八立大功">
        </div>
        <div class="item pointer" id="" onclick="storyClick('vCmBWzr-clc')">
          <img class="img-fluid round_1 box_shadow_2" src="/images/story/天堂地獄.png" alt="天堂地獄">
        </div>
        <div class="item pointer" id="" onclick="storyClick('6tKClhM7OqM')">
          <img class="img-fluid round_1 box_shadow_2" src="/images/story/放羊的孩子.png" alt="放羊的孩子">
        </div>
        <div class="item pointer" id="" onclick="storyClick('8N6KyORu-Ew')">
          <img class="img-fluid round_1 box_shadow_2" src="/images/story/邦邦想飛.png" alt="邦邦想飛">
        </div>
      </div>

      <div class="video_container mb-5 d-none">
        <iframe id="videoPlayer" src="" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>



<script>
  function storyClick(id) {
    $('.video_container').removeClass('d-none');
    $('#videoPlayer').attr("src", 'https://www.youtube.com/embed/' + id);

    const item = $('.video_container').offset().top - $('.navbar').innerHeight();
    $('html,body').animate({
      scrollTop: item
    }, 200);
  }

  /* owlCarousel圖卡輪播 */
  $('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    // nav: true,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      768: {
        items: 3
      },
      992: {
        items: 5
      }
    }
  })
</script>