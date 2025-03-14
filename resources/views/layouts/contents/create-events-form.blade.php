<form method="post" action="{{ route('events.store') }}">
    @csrf
    @method('post')
    <div class="row g-3">

        <div class="row g-3">
            <div class="row g-3">
                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Event Name -->
        <div class="col-sm-12 mb-2">
            <label for="name" class="form-label">Event Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="form-control">
        </div>

        <!-- Event Location -->
        <div class="col-sm-12 mb-2">
            <label for="location" class="form-label">Event Location</label>
            <input type="text" name="location" id="location" value="{{ old('location') }}" required class="form-control">
        </div>

        <!-- Start and End Time -->
        <div class="col-sm-4 mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" value="{{ old('date', now()->format('Y-m-d')) }}" required class="form-control">
        </div>
        <div class="col-sm-4 mb-3">
            <label for="start_time" class="form-label">Start Time</label>
            <input type="time" name="start_time" id="start_time" value="{{ old('start_time', now()->format('H:i')) }}" required class="form-control">
        </div>
        <div class="col-sm-4 mb-3">
            <label for="end_time" class="form-label">End Time</label>
            <input type="time" name="end_time" id="end_time" value="{{ old('end_time', now()->addHour()->format('H:i')) }}" required class="form-control">
        </div>

        <!-- Status -->
        <div class="col-sm-12 mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="Open">Open</option>
                <option value="Closed">Closed</option>
            </select>
            
        </div>

        <!-- Description -->
        <div class="col-sm-12 mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4" style="resize: none; max-height: 150px;" required></textarea>
        </div>

        <!-- Requirement -->
        <div class="col-sm-12 mb-3">
            <input type="hidden" name="requirement" value="Not Required">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="requireCheckbox" name="requirement" value="Required">
                <label class="form-check-label" for="requireCheckbox">Set as Required</label><p class="text-muted">Students must attend.</p>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-sm-12 mb-3 mt-2">
            <button class="btn btn-dark w-100" type="submit">Add Event</button>
        </div>
    </div>
</form>