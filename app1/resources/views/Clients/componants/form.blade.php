@csrf
<div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ @old('name', $client->name ?? '' ) }}"
        aria-describedby="nameHelp">
    @error('name')
        <div id="nameHelp" class="form-text alert alert-danger">{{ $message }}</div>
    @enderror

</div>
<div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" name="email" value="{{ @old('email', $client->email ?? '') }}" class="form-control"
        id="email">
    @error('email')
        <div id="nameHelp" class="form-text alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="phone" class="form-label">phone</label>
    <input type="text" name="phone" value="{{ @old('phone', $client->phone ??  '') }}" class="form-control"
        id="phone">
    @error('phone')
        <div id="nameHelp" class="form-text alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
