<script src="/admin-themes/js/bootstrap-notify.min.js"></script>



@if(Session::has('message'))

<script type="text/javascript">
    $.notify({
    	title: '<strong>Message: </strong>',
    	message: "{{ Session::get('message') }}"
    },{
    	type: 'info',
      delay: 3000,
      mouse_over: 'pause',
      newest_on_top: true,
      animate: {
    		enter: 'animated fadeInRight',
    		exit: 'animated fadeOutRight'
    	}
    });
</script>

    @php
      Session::forget('message');
    @endphp
  @endif



{{-- @if(count($errors)) --}}
@if($errors->any())
<script type="text/javascript">
  @foreach ($errors->all() as $error)
  $.notify({
    message: "{{ $error }}"
  },{
    type: 'warning',
    delay: 3000,
    mouse_over: 'pause',
    // newest_on_top: true,
    animate: {
      enter: 'animated fadeInRight',
      exit: 'animated fadeOutRight'
    }
  });
  @endforeach
</script>
@endif
