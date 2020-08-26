<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature converter</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container{
            display: flex;
            justify-content: space-evenly;
            align-items: center;

        }
    

        .left-side img{
            width: 40%;
            height: auto;
            position: relative;
            top: 5rem;
            left: 7rem;
        } 

        form{
            padding: 2rem;
            text-align: center;
        }

        .right-side{
            position: relative;
            top: 5rem;
    right: 18rem;
            display: block;
            width: 650px;
            height: 300px;
            background-color: #1A2E35;
            color: white;
            border-radius: 10px;
        
        }

       .temp{
           width: 90%;
           padding: 10px;
           font-size: 1rem;
           display: block;
           margin:1rem 0.5rem;
           outline: none;
           border-radius: 1rem;
           border: 1px solid #1A2E35;
       }

        .radio{
            display: inline-block;
            margin-bottom:1.5rem;  
            font-size: 1rem;

        }

        

        .submitbtn{
            display: block;
            background-color: #DB4954;
            outline: none;
            border:none;
            width: 9rem;
            padding:10px;
            border-radius: 1rem;
            margin-bottom:1rem;
            color: white;
            margin-left: 3rem;
            font-size: 1rem;

            
        }

        .submitbtn:hover{
            background-color: crimson;
        }

        .title{
            position: absolute;
            top:20px;
            left: 35%;
        }
    </style>
</head>
<body>
    <div class="container">

    <div class="title">
            <h1 style="color:#FF4F5A;">Temperature <span style="color:#1A2E35;">converter</span></h1>
        </div>

    

        <div class="left-side">
          <img src="vector.jpg" alt="Calculator vector">
        </div>
        

        

        <div class="right-side">

            <form action="index.php" method="POST">

                <input type="text" name="num" class="temp" placeholder="Please enter Temperature" >

                <label>Celcius</label>
                <input type="radio" name="units" value="celcius" class="radio">

                <label>Farenheit</label>
                <input type="radio" name="units" value="farenheit" class="radio">

                <input type="submit" value="Convert" name="submit" class="submitbtn">

            </form>

            

            <p style="padding: 10px;"> <?php 
                
                
                if (isset($_POST['submit'])){

                    $temp = $_POST['num'];
                    $radio = $_POST['units'];

                    if($radio == "celcius"){
                        $result = $temp * 9 / 5 + 32;
                        echo "The conversion of celcius to farenheit is". $result;

                    }else{
                        $result = ($temp-32) * 5 / 9;
                        echo "The conversion of farenheit  to celcius is ". $result.".";

                    }
                }
                
                
                
                
                ?></p>


        </div>

        
    </div>
</html>