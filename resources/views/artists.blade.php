@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Artist</th>
                            <th>Albums</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artists as $artist)
                        <tr>
                            <th>{{ $artist->name }}</th>
                            <th>
                                <ul>
                                @foreach ($artist->albums as $album)
                                    <li>{{ $album->name }}</li>
                                @endforeach
                                </ul>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
