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
                        

                }
            }
    }