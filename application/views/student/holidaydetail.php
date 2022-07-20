<!doctype html>
<html lang="en">

<?php $this->load->view("common/header.php");?>

      <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/images/學生學習區.JPG')">
        <div class="container">
          <div class="row align-items-center ">

          <div class="col-md-5 mt-5 pt-5">
              <span class="text-cursive h5 text-red">Welcome To Our Thaipei Sunny</span>
              <h1 class="text-cursive h5 text-teal">中華節慶</h1>
              <p><a href="/home"><span  class="text-cursive text-white">首頁</span></a> 
                  /<span class="mx-3"><a href="/student"><span  class="text-cursive text-white">學生學習區</span></a> 
                  /<span  class="text-cursive text-white mx-3">中華節慶</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

<div class="site-section" style="background-color: #d99694">
         

         
         
   <div class="container">
  <div class="row align-items-stretch">    
      <div class="col-lg-1 float-right" style="position:relative;margin-right:  -30px;margin-top: 15px;height: auto;width: 95px">  
  <a  href="/student/holiday"><img src="/images/student/4_返回目錄.png" alt="Image" class="card-img-top  float-end" >  </a>   
  </div>
  <div class="col-lg-11 float-left">
    
<div class="shadow-lg card" style="border-radius:25px;border:0px solid #000000;padding: 20px; background: #f2f2f2;">
 <!-----簡介開始---->
<div id="unit1"  style="display: none;">
  <div class="card-body">
    <div class="row align-items-center">
          <div class="col-lg-6">
              <div class="row">
                          <div class="col-8 offset-md-2">
                          <?php echo $main;?>
                            <img src="/images/holiday/<?php echo $main_title;?>" alt="Image"   class="img-fluid"" id="main_pic">
                         </div> 
                        
                         <div class="col-2  col-sm-2">
                           <img src="/images/student/4_播放按鍵.svg" alt="Image" id="speaker" class="mb-4 mx-4"
                                               onclick="playMp3('<?php echo $main_audio;?>');">
                        </div>
                        
                 </div>
                 <div class="row">
                   <div class="col-lg-10 offset-md-2">
                     <img src="/images/holiday/<?php echo $main_img;?>" alt="Image"
                     class="img-fluid rounded float-start" id="main_pic">
                  </div>
                 </div>
          </div>
          
          <div class="col-lg-6 align-items-center">
              <div>
                     <p><img src="/images/holiday/<?php echo $main_content;?>" alt="Image" id="desc_pic"
                 class="img-fluid"></p>
            </div>
          </div>
          </div>
  </div>
  </div>
  <!-----簡介結束----> 
  
  <!------習俗開始------->
  <div id="unit2"  style="display: none;">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  style="height: 40vh;min-height:650px">
  <div class="carousel-inner">
    <?php for($i=0;$i<count($customs_title);$i++) { ?>
    <div class="carousel-item<?php if($i=='0') echo ' active';?>">
        <div>
                <div class="row align-items-center">
                    <div class="col-2 col-sm-2">
                        </div>
                      <div class="col-12  col-sm-8">
                       <img src="/images/holiday/<?php echo $customs_title[$i];?>" alt="Image"
                                 class="img-fluid rounded float-start">
                      </div>
                      <div class="col-2  col-sm-2">
                           <img src="/images/student/4_播放按鍵.svg" alt="Image" id="speaker" class="mb-4"
                                               onclick="playMp3('<?php echo $customs_audio[$i];?>');">
                        </div>
                  </div>
                    <div class="row  align-items-center align-top">
                                 <div class="col-2  col-sm-1 align-top">
                                        <a  href="#carouselExampleControls" role="button" data-slide="prev">
                                         <img src="/images/holiday/4_往左.png" alt="Image"      style="height: 80%;width: 80%"> 
                                         </a>
                              </div>
                               <div class="col-12  col-sm-5 align-top">
                                 <img src="/images/holiday/<?php echo $customs_img[$i];?>" alt="Image"
                                 class="img-fluid rounded align-top" >
                              </div>
                              <div class="col-12  col-sm-5 align-top">
                                 <img src="/images/holiday/<?php echo $customs_content[$i];?>" alt="Image"
                                     class="img-fluid"> 
                                   
                              </div>
                             <div class="col-2  col-sm-1 align-top">
                                 <a  href="#carouselExampleControls" role="button" data-slide="next" style="height: 50%">
                                <img src="/images/holiday/4_往右.png" alt="Image"      style="height: 80%;width: 80%"> 
                                 </a>
                              </div>
                                   
                      </div>
    </div>
  </div>
   <?php  } ?>
  </div>

</div>
  </div>

  <!------習俗結束------>
  
   <!-----故事開始---->
<div id="unit3" style="display: none;">
  <div class="card-body">
        <div class="row align-items-center">
                       <div class="col-lg-2">
                        </div>
                      <div class="col-lg-8">
                       <img src="/images/holiday/<?php echo $story_title;?>" alt="Image"
                                 class="img-fluid rounded float-start">
                      </div>
                      <div class="col-lg-2">
                    </div>
          </div>
          <?php if($story_youtube!=""){?>
          <div class="row justify-content-center">
                      <div class="col-12 col-lg-12">
                         <iframe id="iFrameID" width="900" height="500" src="https://www.youtube.com/embed/<?php echo $story_youtube;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
          </div>
          <?php } ?>
           <div class="row justify-content-center">
                      <div class="col-lg-12">
                        <?php if($story_audio!=""){?>
                                 <img src="/images/student/4_播放按鍵.svg" alt="Image" id="speaker" 
                                               onclick="playMp3('<?php echo $story_audio;?>');">
                                               
                                                 <img src="/images/holiday/<?php echo $story_content;?>" alt="Image" id="story" 
                                                       class="img-fluid rounded float-start">
                    <?php }  else { ?>
                                       <img src="/images/holiday/<?php echo $story_content;?>" alt="Image" id="story1" 
                                                       class="img-fluid rounded float-start">
                     <?php }  ?>
                     
                        </div>
          </div>
          
        </div>
  </div>
  <!-----故事結束----> 
  
  
 <!-----遊戲開始---->
<div id="unit4"  style="display: none;">
 
    <div class="row justify-content-center">
          <div class="col-12 col-lg-12">
  <div class="card-body  justify-content-center">
      <?php if($game_scratch!=""){?>
           <iframe src="https://scratch.mit.edu/projects/<?php echo $game_scratch;?>/embed" allowtransparency="true" width="920" height="796" frameborder="0" scrolling="no" allowfullscreen></iframe>
           <?php } ?>
          </div>
          </div>
  </div>
  </div>
  <!-----遊戲結束----> 
  
   <div class="card-footer" style="background: #f2f2f2;border: 0">
  <div class="row justify-content-md-center">
          <div class="col-6 col-sm-2 align-top">
                <img src="/images/holiday/4_簡介1.png" alt="Image"
                 class="img-fluid rounded float-start" id="b1"  onclick="show('1','4_簡介')">
          </div>
          <div class="col-6 col-sm-2 align-top">
                <img src="/images/holiday/4_習俗1.png" alt="Image"
                 class="img-fluid rounded float-start" id="b2"  onclick="show('2','4_習俗')">
          </div>
          <div class="col-6 col-sm-2 align-top">
                <img src="/images/holiday/4_故事1.png" alt="Image"
                 class="img-fluid rounded float-start" id="b3"  onclick="show('3','4_故事')">
          </div>
          <div class="col-6 col-sm-2 align-top">
                <img src="/images/holiday/4_遊戲1.png" alt="Image"
                 class="img-fluid rounded float-start" id="b4" onclick="show('4','4_遊戲')">
          </div>
  </div>
     
    </div>
</div>

</div>

  </div>
</div>

<br/>
</div>
<audio id="audio1" src="">
</audio>
<audio id="audio2" src="">
</audio>

    
<?php $this->load->view("common/footer.php");?>
    

  </body>

</html>

<script>
 $('.carousel').carousel({
  interval: 200000
})
//var currentImg="<?php echo $story_audio;?>";
$('#audio1').attr("autoplay","");
show(1,'4_簡介');
function clearAll(){
    $("#b1").attr("src",'/images/holiday/4_簡介1.png');
    $("#b2").attr("src",'/images/holiday/4_習俗1.png');
    $("#b3").attr("src",'/images/holiday/4_故事1.png');
    $("#b4").attr("src",'/images/holiday/4_遊戲1.png');
    $("#unit1").hide();
    $("#unit2").hide();
    $("#unit3").hide();
    $("#unit4").hide();
}
function show(id,img){
    clearAll();
    $("#b"+id).attr("src",'/images/holiday/'+img+'2.png');
    $("#unit"+id).show();
    $('#audio1').attr("src",'');
}

function playMp3(video){
     $('#audio1').attr("src",'/images/holiday/wav/'+video+'.wav');
}
</script>

<style>
     #infoDiv {
      margin-top: 25px;
  }
  
  #speaker{
      width:50px;
      height:50px;
       float: right;
      position: relative;
      margin-top: 15px;
      margin-right: 100px;
      z-index: 200;
     cursor:pointer;
  }
  
    #story{
      margin-top: -60px;
      z-index: 2;
  }
</style>

