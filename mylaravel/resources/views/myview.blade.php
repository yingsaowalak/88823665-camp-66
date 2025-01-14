<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .list-group {
            text-align: left;
        }
        body {
            background-color: #FFE0E0; 
            font-family: 'Kanit';
        }
        h1 {
            color: #705C53; 
        }
        div {
            color: #7D5A5A; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>ตารางสูตรคูณ</h1>

        <form action="{{ url('/mycontroller') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="myinput" class="form-label">เลขแม่สูตรคูณ:</label>
                <input type="text" class="form-control" name="myinput" id="myinput" value="{{ $myinput }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="mt-4">
            @if (!empty($value_id) && is_numeric($value_id))
                <h3>ตารางสูตรคูณของแม่ {{ $value_id }}:</h3>
                <ul class="list-group">
                    @for ($i = 1; $i <= 12; $i++)
                        <li class="list-group-item">{{ $value_id }} x {{ $i }} = {{ $value_id * $i }}</li>
                    @endfor
                </ul>
            @else
                <p>กรุณากรอกเลขสำหรับการคำนวณสูตรคูณ</p>
            @endif
        </div>
    </div>
</body>
</html>