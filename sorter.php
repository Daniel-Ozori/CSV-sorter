<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_FILES['file'])){
            //open the uploaded file
            $file = fopen(($_FILES['file']['tmp_name']), 'r');
            $temp = array(); 
            if ($file !== FALSE) { 
                // Check the resource is valid
                $header = fgetcsv($file, 1000, ",");

                while (($data = fgetcsv($file, 1000, ",")) !== FALSE) { 
                    //store each data in a temp variable
                    array_push($temp,$data);
                }

                fclose($file);
            }

            //sort the
            sort($temp);
            array_unshift($temp,$header);

            $sorted = 'sorted.csv';
            $sorted = fopen($sorted, "w") or die("Unable to open file!");

            foreach ($temp as $row) {
                fputcsv($sorted, $row);
            }
            
            fclose($sorted);
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename=sorted.csv');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('sorted.csv'));
            header("Content-Type: csv");
            readfile('sorted.csv');
        }
    }
    
?>