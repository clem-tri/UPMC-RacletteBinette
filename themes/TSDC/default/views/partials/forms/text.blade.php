@php
$value = "";
if(old($name)) {
    $value = old($name);
}  elseif(isset($model) && $model->$name) {
    $value = $model->$name;
}

if(isset($attributes)) {
    $attributes['name'] = $name;
    $attributes['type'] = "text";
    if(!isset($attributes['id'])) {
        $attributes['id'] = $name;
    }
    $attributes['value'] = $value;

} else {
    $attributes['type'] = "text";
    $attributes['class'] = 'form-control';
    $attributes['id'] = $name;
    $attributes['name'] = $name;
    $attributes['value'] = $value;
}

if($errors->has($name) && isset($attributes['class'])) {
    $attributes['class'] .= " is-invalid";
} elseif ($errors->has($name) && !isset($attributes['class'])){
    $attributes['class'] = "is-invalid";
}

$attrString = "";

foreach($attributes as $attrKey => $attrValue) {
    $attrString .= "{$attrKey}=\"{$attrValue}\"";
}

@endphp
<div class="panel-login" style="padding-top:40px;">
<div class="form-group">

    <div class="card" style="background-color:white !important; border-radius:0px;">
        <div class="card-body" style="background-color:white !important; border-radius:0px;">


    @if(isset($label))

        <label style="padding-right:150px; display:inline; text-align:center; font-size:10pt; color:#68B42F; font-family:'Comfortaa';" for="{{ $name }}">{{ $label }} :</label>

    <input id="last_name" style="background-color:white !important; width:auto; margin:auto;" type="text" {!! $attrString !!} class="form-control" id="{{$name}}"/>

    @endif
    @if($errors->has($name))
        <div class="invalid-feedback">
            {{ $errors->first($name) }}
        </div>
    @endif


</div>
    </div>

</div>
</div>