<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>email: <?php if (isset($_POST['email'])) { echo $_POST['email']; } ?></h1>
        <h1>detail: <?php echo isset($_REQUEST['detail']) ? $_REQUEST['detail'] : ""; ?></h1>
        <form method="post" action="http://localhost/88823665-camp-66/index_submit.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
