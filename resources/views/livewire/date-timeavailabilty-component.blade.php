@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endpush
<div class="col-md-12" >
    <h6>Pick Appointment Date and Time</h6>
    <div class="input-item">
        <input type="text" id="datepicker" class="bg-gray-200 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 pay-1 my-1 focus:outline-black "
            placeholder="YY-MM-DD" wire:model="appointment_date">
        @error('appointment_date')<p class="text-danger">{{$message}}</p>@enderror

    </div>
</div>

<div class="col-md-12">
    <h6>Duration Meeting</h6>
    <div class="input-item">
        @foreach($times as $key=>$time)
        <input type="radio" id="interval-{{ $key }}" value="{{ $time->timing }}" placeholder="Minutes"
            wire:model="duration" class="hidden peer">
            <label for="interval-{{ $key }}"
            @class(['inline-block w-full text-center border py-1 peer-checked:bg-green-400']) wire:key='interval-{{ $key }}'>
            {{ $time->timing }}
        </label>
            @endforeach
        @error('duration')<p class="text-danger">{{$message}}</p>@enderror

    </div>
</div>
@push('scripts')
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script>
   var field = document.getElementById('datepicker');
var picker = new Pikaday({
onSelect: function(date) {
    field.value = picker.toString();
}
});
field.parentNode.insertBefore(picker.el, field.nextSibling);
</script>
@endpush
