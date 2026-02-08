@csrf
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Note Title</label>
  <input type="text" class="form-control" name="title" value="{{ old('title') }}">
  @error('title')
    <br>
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Note Content</label>
  <textarea class="form-control" name="content" rows="10">{{ old('content') }}</textarea>
  @error('content')
    <br>
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
</div>
<button type="submit" class="btn btn-primary">Create Note</button>
