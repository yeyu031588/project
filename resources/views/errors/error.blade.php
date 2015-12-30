@if (isset($errors) && $errors->any())
  <div class="alert alert-danger">
    以下字段不正确<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif