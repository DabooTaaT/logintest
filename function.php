<script type="text/javascript">

function countTextJs2(){//ฟังก์ชั่นนับจำนวนตัวอักษรไม่รวมช่องว่าง
 var txtForJs2=document.getElementById('passwd').value;
 var countTxtNull=0;
 var countTxt=0;
 <?php echo "test" ?>
 try{
  countTxtNull=txtForJs2.match(/\s/g).length;//นับจำนวนช่องว่าง
 }catch(e){}
 countTxt=txtForJs2.length-countTxtNull;//จำนวนตัวอักษรทั้งหมด-จำนวนช่องว่าง=จำนวนตัวอักษรไม่รวมช่องว่าง
   document.getElementById('test').innerHTML=countTxt
}
  </script>