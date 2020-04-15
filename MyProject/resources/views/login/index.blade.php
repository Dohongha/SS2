@if($message != "")
    {{ $message }}
@endif

<form action="{{ action('LoginController@login') }}" method="POST">
    {{ csrf_field() }}
    <p>Username: <input type="text" name="username"/></p>
    <p>Password: <input type="password" name="password"/></p>
    <button type="submit" name="submit">Submit</button>
</form>