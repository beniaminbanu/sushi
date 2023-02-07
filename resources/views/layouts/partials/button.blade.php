@if ($type == "link-button")
    <a class="{{$class}}" href="{{$link}}" title="{{$title}}">{{$text}}</a>
@elseif ($type == "buttn")
    <button class="{{$class}}" >{{$text}}</button>
@endif
