@extends('layouts.app')
@section('title-page')
Theory
@endsection
@section('content')
@if (session('alert'))
<div class="alert alert-success" role="alert">
    <div class="iq-alert-text">{{ session('alert') }}</div>
</div>
@endif
<div class="iq-card">
    <div class="iq-card-body">
        <form action="{{ route('theory.index') }}" method="get">
            <div class="row">
                <div class="col-md-4">
                    <select name="squad" id="" class="form-control">
                        <option value=""> Choose one</option>
                        @foreach ($squads as $squad)
                        <option value="{{ $squad->id }}">{{ $squad->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block">Filter</button>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('theory.index')}}" class="btn btn-success btn-block">Refresh</a>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="iq-card">
    <div class="iq-card-body">
        <div class="mb-5">
            <button type="button" class="btn btn-outline-success btn-sm float-right" data-toggle="modal"
                data-target="#modal-add">
                Add
            </button>
        </div>
        <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Coordinator</th>
                        <th>Meeting</th>
                        <th>Date</th>
                        <th>Link PPT</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @forelse ($theories as $theory)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $theory->coordinator }}</td>
                        <td>{{ $theory->meeting }}</td>
                        <td>{{ date('d M Y', strtotime($theory->date)) }}</td>
                        <td>{{ $theory->link }}</td>
                        <td>
                            <form action="{{ route('theory.destroy', $theory->id) }}" id="form-delete-{{$theory->id}}"
                                method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                            <button class="btn btn-warning btn-sm btn-edit" data-toggle="modal"
                                data-target="#modal-edit" onclick="renderForm({{$theory->id}})">Edit</button>
                            <button class="btn btn-danger btn-sm"
                                onclick="return deleteData({{$theory->id}})">Delete</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" style="text-align:center">Not available data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" style="background: #202442">
    <div class="modal-dialog" role="document">
        <form action="{{ route('theory.store') }}" id="form-modal" method="post">
            <div class="modal-content" style="background-color: #202442">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @csrf
                    <div class="form-group">
                        <label for="">Coordinator</label>
                        <input type="text" class="form-control" name="coordinator" placeholder="Enter meeting"
                            id="meeting">
                    </div>
                    <div class="form-group">
                        <label for="">Meeting</label>
                        <input type="text" class="form-control" name="meeting" placeholder="Enter meeting" id="meeting">
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" class="form-control" name="date" placeholder="Choose date" id='date'>
                    </div>
                    <div class="form-group">
                        <label for="">Squad</label>
                        <select name="squad_id" id="" class="form-control" id="squad_id">
                            <option value=""> Choose one</option>
                            @foreach ($squads as $squad)
                            <option value="{{ $squad->id }}">{{ $squad->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Link PPT</label>
                        <input type="text" class="form-control" name="link" placeholder="Enter meeting" id="meeting">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="return add()">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" style="background: #202442">
    <div class="modal-dialog" role="document">
        <form action="" id="form-modal-edit" method="POST">
            <div class="modal-content" style="background-color: #202442">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @csrf
                    <div class="container-edit"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
    const url = 'http://localhost:8000/theory/'

    async function getData(id) {
        let url1 = url + id + '/edit';
        try {
            let res = await fetch(url1,{headers:{mode:'no-cors'}});
            return await res.json();
        } catch (error) {
            console.log(error);
        }
    }

    async function renderForm(id) {
        console.log(id);
        let theory = await getData(id);
        let html = '';
        document.querySelector('#form-modal-edit').action = url + id;

        console.log(theory);

        let htmlSegment = `
                <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="">Coordinator</label>
                        <input type="text" class="form-control" value="${theory.theory.coordinator}" name="coordinator" placeholder="Enter meeting" id="meeting">
                    </div>
                    <div class="form-group">
                        <label for="">Meeting</label>
                        <input type="text" value="${theory.theory.meeting}" class="form-control" name="meeting" placeholder="Enter meeting" id="meeting">
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" value="${theory.theory.date}"  class="form-control" name="date" placeholder="Choose date" id='date'>
                    </div>
                    <div class="form-group">
                        <label for="">Squad</label>
                        <select name="squad_id" id="" class="form-control" id="squad_id">
                            <option value="">-- Choose one --</option>
                            @foreach ($squads as $squad)
                            <option value="{{ $squad->id }}" ${theory.theory.squad_id == {{$squad->id}} ? ' selected' : ''}>{{ $squad->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Link PPT</label>
                        <input type="text" class="form-control" value="${theory.theory.link}" name="link" placeholder="Enter meeting" id="meeting">
                    </div>
                `
        html += htmlSegment


        let container = document.querySelector('.container-edit');
        container.innerHTML = html
    }
 
    $(".alert").delay(2000).slideUp(200, function () {
        $(this).alert('close');
    });

    function deleteData(id) {
        confirm('Are you sure you want to delete?')
        if (true) {
            document.querySelector('#form-delete-' + id).submit();
        }
    }

    const checkSweetAlert = () => {
        swal("Hello World")
    }
    const add = () => {
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
        });
    }
</script>
@endsection
