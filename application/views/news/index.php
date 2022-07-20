<!doctype html>
<html lang="en">

<?php $this->load->view("common/header.php");?>

      <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/images/img_4.jpg')">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 pt-5">
              <span class="text-cursive h5 text-red">Welcome To Our Thaipei Sunny</span>
              <h1 class="text-cursive h5 text-teal">最新消息</h1>
              <p><a href="/home" class="text-white"><span  class="text-cursive text-white">首頁</span></a> <span class="mx-3">/</span> <span  class="text-cursive text-white">最新消息</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="text-cursive h5 text-red d-block">News</span>
            <h2 class="text-black">最新消息</h2>
            <p><img src="/images/img_2.jpg" width="350" height="300"></p>
          </div>
          <div class="col-md-8">
            <div class="pricing teal">
            
 
              <ul class="ul-check list-unstyled teal">
                <?php foreach($viewNews->result() as $row){?>
                <li>
                    
                    【<?php echo $row->news_date;?> 】&nbsp;&nbsp;
                    <a href="/news/detail/<?php echo $row->news_id;?>"><?php echo $row->news_title;?> </a>
                </li>  
               <?php } ?>
              </ul>
          
            </div>
          </div>
       
        </div>
      </div>
    </div>








    
<?php $this->load->view("common/footer.php");?>
    

  </body>

</html>

