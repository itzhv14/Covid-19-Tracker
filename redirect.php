<?php
     session_start();
 // function getScore3(){
    $gender = $_POST["gender"];
    $score = 0;
    $age    = $_POST["usrage"];
    // echo $gender;
    // echo $age;
    //$score  = $_SESSION["scorepass"];
    //echo $score;
    //if(isset($_POST["age"]))
    {
      if($age <= 17 || $age >=60)
        {
          $score = $score + 1;
        }
      else
        {
          $score = $score + 0.25;
        }
    }   
    if($gender=='male')
        {
          $score = $score + 0.25;
        }
        //$_SESSION['scorepass1']=$score;
        // echo "page2.php?scorepassget=$score";


    $temp = $_POST["BodyTem"];
    
    if ($temp == 'Fever')
    {
         $score += 1;
    }
    else if($temp == 'High')
    {
         $score += 1.5;
    }

  if(isset($_POST["q4"]))
  {
    $po1 = $_POST["q4"];
    $po1conv = implode("",$po1); 

    if ($po1conv == '134')
      {
        $score += 2.5;
      }
         
    else if($po1conv == '13')
     {
        $score += 2;
     }    
    else if($po1conv == '1' || $po1conv == '3')
     {
        $score += 1;
     }   
    else if($po1conv == '14' || $po1conv == '34')
     {
        $score += 1.5;
     }
    else if($po1conv == '4')
     {
        $score += 0.5;
     }     
    else if($po1conv == '1234')
     {
        $score += 2.5;
     }
    else if($po1conv == '123')
     {
        $score += 2;
     }   
    else if($po1conv == '12' || $po1conv == '23')
     {
        $score += 1;
     }    
    
    else if($po1conv == '124' || $po1conv == '234')
      {
        $score += 1.5;
      }     
    else if($po1conv == '24')
      {
        $score += 0.5;
      }
  }


  if(isset($_POST["q5"]))
  {
    $po5 = $_POST["q5"];
    $po5conv = implode("",$po5);
    if($po5conv == '123')
     {
      $score += 1.5;
     }    
    else if($po5conv == '12' || $po5conv == '23' || $po5conv == '13')
    {
      $score += 1;
    }    
    else if($po5conv == '1' || $po5conv == '2' || $po5conv == '3')
    {
      $score += 0.5;
    }
    else if($po5conv == '5')
    {
      $score +=0.25;
    }
    else if($po5conv == '1235' || $po5conv == '12345') 
    {
      $score +=1.75;
    }
    else if ($po5conv == '125' || $po5conv == '235' || $po5conv == '135')
    {
      $score += 1.25;
    }
    else if ($po5conv == '15' || $po5conv == '145' || $po5conv == '245' || $po5conv == '345' || $po5conv == '25' || $po5conv == '35')
    {
      $score += 0.75;
    }  
  } 
    

    if(isset($_POST["q6"]))
    {   
        $po6 = $_POST["q6"];
        $po6conv = implode("",$po6);
       if($po6conv == '23' || $po6conv == '2' || $po6conv == '3' || $po6conv == '13')
       {
         $score += 1.5;
       }
    }

    if(isset($_POST["q7"]))
    {
          $po7 = $_POST["q7"];
          $po7conv = implode("",$po7);
      if (strpos($po7conv, '1') !== false)
      {
        $score+=1;
      }

      if (strpos($po7conv, '2') !== false)
      {
        $score+=1;
      }

      if (strpos($po7conv, '3') !== false)
      {
        $score+=1;
      }

      if (strpos($po7conv, '5') !== false)
      {
        $score+=1;
      }

      if (strpos($po7conv, '7') !== false)
      {
        $score+=1;
      }

    }
    
    //if(isset($_POST["q8"]))
    {  
        
        $po8conv = $_POST["q8"];
       if($po8conv == '1')
       {
        $score += 0.5;
       }
       else if($po8conv == '3')
       {
         $score += 1;
       }
       else if($po8conv == '4')
       {
         $score += 1.5;
       }
    }
    $_SESSION["scorepass"] = $score;

     if($score<=3)
     {
       $risk = 'normal';
       $_SESSION["riskpass"] = $risk;
       header("Location: low.php");
      // echo "low.php";
     }
     else if($score<=6)
     {
       $risk='Medium';
       $_SESSION["riskpass"] = $risk;
       header("Location: medium.php");
       //echo "medium.php";
     }
     else if($score>6)
     {
       $risk='High';
       $_SESSION["riskpass"] = $risk;
       header("Location: high.php");
      // echo "high.php";
     }
     //$_SESSION["riskpass"] = $risk;
     
    //}   
     // echo $_SESSION["scorepass2"];
     // echo $risk;
     // echo $score;
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>