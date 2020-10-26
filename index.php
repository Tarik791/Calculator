<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <script>
        function(n){

        }
    </script>
    <style>
    *{
        margin:0;
        padding:0;
    }
    
    input[type=submit] {
        width:50px;
        height:50px;
        margin:2;
        cursor:pointer;
        border: 1px solid #fff;
        color: #fff;
        transition: 0.6s ease;
    }
    input[type=submit]:hover{
        background-color: #fff;
        color: #000;
    }
    
    h1{
        text-align:center;
        
    }

    form{
        text-align:center;
        padding-top:200px;
    }

    input[type=v1], input[type=v2]{
        width:200px;
        height:30px;
        border:3px solid #00B4CC;
        font-size:22px;
        outline:none;
        border-radius:10px;
    }
    
    input[type=v1],input[type=v2]:focus{
        color: #00B4CC;
        border: 3px solid black;
    }
    
    
    
    </style>
</head>
<body>
    <div>
        <h1>Calculator</h1>
    </div>
<p>
    <form action="index.php" method="get">
        <input type="v1" name="v1"/>
        <select name="action">
            <option value="plus">+</option>
            <option value="minus">-</option>
        </select>

        <input type="v2" name="v2"/>
        <input type="submit" name="submit" value="Submit">
    </form>
</p>

<p>
    <?php 
    
    if(isset($_GET["submit"])){
        $v1 = $_GET["v1"];
        $v2 = $_GET["v2"];

        if($_GET["action"]=="plus"){
            $result = $v1+$v2;
            echo "<h1>$v1 + $v2</h1>";
        }else{
            $result = $v1-$v2;
            echo "<h1>$v1 - $v2</h1>";
        }
        echo "<h1>= $result</h1>";
    
    }
    
    
    ?>
</p>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>