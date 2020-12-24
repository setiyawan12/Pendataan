@extends('layouts.app')
@section('title-page')
    Member
@endsection
@section('content')
<div class="iq-card">
    <div class="iq-card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody id="tbody-member"></tbody>
            </table>
        </div>
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
                    <!-- <div class="container-edit"></div> -->
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="hidden" name="id_member" id="id_member">
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <input type="text" name="message" id="message">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-update">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            getData();
            setTimeout(() => {
                let btnEdit = document.querySelectorAll('.btn-edit');

                for(i = 0; i < btnEdit.length; i++){
                    btnEdit[i].addEventListener('click', function(){
                        $('#modal-edit').modal('show')
                        const url = '{{env('APP_URL')}}'+'get-data-member-edit/'+ $(this).data('id');
                        // let url = "http://localhost:8000/get-data-member-edit/" + $(this).data('id')
                        $.ajax({
                            url : url,
                            type: 'GET',
                            dateType: 'JSON',
                            success: function(data){
                                console.log(data);
                                $('#id_member').val(data.data.id)
                                $('#name').val(data.data.name)
                                $('#email').val(data.data.email)
                                $('#subject').val(data.data.subject)
                                $('#message').val(data.data.message)
                            }
                        })
                    })
                }

                let btnHapus = document.querySelectorAll('.btn-hapus');

                
                for(i = 0; i < btnHapus.length; i++){
                    btnHapus[i].addEventListener('click', function(){
                        const url = '{{env('APP_URL')}}'+'data-member/delete/'+ $(this).data('id') ;
                        // let url = 'http://localhost:8000/data-member/delete/' + $(this).data('id')
                        swal({
                            title: "Are you sure?",
                            text: "Once deleted, you will not be able to recover this imaginary file!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    url : url,
                                    type: 'DELETE',
                                    dateType: 'JSON',
                                    data: {
                                        '_token' : '{{ csrf_token() }}',
                                        '_method': 'DELETE'
                                    },
                                    success: function(data){
                                        getData();
                                        swal("Hokeh Bosku");  
                                    },
                                    error: function(data){
                                        console.log(data.responseText);
                                    }
                                })
                            } else {
                                swal("Aman Bosku");
                            }
                        });
                        
                    })
                }

            }, 2000);
            
            
            function getData(){
                // let url = 'http://localhost:8000/get-data-member';
                const url = '{{env('APP_URL')}}'+'get-data-member';
                $.ajax({
                    url: url,
                    dataType: 'JSON',
                    type: 'GET',
                    async : true,
                    success: function(data) {
                        let html = ``;

                        for(i = 0; i < data.data.length; i++){
                            html += `
                            <tr>
                                <td>${data.data[i].name}</td>
                                <td>${data.data[i].email}</td>
                                <td>${data.data[i].subject}</td>
                                <td>${data.data[i].message}</td>
                                <td>
                                    <button class="btn btn-warning btn-edit" data-id="${data.data[i].id}"> Edit </button>
                                    <button class="btn btn-danger btn-hapus" data-id="${data.data[i].id}"> Hapus </button>
                                </td>
                            </tr>
                        `
                        }
                        $('#tbody-member').html(html);

                        //tempat inisialisasi dataTabel
                        // -> ng kono
                        //siap
                        //tempat inisialisasi dataTabel
                    }
                })
            }

            $('#form-modal-edit').on('click', '.btn-update', function(){
                let url = 'http://localhost:8000/data-member/update/'+$('#id_member').val();
                console.log(url);
                $.ajax({
                    url:url,
                    type: 'PUT',
                    dataType : 'JSON',
                    data: $('#form-modal-edit').serialize(),
                    success: function(data) {
                        $('#modal-edit').modal('hide');
                        alert('HOKEH');
                        console.log(data);
                        getData();
                    },
                    error: function(data){
                        console.log("Error" + data.responseText);
                    }
                })
            })

        });

        
    </script>
@endsection