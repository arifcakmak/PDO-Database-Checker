<?php
try {   
    $db_host = "XXXXX";
    $db_name = "XXXXX";
    $db_user = "XXXXX";
    $db_pass = "XXXXX";
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_pass);
    echo "Bağlantı başarıyla sağlandı.";
} 
catch (PDOException $e){
    if (strpos($e->getMessage(), "[1049]") == true){
        echo "Bağlantıda hatalı veritabanı adı girildi.";
    }
    elseif(strpos($e->getMessage(), "[1045]") == true){
        echo "Bağlantıda hatalı kullanıcı adı veya şifre girildi.";
    }
    elseif(strpos($e->getMessage(), "[2002]") == true){
        echo "Bağlantıda hatalı sunucu adresi girildi.";
    }
}
?>
