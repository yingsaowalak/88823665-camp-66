<h1>My view</h1>
<?php echo $value_id; ?>
{{ $value_id; }} {{$myinput}}
<from action="{{url('/mycontroller')}}" method="post">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">submit</button>
</form>
<?php for($i=0;$i<10;$i++){?>
    <h1>{{$i}}</h1>
<?php }?>
