@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Registration Form </h1>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-4 bg-white rounded">
                    <form action="/submit-form" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name:</label>
                            <input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number:</label>
                            <input type="text" class="form-control" id="phone_number" placeholder="Enter phone No." name="phone_number" required minlength="10" maxlength="10">
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">Course:</label>
                            <select class="form-select" id="city" name="city" required>
                                <option value="">Select Course</option>
                                <option value="MBA">MBA</option>
                                <option value="MscIT">MscIT</option>
                                <option value="IMscIT">IMscIT</option>
                                <option value="MCA">MCA</option>
                                <option value="B.Tec">B.Tec</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
