<?php
    session_start();
    if(isset($_POST['submit'])){
        if($_POST['userdelete']==null){
            header('location:../user_manager.php?error=empty');
        }
        else{
            $deleteuser=$_POST['userdelete'];
            $type=$_POST['type'];

        
            if($type=='purchaser'){

                $array = file("../purchaser.txt");

                foreach ($array as $key=> $line) {

                    //removing 
                    if(stristr($line,$deleteuser)!== false){
                        unset($array[$key]);
                    break;}

                }

                $array = array_values($array);

                //file_put_contents($f, implode($array));
                file_put_contents("../purchaser.txt", implode("", $array));

                header('location:../user_manager.php?error=none');

            }
            elseif($type=='retailer'){
                $array = file("../retailer.txt");

                foreach ($array as $key=> $line) {

                    //removing 
                    if(stristr($line,$deleteuser)!== false){
                        unset($array[$key]);
                    break;
                }

                }

                $array = array_values($array);

                //file_put_contents($f, implode($array));
                file_put_contents("../retailer.txt", implode("", $array));

                header('location:../user_manager.php?error=none');
            }
            elseif($type=='admin'){
                $array = file("../admin.txt");

                foreach ($array as $key=> $line) {

                    //removing 
                    if(stristr($line,$deleteuser)!== false){
                        unset($array[$key]);
                    break;}

                }

                $array = array_values($array);

                //file_put_contents($f, implode($array));
                file_put_contents("../admin.txt", implode("", $array));

                header('location:../user_manager.php?error=none');
            }
            else{
                //echo "Please select a user type";
                header('location:../user_manager.php?error=yes');
            }
        }
    }

?>