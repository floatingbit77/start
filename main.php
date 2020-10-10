<html>
<head>
    <title> your details</title>
    <style>
         .container{
        width: 700px;
        height: 50px;
        background-color: antiquewhite;
        text-align: center;
        }
        
        h1, p {
        font-family: 'Courier New';
        color: gray;
        text-align: center;
        }
        
        a{
        color: cyan;
        font-family: 'Courier New';
        }
        
        .content{
        max-width: 750px;
        margin: auto;
        }

    </style>
</head>
<body>
    <div class= "content">
    <div class="container">
        <h1>The Approximate Price Range:</h1> </div>
    
    <?php
        if (isset($_POST["opt1"])){
        $gemstones1 = $_POST['gemstones1'];
        $jewels1 = $_POST['jewels1'];
        $gemstonePrice1 = 7 * $gemstones1;
        $jewelsPrice1 = 3 * $jewels1;
        
        $totalPrice1 = $gemstonePrice1 + $jewelsPrice1 +10; 
        $higherPrice1 = $totalPrice1 + 5;
        print("<p>The item should be from $$totalPrice1 to $$higherPrice1</p>");

        } elseif (isset ($_POST["opt2"])){
        $gemstones2 = $_POST['gemstones2'];
        $jewels2 = $_POST['jewels2'];
        $gemstonePrice2 = 7 * $gemstones2;
        $jewelsPrice2 = 3 * $jewels2;
        
        $totalPrice2 = $gemstonePrice2 + $jewelsPrice2 + 20; 
        $higherPrice2 = $totalPrice2 + 5;
        print("<p>The item should be from $$totalPrice2 to $$higherPrice2</p>");

        
        } else {
        $gemstones3 = $_POST['gemstones3'];
        $jewels3 = $_POST['jewels3'];
        $gemstonePrice3 = 7 * $gemstones3;
        $jewelsPrice3 = 3 * $jewels3;
        
        $totalPrice3 = $gemstonePrice3 + $jewelsPrice3 + 10; 
        $higherPrice3 = $totalPrice3 + 5;
        print("<p>The item should be from $$totalPrice3 to $$higherPrice3</p>");

        } 
    ?>        
    
    <p><a href="index.html">go back</a></p>
    </div>
</body>
</html>