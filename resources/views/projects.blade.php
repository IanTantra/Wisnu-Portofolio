@extends('layout')

@section('container')


<div class="px-1 py-5 my-5 text-center">
    {{-- <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
    <h1 class="display-5 fw-bold text-body-emphasis">My Projects</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Welcome to the Projects section of my portfolio! Here, you'll find a diverse collection of work that showcases my skills and creativity. I have had the opportunity to contribute to both personal and team-driven projects, each offering unique challenges and valuable experiences.
    </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Personal Project</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Team Project</button>
      </div>
    </div>
  </div>


<div class="container mb-5">
<div class="px-1 mb-5 text-center">

    <h1 class="display-5 fw-bold text-body-emphasis">Personal Projects</h1>

    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($projects as $project)
        @if ($project->category === 'personal')
        <div class="col">
            <div class="card">
              <img src="img/{{ $project->image }}" class="card-img-top"
                alt="" />
              <div class="card-body">
                <h5 class="card-title">{{ $project->name }}</h5>
                <p class="card-text">
                  {{ $project->synopsis }}
                </p>
                <a href="/project/{{ $project->key }}" class="card-link">More....</a>
              </div>
              
            </div>
          </div>
        @endif
        
        @endforeach
        

        
      </div>
    </div>

{{-- <div class="container" >
    <div class="row">

        <div class="px-1 mb-5 text-center">

        <h1 class="display-5 fw-bold text-body-emphasis">Personal Projects</h1>

        </div>


        <div class="card-deck">
@foreach ($projects as $project)
    

    @if ($project->category === 'personal')


    
        <div class="card-columns" style="width: 22rem">
          <img class="card-img-top" src="/img/{{ $project->image }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $project->name }}</h5>
            <p class="card-text">{{ $project->synopsis}}</p>
            <a href="/project/{{$project->key}}" class="btn btn-primary">View</a>
            
          </div>
        </div>

    @endif


   
      


    
@endforeach
</div>
</div>
</div> --}}


{{-- <div class="container" >
    <div class="row">

        <div class="px-1 mb-5 text-center">

        <h1 class="display-5 fw-bold text-body-emphasis">Team Projects</h1>

        </div>


        <div class="card-deck">
@foreach ($projects as $project)
    

    @if ($project->category === 'team')


    
        <div class="card" style="width: 22rem">
          <img class="card-img-top" src="/img/{{ $project->image }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $project->name }}</h5>
            <p class="card-text">{{ $project->synopsis}}</p>
            <a href="/project/{{$project->key}}" class="btn btn-primary">View</a>
            
          </div>
        </div>

    @endif


   
      


    
@endforeach
</div>
</div>
</div> --}}
<div class="container mb-5">
<div class="px-1 mb-5 text-center">

    <h1 class="display-5 fw-bold text-body-emphasis">Team Projects</h1>

    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($projects as $project)
        @if ($project->category === 'team')
        <div class="col">
            <div class="card">
              <img src="img/{{ $project->image }}" class="card-img-top"
                alt="" />
              <div class="card-body">
                <h5 class="card-title">{{ $project->name }}</h5>
                <p class="card-text">
                  {{ $project->synopsis }}
                </p>
                <a href="/project/{{ $project->key }}" class="card-link">More....</a>
              </div>
            </div>
          </div>
        @endif
        
        @endforeach
        

        
      </div>
    </div>

    
@endsection