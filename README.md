**Doc
https://mega.nz/file/vwwSVBgS#OH56XRwYepl02oSrLvZedK6Qmf-7ClC3feORu6CFCuU
**Return response if unauthenticated via api
https://stackoverflow.com/questions/55941256/how-to-return-unauthorized-using-laravel-api-authentication

Please add the method in the class Handler in the file location app/Exceptions/Handler.php

protected function unauthenticated($request, AuthenticationException $exception)
{
    if ($request->expectsJson()) {
        return response()->json(['error' => 'Unauthenticated.'], 401);
    }
    return redirect()->guest(route('login'));
}

And also add the following line above the class in the same file as mentioned above: use Illuminate\Auth\AuthenticationException;

In the postman within the headers section please add the following header : X-Requested-With:XMLHttpRequest
