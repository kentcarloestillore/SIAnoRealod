@include('student_templates._students-list', ['students'=>$students])

<div id="firstname_error" hx-swap-oob="true" hx-on::after-request="this.reset()">
    <div class="text-red-800 rounded">
        <ul class="ms-2">
            @if($errors->has('first_name'))
                <div class="error">{{ $errors->first('first_name') }}</div>
            @endif
        </ul>
    </div>
</div>

<div id="lastname_error" hx-swap-oob="true">
    <div class="text-red-800 rounded">
        <ul class="ms-2">
            @if($errors->has('last_name'))
                <div class="error">{{ $errors->first('last_name') }}</div>
            @endif
        </ul>
    </div>
</div>

<div id="birth_date_error" hx-swap-oob="true">
    <div class="text-red-800 rounded">
        <ul class="ms-2">
            @if($errors->has('birth_date'))
                <div class="error">{{ $errors->first('birth_date') }}</div>
            @endif
        </ul>
    </div>
</div>

<div id="address_error" hx-swap-oob="true">
    <div class="text-red-800 rounded">
        <ul class="ms-2">
            @if($errors->has('address'))
                <div class="error">{{ $errors->first('address') }}</div>
            @endif
        </ul>
    </div>
</div>

<div id="StatusMessage" hx-swap-oob="true" class="text-red-800 rounded p-2 rounded">
    {{$msg}}
</div>
