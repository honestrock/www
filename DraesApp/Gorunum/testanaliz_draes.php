<html>
<head>
<title>Yeni Yemek</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

<script>
    function checkAndSubmit()
{
  if (document.getElementById('sel1'))
  {
         alert('both have been selected!');

      document.getElementById('formID').submit();
     
  }
}
</script>   

</head>
<body>

    <form id="formID" method="post" action="http://localhost:8088/www/index.php">
        
        
        <select  id="sel1" name="sel1" onchange="checkAndSubmit()">
             <option value=""> Please Select </option>
          <?php
        $list = $information["bolge"];?>
          <?php
       foreach ($list as $key => $L) {                 
            ?>
            
                <option value="<?=$L["bolge_adi"]?>" > 
                    <?= $L["bolge_adi"] ?> 
                </option> 
            <?
         }

         
            ?>
                </select></br></br>
                
                
                
                <select  name="yemekAdlari" type="submit">
             <option value=""> Please Select </option>
            <?php
         $list = $information["bolge"];?>
         
         <?php
                foreach ($list as $key => $L) {                 
            ?>
            
                    <option value="<?=$L["bolge_adi"]?>" > 
                    <?= $L["bolge_adi"] ?> 
                </option> 
            <?
         }
         
            ?>
                </select></br></br>
                
        
    </form> 
</body>
</html>
