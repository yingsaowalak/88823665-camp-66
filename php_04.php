<!DOCTYPE html>
<langhg="en">
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
         body {
            background-color: #FCFFC1;
            font-family: 'Kanit';
        }
        h1 {
            color:#F72C5B; 
        }
        
    </style>
        <body>
            <title>PHP_04</title>
            <div class="container mt-5">
        <h1>จำแนกเลขคู่ - คี่</h1>
        <form action="php_04.php" method="post">
            <div class="mb-3">
                <label for="start" class="form-label">Start</label>
                <input type="input" class="form-control" id="start" name="start" placeholder="กรุณากรอก 'ตัวเลข' ที่ต้องการเป็นตัวแรก" required>
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">End</label>
                <input type="input" class="form-control" id="end" name="end" placeholder="กรุณากรอก 'ตัวเลข' ที่ต้องการเป็นตัวสุดท้าย" required>
            </div>
            <div class="mb-4">
                <button class="btn btn-success" type="submit">แสดงผลลัพธ์</button>
            </div>
        </form>
        <div class="mt-4">
        <?php
            if ((isset($_POST['start']) && isset($_POST['end'])) != null) {
                $start = (int)$_POST['start']; 
                $end = (int)$_POST['end'];
                $type = null;
                echo "<h3>ตัวเลขตั้งแต่ $start - $end</h3>";
                echo '<ul class="list-group">';
                if($end < $start){
                    echo "<h1> Start ต้องน้อยกว่า End </h1>";
                }else{
                    for ($i = $start; $i <= $end; $i++) {
                    if($i%2 == 0){
                        $type = "เลขคู่";
                    }else{
                        $type = "เลขคี่";
                    }
                    echo "<li class='list-group-item'>$i เป็น$type</li>";
                }
                echo '</ul>';
                }
            }
            echo "<br>";
            ?>
        </div>
    </div>
        </body>
    </head>
</html>