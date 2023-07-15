Fortify::resetPasswordView(function ($request) {
    return view('auth.reset-password', ['request' => $request]);
});