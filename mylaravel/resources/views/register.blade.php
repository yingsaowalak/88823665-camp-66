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
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="pass" class="form-control" placeholder="Password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" onclick="clickme">Sign In</button>
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
console.log("Hello World!")
//ALERT("Hello Wolrd!")
</script>
<script>
//alert("Hello World!")
let myval

var myval2

const PI=3.14

pi = 2


console.log(PI,pi)

let myarry = [];
//let myarry = Array()

myarry[0]=1
myarry["1"]=2
myarry.push(1)
myarry.push(4)
console.log(myarry)
myarry.pop()
console.log(myarry)
for(a=1; a<10; a++){
    console.log(a);
}

function clickme(){
    let name = document.getElementById('name');
    let email = document.getElementById('email');
    let password = document.getElementById('pass');
    let checkbox = document.getElementById('flexCheckDefault');

    let nameValue = name.value.trim();
    let emailValue = email.value.trim();
    let passwordValue = password.value;
    let isValid = true;

    // ตรวจสอบ Name
    if (nameValue === "") {
        name.classList.add("is-invalid");
        isValid = false;
    } else {
        name.classList.remove("is-invalid");
    }

    // ตรวจสอบ Email (ต้องมี @ และ .)
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(emailValue)) {
        email.classList.add("is-invalid");
        isValid = false;
    } else {
        email.classList.remove("is-invalid");
    }

    // ตรวจสอบ Password (ต้องมี ตัวเลข, ตัวอักษรพิมพ์เล็ก, ตัวอักษรพิมพ์ใหญ่)
    let passwordPattern = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    if (!passwordPattern.test(passwordValue)) {
        password.classList.add("is-invalid");
        isValid = false;
    } else {
        password.classList.remove("is-invalid");
    }

    // ตรวจสอบ Checkbox
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
