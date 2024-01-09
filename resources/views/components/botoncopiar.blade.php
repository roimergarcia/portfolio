@props(['textoACopiar' => ''])

<button 
    title="{{__('Copy email')}}" 
    onclick="navigator.clipboard.writeText('{{$textoACopiar}}');">
    <i class="fa-regular fa-copy"></i>
</button>