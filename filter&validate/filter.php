<?php
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            if(!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                        echo 'Email không hợp lệ';
            }else {
                        echo 'Email hợp lệ';
            }
?>