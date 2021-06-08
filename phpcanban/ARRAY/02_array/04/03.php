<?php
      //Quản lí sinh vien
      ////sv1 name, sex, scourse

      
      $students = array(
                             "0001" => array("name" =>"john",
                                             "sex" => 1,
                                             "score" => array(4,5,6)
                             
                             
                   ),
                             "0002" => array("name" =>"peter",
                              "sex" => 1,
                              "score" => array(5,6,7)


                  ),
                               "0003" => array("name" =>"marry",
                                             "sex" => 0,
                                             "score" => array(7,8,9)
                             
                             
            ),



      );
      echo "<pre>";
      print_r($students);
      echo "<pre>";


      //tên của sinh viên 0002

      echo $students["0002"]["name"] . "<br/>";
      //điểm môn thứ 2 của 0003
      echo $students["0003"]["score"]["1"] . "<br/>";
      //thay đổi tên 0003 thành Anne
      echo $students ["0003"]["name"] = "Anne";
      echo "<pre>";
      print_r($students);
      echo "<pre>";
      
       //thay đổi tên 0003 môn thứ 2 thành 10 

       echo $students["0003"]["score"][1] =10;
       echo "<pre>";
      print_r($students);
      echo "<pre>";