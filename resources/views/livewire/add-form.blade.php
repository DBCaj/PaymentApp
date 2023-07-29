<div>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>Add Form</h1>
      </div>
      <div class="card-body">
        <form action="{{ route('user.add_auth') }}" method="POST">
          @csrf
          <div class="form-group">
            @if(session('success') !== null)
              <span style="color:green; background-color:lightgreen">{{ session('success') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="name">Name: </label>
            <input class="form-control form-control-sm" type="text" name="name" value="{{ old('name') }}" placeholder="Demy" autofocus required>
            @error('name')
              <span style="color:red">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="age">Age: </label>
            <input class="form-control form-control-sm" type="number" name="age" value="{{ old('age') }}" placeholder="29" required>
            @error('age')
              <span style="color:red">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <button type="reset" class="btn btn-danger">Clear</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
