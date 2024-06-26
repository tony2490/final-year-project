<!-- this form presents an application for an admin to update  -->
@csrf

<!-- store id into databse  -->
    <div class="row mb-3">
        <label for="id" class="col-md-4 col-form-label text-md-end"></label>

        <div class="col-md-6">
            <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" 
            value="{{ old('id') }} @isset($application) {{$application->id}} @endisset" >

            @error('id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>

<!-- this displays the role  -->
    <div class="row mb-3">
        <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

        <div class="col-md-6">
            <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" 
            value="{{ old('role') }} @isset($application) {{$application->role}} @endisset" readonly="readonly">

            @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>
<!-- this field displays the aston id  -->
    <div class="row mb-3">
        <label for="astonID" class="col-md-4 col-form-label text-md-end">{{ __(' Aston ID') }}</label>

        <div class="col-md-6">
            <input id="astonID" type="text" class="form-control @error('astonID') is-invalid @enderror" name="astonID" 
            value="{{ old('astonID') }} @isset($application) {{$application->astonID}} @endisset" readonly="readonly">

            @error('astonID')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>


    <!-- this field displays the name  -->
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
            value="{{ old('name') }} @isset($application) {{$application->name}} @endisset" readonly="readonly">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>

    <!-- this field displays the student type  -->
    <div class="row mb-3">
        <label for="studentType" class="col-md-4 col-form-label text-md-end">{{ __(' Student Type') }}</label>

        <div class="col-md-6">
            <input id="studentType" type="text" class="form-control @error('studentType') is-invalid @enderror" name="studentType" 
            value="{{ old('studentType') }} @isset($application) {{$application->studentType}} @endisset" readonly="readonly">

            @error('studentType')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>

    <!-- this field displays the course studied  -->

    <div class="row mb-3">
        <label for="courseStudied" class="col-md-4 col-form-label text-md-end">{{ __(' Course Studied') }}</label>

        <div class="col-md-6">
            <input id="courseStudied" type="text" class="form-control @error('courseStudied') is-invalid @enderror" name="courseStudied" 
            value="{{ old('courseStudied') }} @isset($application) {{$application->courseStudied}} @endisset" readonly="readonly">

            @error('courseStudied')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>


    <!-- this field displays the relevant Module Grades -->
    <div class="row mb-3">
        <label for="relevantModuleGrades" class="col-md-4 col-form-label text-md-end">{{ __('Relevant Module Grades') }}</label>

        <div class="col-md-6">
            <input id="relevantModuleGrades" type="text" class="form-control @error('relevantModuleGrades') is-invalid @enderror" name="relevantModuleGrades" 
            value="{{ old('relevantModuleGrades') }} @isset($application) {{$application->relevantModuleGrades}} @endisset" readonly="readonly">

            @error('relevantModuleGrades')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>

    <!-- this field displays the supporting Info -->
    <div class="row mb-3">
        <label for="supportingInfo" class="col-md-4 col-form-label text-md-end">{{ __('Supporting Information') }}</label>

        <div class="col-md-6">
            <input id="supportingInfo" type="text" class="form-control @error('relevantModuleGrades') is-invalid @enderror" name="supportingInfo" 
            value="{{ old('supportingInfo') }} @isset($application) {{$application->supportingInfo}} @endisset" readonly="readonly">

            @error('supportingInfo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>

    <!-- this field allows an application status to be updated  -->
    <div class="row mb-3">
        <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

        <div class="col-md-6">
            
        <select name="status"id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" 
            value="{{ old('status') }} @isset($application) {{$application->status}} @endisset" >
            
            <option value="Under Review"> Under Review </option>
            <option value="Accepted"> Accepted </option>
            <option value="Decline"> Decline </option>
        </select>

            @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>

<!-- this button stores the update -->


    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
        Update
            </button>

</form>