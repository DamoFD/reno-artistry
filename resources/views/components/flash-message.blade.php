@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="flash color-primary-bg">
        <p class="font-roboto-regular color-white-1 font-size-med">
            {{ session('message') }}
        </p>
    </div>
@endif