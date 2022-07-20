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
              <h1 class="text-cursive h5 text-teal">注音符號</h1>
              <p><a href="/home"><span  class="text-cursive text-white">首頁</span></a> <span class="mx-3">/</span> 
                  <span class="mx-3"><a href="/student"><span  class="text-cursive text-white">學生學習區</span></a> 
                  <span class="mx-3">/</span> <span  class="text-cursive text-white">注音符號</span>
              </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

     <div class="site-section" style="background-color: #ffffff">
         

         
         
   <div class="container">
       
  <div class="row">
      
    <!----第1個格子  -->
    <div class="col-md-3">
        <div class="row">
      <div style="margin:-5px -15px;float:left;vertical-align: top;"><img src="/images/zhuyin/l/A_00_注音符號列表.png" alt="Image"
                 class="img-fluid"><br/>
     </div>
     </div>
      <div>
          <?php 
          $cur=0;
          $curColumn=0;
          ?>
          <?php foreach($viewClass1->result() as $row){
                if($cur==$row->zhuyin_row-1 && $cur!=0){
                  for($j=$curColumn;$j<5;$j++){
                      echo '<div class="col-sm"style="margin:-5px -15px;float:left">';
                      //echo '<img src="/images/zhuyin/l/A_00_白色圓.png" alt="Image"   style="width:40px;height:40px">';
                      echo '</div>';
                  }
                 echo '</div><br/>';
                 
             }
                
             if($cur!=$row->zhuyin_row){
                 echo '<div class="row  flex-nowrap">';
                  $cur=$row->zhuyin_row;
                  $curColumn=0;
             }
             $curColumn++;
              echo '<div class="col-sm"  style="margin:-5px -15px;float:left">';
              echo '<img id="A'.$row->zhuyin_id2.'" src="/images/zhuyin/l/'.$row->zhuyin_label .'" alt="Image"   style="width:40px;height:40px" onclick="moveclick(\''.$row->zhuyin_id2.'\')" onmouseover="style=\'cursor: pointer;width:40px;height:40px\'">';
              echo '</div>';
            
            } 
            ?>
      </div>
    </div>
    </div>
    <!----第2個格子  -->
    <div class="col-md-6" style="margin-bottom: 10px;margin-top: 30px'">
        <br/>
        <div class="card">
           <div class="card-body">
                <img src="/images/zhuyin/m/A_01_a.jpg" alt="Image"  id="mainPic" class="img-fluid">
           </div>
       </div>
    </div>
    
     <!----第3個格子  -->
    <div class="col-md-3">
         <div class="row  justify-content-center">
             <div class="col-6">
               <img src="/images/zhuyin/r/A_w.png" id="music1"   class="img-fluid" onclick="playMp3('1');" onmouseover="style='cursor: pointer;'" >
             </div>
              <div class="col-6">
                 <img src="/images/zhuyin/r/A_m.png" id="music2"   class="img-fluid" onclick="playMp3('2');"  onmouseover="style='cursor: pointer;'">
             </div>
          </div>
          <br/>
          <div class="row justify-content-center mt-3">
             <div class="col-3 col-md-6">
                 <img src="/images/zhuyin/r/A_a2.png" alt="Image"  id="icon_zhuyin" onclick="changeMainPic('icon_zhuyin','a')" class="img-fluid" onmouseover="style='cursor: pointer;'">
             </div>
           </div>
           <div class="row justify-content-center mt-3">
             <div class="col-3 col-md-6">
                 <img src="/images/zhuyin/r/A_b2.png" alt="Image"  id="icon_pen"   onclick="changeMainPic('icon_pen','b')"  class="img-fluid" onmouseover="style='cursor: pointer;'">
             </div>
            </div>
           <div class="row justify-content-center mt-3">
             <div class="col-3 col-md-6">
                 <img src="/images/zhuyin/r/A_c2.png" alt="Image"  id="icon_card"  onclick="changeMainPic('icon_card','c')"  class="img-fluid" onmouseover="style='cursor: pointer;'">
             </div>
          </div>
          
    </div>
  </div>
</div>
</br/>
<audio id="audio1" src="">
</audio>
<audio id="audio2" src="">
</audio>







    
<?php $this->load->view("common/footer.php");?>
    

  </body>

</html>

<script>
    var letter='01';
    var voice=0;
    moveclick('01');
    function moveclick(v){
         clearAll();
         clearRight('a');
          $('#A'+v).attr("src",'/images/zhuyin/l/A_'+v+'_red.PNG');
          
          //處理聲音
          //$('#audio1').attr("src",'/images/zhuyin/a/A_'+v+'_m_ab.mp3');
          //document.querySelector("audio1").playAudio();
          //$('#audio1').attr("autoplay","");
          letter=v;
          drawPic(v,'a');
    }
    
    function clearAll(){
         var target='';
        for(i=1;i<=37;i++){
            if(i<10){
                target='0'+i.toString();
            } else{
                target=i.toString();
            }
            $('#A'+target).attr("src",'/images/zhuyin/l/A_'+target+'.PNG');
        }
    }
    
    function drawPic(v,n){
        var imgType;
        switch(n){
            case "a":imgType='.jpg';
            break;
            case "b":imgType='.gif';
            break;
            case "c":imgType='.svg';
            break;
            default:imgType='.jpg';
            break;
            
        }
        $('#mainPic').attr("src",'/images/zhuyin/m/A_'+v+'_'+n+imgType);
    }
    
    function changeMainPic(target,n){
      clearRight(n);
        $('#mainPic').attr("src",'/images/zhuyin/m/A_'+letter+'_'+n+imgType);
       
    }
    
    function clearRight(n){
          var p_a='A_a2.png';
        var p_b='A_b2.png';
        var p_c='A_c2.png';
           switch(n){
            case "a":imgType='.jpg';
            p_a='A_a1.png';
            voice=0;
            break;
            case "b":imgType='.gif';
            p_b='A_b1.png';
            voice=0;
            break;
            case "c":imgType='.svg';
            p_c='A_c1.png';
            voice=1;
            break;
            default:imgType='.jpg';
            p_a='A_a2.png';
            voice=0;
            break;
            
        }
         $('#icon_zhuyin').attr("src",'/images/zhuyin/r/'+p_a);
        $('#icon_pen').attr("src",'/images/zhuyin/r/'+p_b);
        $('#icon_card').attr("src",'/images/zhuyin/r/'+p_c);
    }
    
    function playMp3(n){
       // $('#audio'+n).play();
       //document.querySelector("audio1").play();
       $('#audio'+n).attr("autoplay","");
       if(parseInt(n)+voice==1)
       $('#audio'+n).attr("src",'/images/zhuyin/a/A_'+letter+'_w_ab.mp3');
       else if(parseInt(n)+voice==2 && voice==0)
       $('#audio'+n).attr("src",'/images/zhuyin/a/A_'+letter+'_m_ab.mp3');
       else if(parseInt(n)+voice==2 && voice==1)
       $('#audio'+n).attr("src",'/images/zhuyin/a/A_'+letter+'_w_c.mp3');
       else if(parseInt(n)+voice==3)
       $('#audio'+n).attr("src",'/images/zhuyin/a/A_'+letter+'_m_c.mp3');
    }
</script>

