@php
$latest = \Illuminate\Support\Facades\DB::table('posts')->orderBy('id','desc')->limit(8)->get();
$popular = \Illuminate\Support\Facades\DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
$highest = \Illuminate\Support\Facades\DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();
@endphp


<div class="tab-header">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab"
                                                  data-toggle="tab" aria-expanded="false">
                @if(session()->get('language')== 'urdu')
                    تازہ ترین
                @else
                    Latest
                @endif
            </a>
        </li>
        <li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab"
                                   aria-expanded="true"> @if(session()->get('language')== 'urdu')
                    مقبول
                @else
                    Popular
                @endif</a></li>
        <li role="presentation"><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab"
                                   aria-expanded="true">@if(session()->get('language')== 'urdu')
                    اعلی ترین
                @else
                    Highest
                @endif</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content ">
        <div role="tabpanel" class="tab-pane in active" id="tab21">
            <div class="news-titletab">
                @foreach($latest as $row)
                <div class="news-title-02">
                    <h4 class="heading-03"><a href="{{$row->id}}">
                            @if(session()->get('language')== 'urdu')
                                {{$row->title_urdu}}
                            @else
                                {{$row->title_en}}
                            @endif</a>
                    </h4>
                </div>
                @endforeach

            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab22">
            <div class="news-titletab">
                @foreach($popular as $row)
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="{{$row->id}}">
                                @if(session()->get('language')== 'urdu')
                                    {{$row->title_urdu}}
                                @else
                                    {{$row->title_en}}
                                @endif</a>
                        </h4>
                    </div>
                @endforeach

            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab23">
            <div class="news-titletab">
                @foreach($highest as $row)
                    <div class="news-title-02">
                        <h4 class="heading-03"><a href="{{$row->id}}">
                                @if(session()->get('language')== 'urdu')
                                    {{$row->title_urdu}}
                                @else
                                    {{$row->title_en}}
                                @endif</a>
                        </h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


