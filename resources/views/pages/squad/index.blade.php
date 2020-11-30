@extends('layouts.app')
@section('title-page')
    Squad
@endsection
@section('content')
    @if (session('alert'))
        <div class="alert alert-success" role="alert">
            <div class="iq-alert-text">{{ session('alert') }}</div>
        </div>
    @endif
    <div class="row">
        
        <div class="col-md-4">
            <div class="iq-card">
                <div class="iq-card-body">
                    <form action="{{ route('squad.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" id="data-id">
                            <label for="">Squad Name</label>
                            <input type="text" name="name" class="form-control" id="data-name" placeholder="Enter squad name">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn iq-bg-danger btn-cancel">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="iq-card">
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" >
                            <thead>
                                <th>No</th>
                                <th>Squad Name</th>
                                <th>Option</th>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @forelse ($squads as $squad)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $squad->name }}</td>
                                        <td>
                                            <form action="{{ route('squad.destroy', $squad->id) }}" id="form-delete-{{$squad->id}}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                            <button class="btn btn-warning btn-sm btn-edit" data-id="{{ $squad->id }}" data-name= "{{ $squad->name }}">Edit</button>
                                            <button class="btn btn-danger btn-sm" onclick="return deleteData({{$squad->id}})">Delete</button>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="3" style="text-align:center">Not available data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        btnEdit = document.querySelectorAll('.btn-edit');
        btnCancel = document.querySelector('.btn-cancel');
        
        for(i = 0; i < btnEdit.length; i++){
            btnEdit[i].addEventListener('click',function(){
                document.querySelector('#data-id').value = this.getAttribute('data-id')
                document.querySelector('#data-name').value = this.getAttribute('data-name')
            })
        }

        btnCancel.addEventListener('click', function(){
            document.querySelector('#data-id').value = ''
                document.querySelector('#data-name').value = ''
        })

        $(".alert").delay(2000).slideUp(200, function() {
            $(this).alert('close');
        });

        function deleteData(id){
            confirm('Are you sure you want to delete?')
            if(true){
                document.querySelector('#form-delete-'+id).submit();
            }       
        }
        
    </script>
@endsection