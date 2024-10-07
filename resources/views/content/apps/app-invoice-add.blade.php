@extends('layouts/layoutMaster')

@section('title', 'Add - Invoice')

@section('vendor-style')
@vite('resources/assets/vendor/libs/flatpickr/flatpickr.scss')
@endsection


@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js'
])
@endsection


@section('content')


  <div class="">
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="datatables-projects table border-top">
          <thead>
            <tr>
           <th>Employee Id</th>
              <th>Employee Name</th>
              <th>Employee Name</th>
              <th>Shift Start</th>
              <th>Shift end</th>
              <th>Shift date</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>


@endsection
