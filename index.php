nes (2 sloc)  29 Bytes

<button onclick="popupModal('sample_data.php',500,200);">Sample Popup</button>
 
<script type="text/javascript">
function popupModal(url,width,height){
    var myDate=new Date();
    var setUniqe=myDate.getTime(); // ใช้สำหรับ ป้องกันการ cache กรณีกำลังทดสอบ
     
    var diaxFeature="dialogWidth:"+width+"px;"
    +"dialogHeight:"+height+"px;"
/*  +"dialogLeft:"+width+"px;"
    +"dialogTop:"+width+"px;"       */
    +"center:yes;"
    +"edge:raised;" // sunken | raised 
    +"resizable:no;"
    +"status:no;"
    +"scroll:no;";  
    window.showModalDialog(url+"?"+setUniqe,"", diaxFeature);
    // กรณีไม่ใช้ setUniqe
    //  window.showModalDialog(url,"", diaxFeature); 
}
</script>


<?php
echo "Hello LINE BOT";
