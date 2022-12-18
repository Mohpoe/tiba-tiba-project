@php
  use Carbon\Carbon;
  Carbon::setLocale('id');
@endphp

@extends('layouts.master')
@section('title', 'Kasir')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/libs/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')
  @component('components.breadcrumb', ['lk_1' => '/', 'lt_1' => 'Menu', 'title' => 'Data Pasien'])
  @endcomponent

  <div class="row">
    <div class="col">
      <div class="card card-h-100">
        <div class="card-header">
          <div class="dropdown float-end">
            <a class="text-muted dropdown-toggle font-size-16 lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
              <i class="bx bx-dots-horizontal-rounded"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#">Input Data Pasien</a>
              <a class="dropdown-item text-danger" href="#">Hapus Terpilih</a>
              <a class="dropdown-item text-danger" href="#">Hapus Semua</a>
            </div>
          </div>

          <div class="row">
            <div class="col p-0">
              <h4 class="card-title m-0">Data Pasien</h4>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table-nowrap table" id="tabelPasien">
              <thead class="table-light">
                <tr>
                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat/Tgl Lahir</th>
                  {{-- <th>Alamat</th> --}}
                  <th>Pilihan</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pasiens as $pasien)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->jenis_kelamin }}</td>
                    <td>{{ $pasien->tempat_lahir }}/{{ $pasien->tanggal_lahir }}</td>
                    {{-- <td>{{ $pasien->alamat }}</td> --}}
                    <td>
                      <button class="btn btn-primary btn-sm">Lihat</button>
                      <button class="btn btn-success btn-sm">Ubah</button>
                      <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}?ver={{ filemtime(public_path('assets/js/app.min.js')) }}"></script>
@endsection

@section('script-bottom')
  <script>
    $(document).ready(function() {
      $('#tabelPasien').DataTable({
        dom: "<'row'<'col-lg-4 col-sm-12 my-1'l><'col-lg-8 col-sm-12 my-1'f>>t<'row'<'col-lg-4 col-sm-12 my-1'i><'col-lg-8 col-sm-12 my-1'p>>r",
        "language": {
          "decimal": ",",
          "thousands": ".",
          "zeroRecords": "Tidak ada data!",
          "lengthMenu": "Lihat _MENU_ baris",
          "search": "Cari: ",
          "info": "_START_ s/d _END_ dari _TOTAL_",
          "infoEmpty": "",
          "paginate": {
            "next": "Maju",
            "previous": "Mundur",
            "first": "Awal",
            "last": "Akhir"
          }
        },
        responsive: true,
        autoWidth: false,
        "drawCallback": function() {
          $('.dataTables_paginate > .pagination').addClass('pagination-sm');
        }
      });
    });
  </script>

  @if (session()->has('pesanSukses'))
    <script>
      Toast.fire({
        icon: 'success',
        title: "{{ session('pesanSukses') ? session('pesanSukses') : 'Data berhasil tersimpan!' }}"
      })
    </script>
  @elseif (session()->has('pesanGagal'))
    <script>
      Toast.fire({
        icon: 'error',
        title: "{{ session('pesanGagal') ? session('pesanGagal') : 'Terjadi kesalahan!' }}"
      })
    </script>
  @endif
@endsection
