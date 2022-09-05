<!DOCTYPE html>
<html>
    <body>
    
<?php

function a($word){
    echo "$word<br/>";
}

function showproductTable($id, $name, $price, $image, $red,$green,$blue){
    echo " <tr> <td><p style = 'color:rgb($red,$green,$blue)'>$id</td> 
    <td><p style = 'color:rgb($red,$green,$blue)'>$name</td> 
    <td><p style = 'color:rgb($red,$green,$blue)'>$price</td> 
    <td><img src = '$image' alt = 'Testimage'></td></tr>";
}

$arrayofproduct = array(
    array("01", "นูปต้า","20 ฿","https://scontent.fbkk6-2.fna.fbcdn.net/v/t1.15752-9/300536711_811713933341192_8130752685145398189_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFVWqxRADkytN15SFVw2JGijwvtK4lUpx-PC-0riVSnH-eflnweqDJnzRCKHirFpDDpvH4xwvym1K6aM4GxCQle&_nc_ohc=Ii3JS14gm5YAX_HG8kX&_nc_ht=scontent.fbkk6-2.fna&oh=03_AVJU00fHPLAy1MqdFdWPtQh1PnWZNAeNt-cji-YlCDAxQA&oe=6332C6D8"),
    array("02", "ถังทอง","20 ฿","https://scontent.xx.fbcdn.net/v/t1.15752-9/296012788_467702921888152_7944993327880214170_n.jpg?stp=dst-jpg_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeHlv9rlMr5pHEgS9R4ZvFLHII5CXH5YvKEgjkJcfli8oSylKA-6Bse8qoqiB9LC-6KXDl6ZXLw7p4aadI0Fc3I-&_nc_ohc=ihG4EgMLBpEAX-T-gK2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVLUiOL_XdjRW4JqyIWungy8rBA8fNh7-it2BY1b4dC8bg&oe=6330F333"),
    array("03", "ดาวล้อมเดือน","25 ฿","https://scontent.xx.fbcdn.net/v/t1.15752-9/296357988_584279686713033_5335694813336359802_n.png?stp=dst-png_p206x206&_nc_cat=109&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeHxnJkfoLVCqGmpYaA6PW-snUh5d8tfyledSHl3y1_KV8Jssv2DAmFRftLAmHqIbK0qFGPqTPHuSsXs01SW9qLj&_nc_ohc=SNdF_BextSgAX8dW9RW&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVL9IGMpFpgb5mcnmaCtCevxz7EcTMLLd4Tt_qaZUiKc9w&oe=63333559"),
    array("04", "สายรุ้ง","25 ฿","https://scontent.xx.fbcdn.net/v/t1.15752-9/293622639_5305067202894999_1360041511813669015_n.jpg?stp=dst-jpg_p206x206&_nc_cat=108&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeFfRtpEBuR9eVuq4nujjY7MWR-uQgWlyWVZH65CBaXJZejjmP4KjenV0hmjUP5kgGcaoEG6rfa5ocQ9Q5CmfgMU&_nc_ohc=tJ9yN1aYe90AX8ayqer&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVKHl7OrUwtA3stiuEXCUYq6pqBvvTN6TelSg3CDJ6ikug&oe=63320576"),
    array("05", "หูมิกกี้เมาท์","35 ฿","https://scontent.xx.fbcdn.net/v/t1.15752-9/289071323_3209375112634039_4655545685206996902_n.jpg?stp=dst-jpg_s206x206&_nc_cat=110&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeFd9lpNf5zBwyczdb_x3FubBUhDidRp2N4FSEOJ1GnY3rSZ6Utz5BLPnhOFhC7DCiJ3xWLp7s223SiC-P3Nu7sJ&_nc_ohc=swLxy1cY4agAX8g-ZMj&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVKmNXFl8hN3g3S13zUzowGkMAWEE3K0wONBz1UHz8DAtA&oe=633131EB"),
    array("06", "หนามพิกุล","25 ฿","https://scontent.xx.fbcdn.net/v/t1.15752-9/295725039_1059495321397008_4982378560078471941_n.jpg?stp=dst-jpg_p206x206&_nc_cat=101&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeEMW1OUBerTjqqs4r-iaqs7h0rAEJZc6uiHSsAQllzq6ElUnPD3FJT55OcHjfWuKKnHEcCBJYu2AJe7wJm16_34&_nc_ohc=M-uZRd-70VMAX9rWoUF&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVJeZnQzEzU6M_QcLaIqKzRavYkSGD7D2lGeK1oxEC2zIw&oe=6332656F"),
    array("07", "ลูกแมว","45 ฿","https://scontent.xx.fbcdn.net/v/t1.15752-9/301363040_2257532537744684_2927701383596223092_n.jpg?stp=dst-jpg_s206x206&_nc_cat=101&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeHO2BsryqwDKlW7h1rpjf2SIfsa8Iw_C8wh-xrwjD8LzMt8UInVVN192GklZnzNvl9wn-HouQJ7lghrpeNDMvGj&_nc_ohc=QBznvmEwM20AX8EmiNF&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVLG6ERYFJ16qcuKtq_fiub0mmvRdx6uG50GHXaJSO_hiw&oe=633372AA"),
    array("08", "ขนนกขาว","45 ฿","https://scontent.xx.fbcdn.net/v/t1.15752-9/291617008_794251185043017_7888975729385904199_n.jpg?stp=dst-jpg_p206x206&_nc_cat=109&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeHTA5gEKMfTKHJJOQ_cz2U8pE-WoN0kEL-kT5ag3SQQv5F9HcT_RmgUu9ffVuOI92JUyn_hI9i08mUYhjPVM2Y2&_nc_ohc=58vfDlULi4kAX87Imx0&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVIAZ3PsW1LaHbsEMvt02LjvpD1_wR5CF9WTCplVOPEW5w&oe=6331C127"),
    array("09", "ตุ๊กตาญี่ปุ่น","30 ฿","https://scontent.xx.fbcdn.net/v/t1.15752-9/300313991_384059237050865_6330735470365779424_n.jpg?stp=dst-jpg_s206x206&_nc_cat=103&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeFlWfl1gAomAabQ2brzeP6o8gQMtYEnm6TyBAy1gSebpPZrVvXoZsTxhCHM321PRSVawAZK8pKH_X08MZGrIWcP&_nc_ohc=nTAfXhgHpccAX--uGcM&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVIB1BstcH-XG0dFgxL8u2ts5YDwkxYuDjbkBWwP3gt_6w&oe=63317E6B"),
    array("10", "มะพร้าวทะเลทราย","55 ฿","https://scontent.xx.fbcdn.net/v/t1.15752-9/297362368_407553134843910_2029454879958063804_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeFbWmnDbHTscAT96-z_ViOr9SCAtMO2Mv71IIC0w7Yy_tIUdHcekA4wodmGafXyncbxodgIA53ogE1pp9DxI6oZ&_nc_ohc=Vyu8ZYr3-g0AX-TNbei&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVJHQwjhDvRqPLrf2uNpjRJJ_FPARuQnJolHkrNMWIQidg&oe=6333D97B")
);

    a("<p style='font-size:35px'>Table of Products");
    echo "<table border='2'  width='90%' height='50%' style='font-size:25px'>";
    echo "<tr> <td>ID</td> <td>Name</td> <td>Price</td> <td>Image</td></tr>";
    for($i=0;$i<10;$i++){
        $red = rand(0,256);
        $green = rand(0,256);
        $blue = rand(0,256);      
        showproductTable($arrayofproduct[$i][0],$arrayofproduct[$i][1],$arrayofproduct[$i][2],$arrayofproduct[$i][3],$red,$green,$blue);
    }

?>
           
</body>
</html>