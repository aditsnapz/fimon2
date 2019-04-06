@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Daftar User</h5>
            </div>
            <div class="ibox-content">
            <div>
                <button type="button" class="btn btn-outline btn-success dim"  data-placement="auto top" href="#modal-form" title="tambah" onclick="create()" data-toggle="modal"><i class="fa fa-plus"></i></button>
                <button type="button" class="btn btn-outline btn-info dim"  data-placement="auto top" title="refresh" onclick="refresh()" data-toggle="modal"><i class="fa fa-refresh"></i> </button>
            </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover main" >
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Nama</th>
                                <th>Hobi</th>
                                <th>Saldo</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;?>
                            @foreach($data as $d)
                            <tr>
                            
                                <td>{{ $no }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->hobi }}</td>
                                <td>{{ $d->saldo }}</td>
                                <td>
                                    <div class="center">
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#successModal<?=$no;?>"><i class="fa fa-check-circle"></i> Update </button>
                                        <a class="btn btn-danger btn-sm" href="userdelete/<?php echo $d->id; ?>"><i class="fa fa-remove" >Delete</i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var mode;
    var idupdate;
    var table;
    console.log('a');
    $(document).ready(function(){
       
        
        table = $('.main').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": false, //Feature control DataTables' server-side processing mode.
            "paging": true,
            "order": [], //Initial no order.
            "autoWidth": false,
            

            
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                    }
                }
            ]

        });
    });
</script>


@endsection