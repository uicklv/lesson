<?php

$files = $_FILES;

//echo "<pre>";
//print_r($files);
//echo "<pre>";
//exit;

if ($files) {
    foreach ($files as $file) {

        if ($file['error']) {
            echo 'error';
            exit;
        }

        print_r(pathinfo($file['name']));

        $fileTmp = $file['tmp_name'];
        $fileName = $file['name'];
        move_uploaded_file($fileTmp, 'files/' . $fileName);
    }
}

//if ($files) {
//    foreach ($files as $file) {
//        //count elements in array
//        if (is_array($file['name'])) {
//            $length = count($file['name']);
//            for ($i = 0; $i < $length; $i++) {
//                if ($file['error'][$i]) {
//                    echo 'error';
//                    exit;
//                }
//
//                $fileTmp = $file['tmp_name'][$i];
//                $fileName = $file['name'][$i];
//                move_uploaded_file($fileTmp, 'files/' . $fileName);
//            }
//        } else {
//            if ($file['error']) {
//                echo 'error';
//                exit;
//            }
//
//            $fileTmp = $file['tmp_name'];
//            $fileName = $file['name'];
//            move_uploaded_file($fileTmp, 'files/' . $fileName);
//        }
//    }
//}