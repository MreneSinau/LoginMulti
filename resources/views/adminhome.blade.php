@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-success" role="alert">
                        <P>Anda Login Sebagai ADMIN</P>
                    </div>
                    Anda berhasil Login!
                    <br>
                    <br>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th width="5">No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
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
