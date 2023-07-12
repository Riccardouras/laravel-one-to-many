<div class="form-group">
    <label for="type_id">Type</label>
    <select name="type_id" id="type_id" class="form-control">
        <option value="">Select Type</option>
        @foreach ($types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </select>
</div>