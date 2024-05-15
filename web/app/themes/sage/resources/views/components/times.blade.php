@if ($times)
    <div class="times">
        @foreach ($times as $time)
            <div class="time-item">
                @if ($time['day'])
                    <div class="day">{!! $time['day'] !!}</div>
                @endif

                @if ($time['time'])
                    <div class="time">{!! $time['time'] !!}</div>
                @endif
            </div>
        @endforeach
    </div>
@endif
