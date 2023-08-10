<?php
$_COOKIE_name1="num";
$_COOKIE_value1="";
$_COOKIE_name2="op";
$_COOKIE_value2="";
    if(isset($_POST['num']))
    {
        $num=$_POST['input'].$_POST['num'];
    }
    else{
        $num="";
    }
     if(isset($_POST['op']))
     {
        $_COOKIE_value1=$_POST['input'];
        setcookie($_COOKIE_name1, $_COOKIE_value1, time()+(86400*30), "/");

        $_COOKIE_value2=$_POST['op'];
        setcookie($_COOKIE_name2, $_COOKIE_value2, time()+(86400*30), "/");
        $num="";
     }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+";
            $result=$_COOKIE['num']+$num;
            break;
            case "-";
            $result=$_COOKIE['num']-$num;
            break;
            case "*";
            $result=$_COOKIE['num']*$num;
            break;
            case "/";
            $result=$_COOKIE['num']/$num;
            break;
        }
        $num=$result;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body{
            background-color: rgb(145, 145, 145);
        }
        .maininput{
            font-size: 80px;
            color: whitesmoke;
            font-weight: 400;
        }
        .calc{
            margin: auto;
            background-color: black;
            border: 2px solid whitesmoke;
            width: 27%;
            height: 530px;
            border-radius: 20px;
            box-shadow: 10px 10px 40px;
        }
        .maininput{
            background-color: black;
            border: 1px solid grey;
            height: 80px;
            width: 98.2%;
        }
        .numbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: grey;
        }
        .numbtn:hover{
            background-color: rgba(180, 176, 176, 0.966);
            color: whitesmoke;
        }
        .calbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: orange;
        }
        .calbtn:hover{
            background-color:rgb(211, 137, 0);
            color: whitesmoke;
        }
        .c{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: red;
        }
        .c:hover{
            background-color: rgb(247, 4, 4);
            color: whitesmoke;
        }
        .equal{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: rgb(8, 209, 8);
        }
        .equal:hover{
            background-color: green;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="calc">
        <form action=""method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo @$num ?>"> <br> <br>
            <table>
                    <td> <input type="submit" class="numbtn" name="num"value="7"> </td>
                    <td>  <input type="submit" class="numbtn" name="num"value="8"> </td>
                    <td> <input type="submit" class="numbtn" name="num"value="9"> </td>
                    <td> <input type="submit" class="calbtn" name="op"value="+"> </td>
               
            </table>
            <table>    
                  <td> <input type="submit" class="numbtn" name="num"value="4"> </td>
                  <td> <input type="submit" class="numbtn" name="num"value="5"> </td>
                  <td> <input type="submit" class="numbtn" name="num"value="6"> </td>
                  <td> <input type="submit" class="calbtn" name="op"value="-">  </td>
            </table>
            <table>
                    <td> <input type="submit" class="numbtn" name="num"value="1"> </td>
                    <td> <input type="submit" class="numbtn" name="num"value="2"> </td>
                    <td> <input type="submit" class="numbtn" name="num"value="3"> </td>
                    <td> <input type="submit" class="calbtn" name="op"value="*">  </td>
                
            </table>
             <table>
                   <td> <input type="submit" class="c" name="num"value="c"> </td>
                   <td> <input type="submit" class="numbtn" name="num"value="0"> </td>
                   <td> <input type="submit" class="equal" name="equal"value="="> </td>
                   <td> <input type="submit" class="calbtn" name="op"value="/"> </td>
             </table>
        </form>
    </div>
    
</body>
</html>