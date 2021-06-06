<?php
use Illuminate\Support\Facades\DB;
?>

<!-- notice-start -->
@php
    $notice=\Illuminate\Support\Facades\DB::table('notice')->first()
@endphp
@if($notice->status == 1)
    <section>
        <div class="container-fluid">
            <div class="row scroll">
                <div class="col-md-2 col-sm-3 scroll_01 ">
                    Breaking News :
                </div>
                <div class="col-md-10 col-sm-9 scroll_02">
                    <marquee>{!! $notice->notice !!}</marquee>
                </div>
            </div>
        </div>
    </section>
@endif
