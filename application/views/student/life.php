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
                <li class="breadcrumb-item text_dark active" aria-current="page">生活華語</li>
            </ol>
        </div>

        <div class="row justify-content-center">
            <!-- 食物 -->
            <div class="col-sm-6 col-lg-4 my-5">
                <div class="p-3 text-center bg_light round_1">
                    <div class="menu_ic_pos">
                        <img class="img-fluid ic_ctrl" src="/images//life/ic_food.png" alt="食物">
                    </div>
                    <img class="img-fluid mt-2 mb-3" src="/images/life/title_food.svg" alt="食物">

                    <div class="row">
                        <?php foreach ($viewClass1->result() as $row) { ?>
                            <div class="col-6">
                                <a href="/student/lifedetail/<?php echo $row->life_id; ?>">
                                    <div class="bg_beachBlue round_1 box_shadow_2 mb-3">
                                        <img class="img-fluid" src="/images/life/<?php echo $row->life_img; ?>" alt="<?php echo $row->life_name; ?>">
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        <!-- 對話篇 -->
                        <div class="col-6">
                            <a href="/student/lifedetail/999">
                                <div class="bg_orange round_1 box_shadow_2 mb-3">
                                    <img class="img-fluid" src="/images/life/dialog.svg" alt="對話篇">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 場所 -->
            <div class="col-sm-6 col-lg-4 my-5">
                <div class="p-3 text-center bg_light round_1">
                    <div class="menu_ic_pos">
                        <img class="img-fluid ic_ctrl" src="/images//life/ic_place.png" alt="場所">
                    </div>
                    <img class="img-fluid mt-2 mb-3" src="/images/life/title_place.svg" alt="場所">

                    <div class="row">
                        <?php foreach ($viewClass2->result() as $row) { ?>
                            <div class="col-6">
                                <a href="/student/lifedetail/<?php echo $row->life_id; ?>">
                                    <div class="bg_beachBlue round_1 box_shadow_2 mb-3">
                                        <img class="img-fluid" src="/images/life/<?php echo $row->life_img; ?>" alt="<?php echo $row->life_name; ?>">
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        <!-- 對話篇 -->
                        <div class="col-6">
                            <a class="pointer_none" href="#">
                                <div class="bg_orange round_1 mb-3 btn_disable">
                                    <img class="img-fluid" src="/images/life/dialog.svg" alt="對話篇">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 交通工具 -->
            <div class="col-sm-6 col-lg-4 my-5">
                <div class="p-3 text-center bg_light round_1">
                    <div class="menu_ic_pos">
                        <img class="img-fluid ic_ctrl" src="/images//life/ic_vehicle.png" alt="交通工具">
                    </div>
                    <img class="img-fluid mt-2 mb-3" src="/images/life/title_vehicle.svg" alt="交通工具">
                    
                    <div class="row">
                        <?php foreach ($viewClass3->result() as $row) { ?>
                            <div class="col-6">
                                <a href="/student/lifedetail/<?php echo $row->life_id; ?>">
                                    <div class="bg_beachBlue round_1 box_shadow_2 mb-3">
                                        <img class="img-fluid" src="/images/life/<?php echo $row->life_img; ?>" alt="<?php echo $row->life_name; ?>">
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        <!-- 對話篇 -->
                        <div class="col-6">
                            <a class="pointer_none" href="#">
                                <div class="bg_orange round_1 mb-3 btn_disable">
                                    <img class="img-fluid" src="/images/life/dialog.svg" alt="對話篇">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>



<script>
    $('title').text('生活華語｜小泰陽華文樂園');
</script>