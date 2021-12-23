<a class="venobox"
   @if($gall)
   data-gall="{{ $gall }}"
   @endif
   href="{{ isset($big) ? $big : $small }}">
    <img class="w-50" src="{{ $small }}" alt="image alt"/>
</a>
