<div class="container-xxl  justify-content-center  my-5">
    <div class=" row  gap-0 ">
        <h2 class="vision  mb-2 py-0">
            فريق العمل
        </h2>
        <!--~ section title  End-->
        @if ($teams->isNotEmpty())
            @foreach ( $teams as $team )
                <div class="col-lg-4  px-3 mb-3">
                    <div class="d-flex flex-column gap-2 justify-content-center align-items-center team-card ps-3">
                        <div class="d-flex align-items-center">
                            <img class="circle-img-team" src="{{$team->getFirstMediaUrl('team_image')}}" alt="">
                        </div>
                        <div class=" card-title d-flex flex-column">
                            <p class="card-title text-center mb-0">{{$team->name}}</p>
                            <p class="about-desc  mb-0 text-center mt-2">{{$team->job_title}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
