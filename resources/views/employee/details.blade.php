@extends('layouts.app')
@section('content')
    <main class="container">
        <section>
            <div class="container">
                <h2 class="text-center">Employee Details</h2>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>{{ $employee->id }}</th>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <th>{{ $employee->num }}</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>{{ $employee->name }}</th>
                    </tr>
                    <tr>
                        <th>Department</th>
                        <th>{{ $employee->department }}</th>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <th>{{ $employee->gender }}</th>
                    </tr>
                </table>
                <a href="{{ route('employee.index') }}">Return</a>
            </div>
        </section>
    </main>
@endsection
