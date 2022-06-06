@extends('layout.home')
@section('content')

<div class="row">
    <div class="col-md-12">


        <div class="card" style="width: 100%">

            <div class="card-header">
                <p style="text-align: left; font-size:30px; margin-top:25px">Elektronik Sistem Pengaduan Mahasiswa<br>
                    <a href="/forum/create" type="submit" class="btn btn-success text-white"
                        style="border-radius:50px; margin-bottom:25px">Yuk Tanya</a>
                </p>
                <div class="alert alert-warning" role="alert">
                    <strong><p class="text-center text-dark"> Halaman ini masih belum kompatibel dengan perangkat smartphone</p></strong>
                </div>
            </div>

            @foreach ($pertanyaan as $tanya)
            <div class="inner-main-body pl-4 pr-4 mt-3">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="media forum-item">
                            <a href="" data-toggle="collapse" data-target=".forum-content"><img
                                    src="{{$tanya->user->profile->getAvatar()}}" class="mr-3 rounded-circle" width="50"
                                    alt="User" /></a>
                            <div class="media-body">
                                <h6><a href="/forum/show/{{$tanya->id}}" class="text-bold">{{$tanya->judul}}</a></h6>
                                {{-- <p class="text-secondary">
                                    {!!$tanya->isi!!}
                                </p> --}}
                                <p class="text-muted"><a href="javascript:void(0)">Created </a> at <span
                                        class="text-secondary font-weight-bold">{{$tanya->created_at->diffForHumans()}}</span>
                                </p>
                            </div>
                            <div class="text-muted small text-center align-self-center">
                                Tags :
                                @foreach ($tanya->tags as $tag)
                                <button class="btn btn-primary btn-sm">{{$tag->tag_name ? $tag->tag_name:'No tags'
                                    }}</button>
                                @endforeach
                                <span><i class="far fa-comment ml-2"></i> {{$tanya->jawaban->count()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
@endsection