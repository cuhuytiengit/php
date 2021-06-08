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

      //john - boy - 15
      //peter - boy - 18

      if(!empty($students)){
            foreach($students as $key =>$value){
                  $name = $value["name"];
                  $sex = $value["sex"]==1 ? "Boy" : "Girl";
                  $score = $value["score"];
                  $total =0;
                  for($i = 0; $i < count($score);$i++)
                  {
                        $total +=$score[$i];
                  }
                  echo "Name: " . $name . " - sex: " . $sex . " -Score: " . $total . "<br/>";
            }
            }
      


     