@extends('layouts.app')
@section('title-page')
Theory
@endsection
@section('content')
    <table class="table mt-3" id="table-data">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Coordinator</th>
                <th scope="col">Metting</th>
                <th scope="col">Date</th>
                <th scope="col">Link PPT</th>
            </tr>
        </thead>
        <tbody id="tbody-data"></tbody>
    </table>
@endsection
@section('script')
<script>
$(document).ready(function(){
    $.ajax({
        type:"GET",
        url: "http://localhost:8000/teori",
        async : true,
        dataType: 'json',

        success:function(data){
            let html = '';
            for(i=0; i< data.theory.length;i++){
                html +=`
                <tr>
                <td>${i + 1}</td>
                <td>${data.theory[i].coordinator}</td>
                <td>${data.theory[i].meeting}</td>
                <td>${data.theory[i].date}</td>
                <td>${data.theory[i].link}</td>

              </tr>
            `
            }
            $('#tbody-data').html(html)
            $('#table-data').dataTable({})
        }
    })
})
</script>
@endsection
