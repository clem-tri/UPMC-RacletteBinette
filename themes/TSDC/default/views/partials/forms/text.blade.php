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
    @if(isset($label))
        <label style="padding-right:150px; display:block; text-align:center; font-size:10pt; color:white; font-family:'Comfortaa';" for="{{ $name }}">{{ $label }}</label>

    <input style="width:auto; margin:auto;" {!! $attrString !!} class="form-control" type="{{$name}}" id="{{$name}}"/>
    @endif
    @if($errors->has($name))
        <div class="invalid-feedback">
            {{ $errors->first($name) }}
        </div>
    @endif


</div>

</div>