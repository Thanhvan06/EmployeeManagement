@extends('layouts.app')
@section('content')
<main class="container">
    <section>
        <form method="POST" action="{{route('employee.update', $employee->id )}}">
        @csrf
        @method('PUT')
        <div class="titlebar">
            <h1>Edit Employee</h1>
        </div>
        <div class="card">
           <div>
                <label>Quantity</label>
                <input type="text" name ="num" value="{{$employee->num}}">
                <hr>
                <label>Name</label>
                <input type="text" class="input" name="name" value="{{$employee->name}}">
                <hr>
                <label>Department</label>
                <select name="department">
                    @foreach (json_decode('{"CEO":"CEO", "CTO":"CTO", "HR":"HR"}',true) as $value => $department)
                    <option value="{{ $value }}" {{(isset($employee->department) && $employee->department == $value) ? 'selected': ''}} >{{ $department }}</option>
                    @endforeach
                  </select>
                <hr>
                <div class="form-group" style="display: flex">
                    <label>Gender</label>
                <input type="radio" name="gender" id="male" value="1" {{$employee->gender =='1' ? 'checked' : ' ' }}> <label for="male">男</label>
                <input type="radio" name="gender" id="female" value="0" {{$employee->gender =='0' ? 'checked' : ''}}>  <label for="female">女</label>
            </div>
            </div>
        </div>
            <input type="hidden" name="hidden_id" value="{{$employee->id}}">
            <button>Return</button>
            <button>Save</button>
        </div>
    </form>
    </section>
    <section>
</main>
@endsection