@extends('layouts.app')
@section('content')
    <main class="container">
        <section>
            <div class="titlebar">
                <h1>Employee Management System</h1>
                <a href="{{ route('employee.create') }}" class="btn-link">Add employee</a>
            </div>
            <div class="table">
                <div class="table-filter">
                    <div>
                        <ul class="table-filter-list">
                            <li>
                                <p class="table-filter-link link-active">All</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-product-head">
                    <p>Id</p>
                    <p>Quantity</p>
                    <p>Name</p>
                    <p>Department</p>
                    <p>Gender</p>
                    <p>Action</p>
                </div>
                <div class="table-product-body">
                    @foreach ($employees as $employee)
                        <p><a href="{{ route('employee.details', $employee['id']) }}">{{ $employee['id'] }}</a></p>
                        <p>{{ $employee->id }}</p>
                        <p>{{ $employee->num }}</p>
                        <p>{{ $employee->name }}</p>
                        <p>{{ $employee->department }}</p>
                        <p>{{ $employee->gender }}</p>
                        <div>
                            <a href=" {{ route('employee.edit', $employee->id) }}" class="btn btn-success">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form method="POST" action="{{ route('employee.destroy', $employee->id) }}">
                                @method('detete')
                                @csrf
                                <button class="btn btn-danger" onclick="deleteConfirm(event)">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>

                        </div>
                    @endforeach
                </div>
                <div class="table-paginate">
                    <div class="pagination">
                        <a href="#" disabled>&laquo;</a>
                        <a class="active-page">1</a>
                        <a>2</a>
                        <a>3</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        window.deleteConfirm = function(e) {
            e.preventDefault();
            var form = e.target.form;
            Swal.fire({
                title: 'Do you want to detele it?'
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: #00000,
                cancelButtonCOlor: # fff,
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })

        }
    </script>
@endsection
