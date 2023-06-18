<div class="create-account-form col">
    <p><span>Create an account</span>It's quick and easy.</p>
    <form action="{{route('register')}}" method="post">
      
        <div class="form-group">
            <input type="text" name="fName" placeholder="First name" class="form-control">
            <i class="fas fa-exclamation-circle"></i>
            <div class="speech-bubble1">What's your name?</div>
        </div>
        <div class="form-group">
            <input type="text" name="surname" placeholder="Surname" class="form-control">
            <i class="fas fa-exclamation-circle"></i>
        </div>
        @csrf
        <div class="form-group">
            <input type="text" name="email" placeholder="Email address" class="form-control">
            <i class="fas fa-exclamation-circle"></i>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
            <i class="fas fa-exclamation-circle"></i>
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
            <i class="fas fa-exclamation-circle"></i>
        </div>
        <div class="form-group">
            <label for="Birthday" class="d-block">Birthday</label>
            <select id="Day" name="DOBd">
                <option>Day</option>
            </select>
            <select id="Month" name="DOBm">
                <option>Month</option>
            </select>
            <select id="Year" name="DOBy">
                <option>Year</option>
            </select>
            <span class="question-mark"><i class="fas fa-question-circle"></i></span>
        </div>
        <div class="form-group">
            <label for="Gender" class="d-block">Gender</label>
            <input id="Gender" type="radio" name="gender" value="Female"> <span>Female</span> &nbsp; &nbsp; &nbsp;
            <input id="Gender" type="radio" name="gender" value="Male"> <span>Male</span> &nbsp; &nbsp; &nbsp;
            <input id="Gender" type="radio" name="gender" value="Custom"> <span>Custom</span>
            <span class="question-mark"><i class="fas fa-question-circle"></i></span>
        </div>
        <p>By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Data Policy</a> and <a href="#">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</p>
        <input type="submit" value="Sign Up" class="btn btn-success">
    </form>
    <p><a href="#">Create a Page</a> for a celebrity, band or business.</p>
</div>