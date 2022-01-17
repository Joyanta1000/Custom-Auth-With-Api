<form action="{{route('week.store')}}" method="post">
    @csrf
    

<input type="checkbox" name="day[]" value="1" /> Sunday<br />
<input type="checkbox" name="day[]" value="2" /> Monday<br />
<input type="checkbox" name="day[]" value="3" /> Tuesday<br />

<input type="checkbox" name="day[]" value="5" /> Thursday<br />
<input type="checkbox" name="day[]" value="6" /> Friday<br />
<input type="checkbox" name="day[]" value="0" /> Saturday<br />
<input type="submit" value="Submit" />
</form>