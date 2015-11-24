<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
    
    <div>
        Sex
        <input type="sex" name="sex" value="{{ old('sex') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    
    <div>
        Phone
        <input type="phone" name="phone" value="{{ old('phone') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
