<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    $otherLang = get_other_lang();
require_once("../include/fonctions.php");
if(isset($_SESSION["connecte"]) && isset($_SESSION["connecte"]) == "true" && isset($_SESSION["user"]) ){
    ?>
    <div id='top'>
        <nav class="bloc-navigation">
            <ul class="top-nav" id="content">
                <li><a href="#"><?php echo $home[$lang] ?></a></li>
                <li><a href="./history.php#content"><?php echo $history[$lang] ?></a></li>
                <li><a href="./visit.php#content"><?php echo $visit[$lang] ?></a></li>
                <li><a href="./about.php#content"><?php echo $about[$lang] ?></a></li>
                <li><a href="./<?php echo $fileName.'?lang='.$otherLang;?>"><?php echo $otherLang?></a></li>
                <div>
                    <li><a href="./account.php#content"><?php echo $account[$lang] ?></a></li>
                    <li><a href="./logout.php#content"><?php echo $logout[$lang] ?></a></li>
                </div>
            </ul>
        </nav>
    </div>
<?php
}
else{
    $otherLang = get_other_lang();
?>  
    <div id='top'>
        <nav class="bloc-navigation">
            <ul class="top-nav" id="content">
                <li><a href="./index.php"><?php echo $home[$lang] ?></a></li>
                <li><a href="./history.php#content"><?php echo $history[$lang] ?></a></li>
                <li><a href="./visit.php#content"><?php echo $visit[$lang] ?></a></li>
                <li><a href="./about.php#content"><?php echo $about[$lang] ?></a></li>                
                <li><a href="./<?php echo $fileName.'?lang='.$otherLang;?>"><?php echo $otherLang?></a></li>
                <div>
                    <li><a href="./login.php#content"><?php echo $login[$lang] ?></a></li>
                    <li><a href="./register.php#content"><?php echo $register[$lang] ?></a></li>
                </div>
            </ul>
        </nav>
    </div>
<?php
}
echo "<?php echo .$currentPage?>";
?>
    
    
