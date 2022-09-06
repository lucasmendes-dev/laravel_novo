@if($errors->any())
  
  @foreach ($errors->all() as $error)
      <ul class="error">
        <li>{{ $error }}</li>
      </ul>
  @endforeach    
@endif