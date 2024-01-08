@php($languages = config('app.available_locales'))
@php($localActual = app()->getLocale())

<form  action="/">   
<select class="header__language-selector" onchange="this.form.action = '/language/' + this.value; this.form.submit()">
    @foreach ( array_keys($languages) as $locale)
    <option value="{{$locale}}" @if ($localActual===$locale) selected @endif>{{$languages[$locale]}}</option>
    @endforeach
</select>
</form>