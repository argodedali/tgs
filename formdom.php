<!DOctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>DOM</h1>
    <form action="" name="formku">
        <input type="text" placeholder="ANGKA1" name="angka1">
        <input type="text" placeholder="ANGKA2" onchange="jml()" name="angka2">
        <input type="text" placeholder="JUMLAH" name="jumlah">
        <input type="text" placeholder="KALI" name="kali">
        <input type="text" placeholder="KURANG" name="kurang">
        <input type="text" placeholder="BAGI" name="bagi">
        
    </form>
    <script>
        function jml(){
            var ang1=document.formku.angka1.value;
            var ang2=document.formku.angka2.value;

            ang1=parseInt(ang1);
            ang2=parseInt(ang2);

            document.formku.jumlah.value=ang1+ang2;
            document.formku.kali.value=ang1*ang2;
            document.formku.kurang.value=ang1-ang2;
            document.formku.bagi.value=ang1/ang2;
        
        }
    </script>

</body>
</html>