@component('mail::message')
# Reset Password

You are receiving this email because we received a password request for your account!

@component('mail::button', ['url' => 'http://' . $url .'/reset-password/'. $token])
Click here to Reset Password
@endcomponent

If you did not reset your password, no futhor action is required.

Regards
@endcomponent
