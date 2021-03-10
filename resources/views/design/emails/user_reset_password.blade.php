@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => url('user/reset/password/'.$data['token'])])
أضغط هنا لأعادة تعين كلمة السر جديدة
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
