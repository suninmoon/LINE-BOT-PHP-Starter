nes (2 sloc)  29 Bytes

<FORM>
<INPUT TYPE="BUTTON" VALUE="Home Page" ONCLICK="window.location.href='http://www.tip-com.net'">
</FORM>
 
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
