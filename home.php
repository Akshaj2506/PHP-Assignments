<html>
    <head>
        <title>
            Home: You're Broke
        </title>
        <style>
            body{
                background-color: rgb(201, 156, 222);
            }
            header {
            background: rgb(190, 130, 218);
            border-bottom: solid grey 1px;
            margin:-8px;
            margin-bottom: 5px;
            padding: 25px;
            font-size:120px;
            
            }
            #dt{
                float:right;
                border:solid black 2px;
                padding:10px;
                text-align: center;
                margin-top: 15px;
            }
            #amt{
                margin-left:5%;
            }
            #Tamt{
                float:right;
                margin-right:15%;
            }
            h3{
                margin-bottom:0px;
                margin-top:0px;
            }
            progress{
                width: 75%;
                height:30px;
                margin-top:10%;
            }
            button{
                margin-left:30px;
                margin-top:70px;
                padding:10px;
                background: rgb(69, 113, 168);
                color:white;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <header><center>You're Broke!!</center></header>
        <div id="dt">
            <h3 id="date">
                <?php
                echo date('d-m-Y'); 
                ?>
            </h3>
            <hr>
            <h3 id="dleft">
                <?php
                    $date = date('d');
                    $left = 31 - $date;
                    echo $left." days left";
                ?>
            </h3>
        </div>
        <br>

        <?php
        $connection = new mysqli("localhost", "root", "","Users"); // Establishing Connection with Server
        //MySQL Query to read data
        $query = "select * from yashica where name='total'";
        $result = $connection->query($query);
        $row = $result->fetch_assoc();
        ?>

        <center><progress id="prog" value="600" max="5000">300</progress></center>
        <div id="amt">
            <h3><?php echo $row["Amount"]; ?></h3>
        </div>
        <div id="Tamt">
            <h3>5000</h3>
        </div>
        <br>
        <button onclick="home.html"id="add">Add Expense</button>
        <?php
        mysqli_close($connection);
        ?>
    </body>
</html>