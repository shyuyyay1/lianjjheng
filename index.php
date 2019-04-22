

<?php
    require_once 'db/connect.php';
    if(isset($_GET['searched'])){
        $keywords=$db->searched($_GET['searched']);
        $query =$db->query("
            SELECT lastname,phone
            FROM WERE lastname'%{$searched}%'OR phone LIKE '%{searched}%'
            ");
            ?>
            <div class="result-count">
            found<?php echo $query->num_rows; ?> results.
        </div>
        <?php
            if($query->num_rows){
                while($r=$query->fetch_object()) {
                    ?>
                    <div class="result">
                        <a href="#"><?php echo $r->lastname; ?></a>



<!doctype html>
<html lang="en">
<head>
    <div style="text-align:center;margin:30px 0; font:normal 14px/24px 'MicroSoft YaHei';color:#ffffff">
        <a href="" title="https://www.dropbox.com/s/euslm84wiy3lhnn/%E8%81%AF%E6%AD%A3%E6%90%9C%E5%B0%8B.png?dl=0"></a>

        <meta charset="UTF-8">
        <titl>聯正債務搜尋系統</titl>
        </title>

        <!--图标库-->
        <link rel='stylesheet' href='css/all.css'>

        <!--主要样式-->
        <link rel="stylesheet" href="css/style.css">
        <?php print("$output");?>
<body>

    <div class="container">


            <div style="text-align:center;margin:30px 0; font:normal 14px/24px 'MicroSoft YaHei';color:#ffffff">
                <div class="input-group">
                            <form action="search.php" method="get">
                            <label for="search"><i class="search"></i></label>
                    <input type="text" name="search" placeholder="輸入您要查詢的姓名.." autocomplete="off">
                    <input type="submit" value="Search">
                </div>
               
                <div class="suggestion-list hidden">
                </div>
        </form>


        <script src="js/index.js"></script>

        <div style="text-align:center;margin:30px 0; font:normal 14px/24px 'MicroSoft YaHei';color:#ffffff">
            <p>Lianjheng</p>
        </div>


</body>

</html>
