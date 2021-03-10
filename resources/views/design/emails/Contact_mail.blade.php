@component('mail::message')
# Name

{{session()->get('name')}}

# Message

{{session()->get('message')}}

@component('mail::button', ['url' => url('home')])
 Go To Site Tech
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
