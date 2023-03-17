@extends('layouts.master')

@section('title', 'Data Management View')

@section('breadcrumb-title', 'Data Management View')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Data Management</li>
    <li class="breadcrumb-item active">View</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Data Management</h4>
                        <a href="{{route('data_uploadings.index')}}"
                           class="btn btn-primary pull-right">
                            <i class="fa fa-arrow-left">
                               Back to Index</i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div>
                            <tr>
                                <td><h5>
                                        @if($data_uploading->sub_menu_id == null)
                                            Menu
                                @else
                                    Submenu
                                    @endif</h5>
                                    <p>
                                        @if($data_uploading->sub_menu_id == null)
                                            {{$data_uploading->module->name}}
                                @else
                                    {{$data_uploading->sub_menu->name}}
                                    @endif
                                    </p></td>
                                <br>
                                <td><h5>Title</h5>  <p>{{ $data_uploading->title }}</p></td>
                                <br>
                                <td><h5>Author</h5>  <p>{{ $data_uploading->author }}</p></td>
                                <br>
                                <td><h5>Hyperlink</h5>  <a href="{!! $data_uploading->hyperlink !!}">{!! $data_uploading->hyperlink !!}</a></td>
                                <br>
                                <td><h5>Videolinks</h5>

                                    @if($data_uploading->videolinks == null)
                                        No Video Links
                                    @else
                                        @foreach(explode(",",$data_uploading->videolinks) as $link)
                                            <div class="mb-2">
                                                <iframe height="100%" width="50%" controls autoplay muted  src="{{$link."/embed"}}"></iframe>
                                            </div>
                                        @endforeach
                                    @endif
                                </td>
                                <br>
                                <td><h5>Ppts</h5>
                                    @if($data_uploading->ppts == null)
                                        No PPts
                                    @else
                                        @foreach($data_uploading->ppts as $ppt)
                                            <div class="mb-2">
                                                <iframe height="100%" width="50%"  src="{{asset('storage/'.$ppt)}}"></iframe>
                                            </div>
                                        @endforeach
                                    @endif
                                </td>
                                <br>
                                <td><h5>Pdfs</h5>
                                    @if($data_uploading->pdfs == null)
                                        No Pdfs
                                    @else
                                        @foreach($data_uploading->pdfs as $pdf)
                                            <div class="mb-2">
                                                <iframe height="100%" width="50%" frameborder="0" allowfullscreen="" src="{{asset('storage/'.$pdf)}}"></iframe>
                                            </div>
                                        @endforeach
                                    @endif
                                </td>
                                <br>
                                <td><h5>Audios</h5>

                                    @if($data_uploading->audios == null)
                                        No Audios
                                    @else
                                        @foreach($data_uploading->audios as $audio)
                                            <div class="mb-2">
                                                <audio controls height="100px" width="130px" frameborder="0" allowfullscreen="" src="{{asset('storage/'.$audio)}}">
                                                </audio>
                                            </div>
                                        @endforeach
                                    @endif
                                </td>

                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
