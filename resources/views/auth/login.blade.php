<div class="form col-10 col-md-8">
    <form action="{{route('login')}}" method="POST">@csrf
        <input type="submit" value="Log In" class="form-control float-right">
        <div class="form-group float-right">
            <label for="Password">Password</label>
            <input id="Password" type="password" name="password" class="form-control">
            <span>Forgotten account?</span>
        </div>
        <div class="form-group float-right">
            <label for="Email">Enter email</label>
            <input id="Email or Phone" type=email name="email" class="form-control">
        </div>
    </form>
</div>