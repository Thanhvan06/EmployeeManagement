@extends('layouts.app')
@section('content')
<main class="container">
    <section>
        <form method="POST" action="{{route('employee.store')}}">
        @csrf
        <div class="titlebar">
            <h1>Register Employee</h1>
        </div>
        <div class="card">
           <div>
                <label>Quantity</label>
                <input type="text" name ="num">
                <hr>
                <label>Name</label>
                <input type="text" class="input" name="name" >
                <hr>
                <label>Department</label>
                <select name="department">
                    @foreach (json_decode('{"CEO":"CEO", "CTO":"CTO", "HR":"HR"}',true) as $value => $department)
                      <option value="{{ $value }}">{{ $department }}</option>
                    @endforeach
                  </select>
                <hr>
                <div class="form-group" style="display: flex">
                    <label>Gender</label>
                <input type="radio" name="gender" id="男" value="1"> <label for="男">男</label>
                <input type="radio" name="gender" id="女" value="0">  <label for="女">女</label>
            </div>
            </div>
        </div>
            <button>Return</button>
            <button>Save</button>
        </div>
    </form>
    </section>
    <section>
</main>
@endsection