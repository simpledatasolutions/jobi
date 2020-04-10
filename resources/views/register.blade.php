@extends('layouts.app')

@section('title')
<title>Register | Jobi Tax</title>
@endsection

@section('is-active-reg')
class="active"
@endsection

@section('content')

<div id="register-page">
    <hr>
    <div class="container">
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <form id="registerForm">
            <h5>Let me know when Jobi Is live!</h5>
            <div class="row mt-3">
                <div class="col-md-3 mb-1">
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="col-md-3 mb-1">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="col-md-3 mb-1">
                    <input type="text" name="phone" placeholder="Phone" required>
                </div>
                <div class="col-md-3">
                    <button type="submit">Register</button>
                    <div id="response"></div>
                </div>
            </div>
        </form>
    </div>
</div>
<br><br><br>

@endsection