<!DOCTYPE html>
<langhg="en">
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .list-group{
            text-align: left;
        }
    </style>
        <body>
            <title>PHP_03</title>
            <div class="container mt-5">
        <h1>ตารางแม่สูตรคูณ</h1>
        <form action="php_03.php" method="post">
            <div class="mb-3">
                <label for="inputnum" class="form-label">เลขแม่สูตรคูณ:</label>
                <input type="input" class="form-control" id="inputnum" name="inputnum" placeholder="กรุณากรอก 'ตัวเลข' ที่ต้องการ เช่น 1" required>
            </div>
            <div class="mb-4">
                <button class="btn btn-success" type="submit">สร้างตารางสูตรคูณ</button>
            </div>
        </form>
        <div class="mt-4">
            <?php
            
            if (isset($_POST['inputnum'])) {
                $myvar = (int)$_POST['inputnum']; 
                echo "<h3>ตารางสูตรคูณของแม่ $myvar:</h3>";
                echo "<ul class='list-group'>";
            
                //ตาราง
                for ($i = 1; $i <= 12; $i++) {
                    $ans = $myvar * $i;
                    echo "<li class='list-group-item'>$myvar x $i = $ans</li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </div>
        </body>
    </head>
</html>