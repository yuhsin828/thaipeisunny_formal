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
        <li class="breadcrumb-item text_dark active" aria-current="page">好站推薦</li>
      </ol>
    </div>
    <h6 class="pt-2 text-center">整修中，敬請期待<i class="fa fa-wrench ms-1" aria-hidden="true"></i></h6>
  </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>



<script>
  $('title').text('好站推薦｜小泰陽華文樂園');
</script>