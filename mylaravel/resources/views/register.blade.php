@extends('layouts.default')

@section('content')
<div class="register-page">
    <div class="register-box">
        <div class="register-logo">
          <a href="../index2.html"><b>Admin</b>LTE</a>
        </div>
         <!-- /.register-logo -->
         <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Register a new membership</p>
                <form action="{{ url('/register') }}" onsubmit="return clickme()" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" />
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                        <div class="valid-feedback">
                            OK
                        </div>
                        <div class="invalid-feedback">
                            กรุณากรอก ชื่อ
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        <div class="valid-feedback">
                            OK
                        </div>
                        <div class="invalid-feedback">
                            กรุณากรอก email
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="pass" class="form-control" placeholder="Password" />
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        <div class="valid-feedback">
                            OK
                        </div>
                        <div class="invalid-feedback">
                            กรุณากรอก รหัสผ่าน
                        </div>
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree to the <a href="#">terms</a>
                                </label>
                                <div class="valid-feedback">
                                    OK
                                </div>
                                <div class="invalid-feedback">
                                    กรุณาอ่านข้อตกลงและกดยืนยัน
                                </div>
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" onclick="clickme()">Sign In</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>

                <!-- /.social-auth-links -->
                <p class="mb-0">
                    <a href="{{ url('/login') }}" class="text-center"> I already have a membership </a>
                </p>
            </div>
            <!-- /.register-card-body -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    console.log("Hello world")
    // Alert("Hello world!!!!!")
</script>

<script>
    // alert("Hello world!!!!!!!!!")

let myval
// var myval
const PI = 3.14
pi = 2
console.log(PI,pi)

// let array = Array(1,3,2)

let array = []
array[0] = 1
array["1"] = 2

array.push(3)
array.push(4)
console.log(array)

array.pop()
console.log(array)

function clickme(){
    let name = document.getElementById('name');
    let email = document.getElementById('email');
    let password = document.getElementById('pass');
    let checkbox = document.getElementById('flexCheckDefault');

    let nameValue = name.value.trim();
    let emailValue = email.value.trim();
    let passwordValue = password.value;
    let isValid = true;

    if (nameValue === "") {
        name.classList.add("is-invalid");
        isValid = false;
    } else {
        name.classList.remove("is-invalid");
    }

    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(emailValue)) {
        email.classList.add("is-invalid");
        isValid = false;
    } else {
        email.classList.remove("is-invalid");
    }

    let passwordPattern = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    if (!passwordPattern.test(passwordValue)) {
        password.classList.add("is-invalid");
        isValid = false;
    } else {
        password.classList.remove("is-invalid");
    }

    if (!checkbox.checked) {
        checkbox.classList.add("is-invalid");
        isValid = false;
    } else {
        checkbox.classList.remove("is-invalid");
    }

    return isValid;
}
</script>
@endsection