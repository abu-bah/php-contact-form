<div class="contact-container mt-5">

    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success" id="contact-alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <form method="post" action="{{ action('ContactUsFormController@storeContactUsForm') }}">

        @csrf

        * = required fields
        <br><br>

        <div class="form-group">
            <label>Name*</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{ old('name') }}">

            <!-- Error -->
            @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Email*</label>
            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" value="{{ old('phone') }}">

            @if ($errors->has('phone'))
                <div class="error">
                    {{ $errors->first('phone') }}
                </div>
            @endif
        </div>

        <input type="submit" name="send" value="Submit" class="btn btn-default btn-block">
    </form>
</div>
