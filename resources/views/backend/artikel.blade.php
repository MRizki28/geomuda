@extends('Layouts.Base')

@section('content')
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#BazarModal" id="#myBtn">
                    Tambah Data
                </button>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>

                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th style="width:200px ;">Aksi</th>
                        </tr>
                    </thead>
                    {{-- @php
                        $no = 1;

                    @endphp

                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->nama_menu }}</td>
                            <td>Rp. {{ number_format($d->harga) }}</td>
                            <td>{{ $d->gambar }}</td>
                            <td>{{ $d->description }}</td>
                            <td>
                                <a href="/bazar-edit/{{ $d->id }}" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>
                                <a href="{{ route('deleteData.bazar', $d->id) }}" class="btn btn-danger delete-confirm"><i
                                        class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach --}}

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="BazarModal" tabindex="-1" role="dialog" aria-labelledby="BazarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="BazarModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="formTambah" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class=" form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" placeholder="Input Here">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar" placeholder="Input Here">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Input Here">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" placeholder="Input Here"></textarea>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Create Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
     $(document).ready(function() {
    $.ajax({
        url: "{{ route('getData.artikel') }}",
        method: "GET",
        dataType: "json",
        success: function(data) {
            console.log(data);
            var tableBody = "";
            $.each(data, function(index, item) {
                tableBody += "<tr>";
                tableBody += "<td>" + (index + 1) + "</td>";
                tableBody += "<td>" + item.tanggal + "</td>";
                tableBody += "<td><img src='/uploads/artikel/img/" + item.gambar +
                    "' alt='" +
                    item.gambar + "' class='img-thumbnail' style='width: 200px'></td>";
                tableBody += "<td>" + item.judul + "</td>";
                tableBody += "<td>" + item.deskripsi + "</td>";
                tableBody += "<td>" +
                    "<button type='button' class='btn btn-primary edit-modal' data-toggle='modal' data-target='#EditModal' " +
                    "data-id='" + item.id + "' " +
                    "<i class='fa fa-edit'>Edit</i></button>" +
                    "<button type='button' class='btn btn-danger delete-confirm' data-id='" +
                    item.id + "'><i class='fa fa-trash'></i></button>" +
                    "</td>";

                tableBody += "</tr>";
            });
            $('#dataTable').DataTable().destroy();
            $("#dataTable tbody").empty();
            $("#dataTable tbody").append(tableBody);
            $('#dataTable').DataTable({
                "paging": true,
                "ordering": true,
                "searching": true
            });
        },
        error: function() {
            console.log("Failed to get data from server");
        }
    });
});


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //tambah data
        $(document).ready(function() {
            var formTambah = $('#formTambah');

            formTambah.on('submit', function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('createData.asrtikel') }}",
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        Swal.fire({
                            title: 'Success',
                            text: 'Data berhasil ditambakan',
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtontText: 'OK'
                        }).then(function() {
                            location.reload();
                        });
                    },
                    error: function(data) {
                        var errors = data.responseJSON.errors;
                        var errorMessage = "";

                        $.each(errors, function(key, value) {
                            errorMessage += value + "<br>";
                        });

                        Swal.fire({
                            title: 'Error',
                            html: errorMessage,
                            icon: "error",
                            timer: 5000,
                            showConfirmButton: true

                        });
                    }
                });
            });
        });
    </script>
@endsection
