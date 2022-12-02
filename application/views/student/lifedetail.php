<!doctype html>
<html lang="en">

<?php
$row_cnt = $viewClass->num_rows();
//echo "Vicc".$row_cnt;
?>

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
                    <a class="text-decoration-none text_dark" href="/student/life">生活華語</a>
                </li>
                <li class="breadcrumb-item text_dark active" aria-current="page"> </li>
            </ol>
        </div>


    </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>



<script>
    
</script>