@extends('Backmaster')

@section('content')

  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Job Post</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Job Post</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <h4 class="d-inline-block">Job Post List</h4>

            <div class="table-responsive mt-3">
              <table class="table table-bordered" id="sampleTable">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Job_Title</th>
                    <th>Job_Loation</th>
                    <th>Job_Region</th>
                    <th>Job_Type</th>
                    <th>Job_Description</th>
                    <th>Company_Name</th>
                    <th>Company_Description</th>
                    <th>Website</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=1; @endphp
                  @foreach($jobpost as $jobpost)
                  <tr>
                    <td> {{$i++}} </td>
                    <td> <img src="{{asset($job_photo->photo)}}" width="100"> </td>
                    <td> {{$jobpost->email}}</td>
                    <td> {{$jobpost->job_title}}</td>
                    <td> {{$jobpost->job_location}}</td>
                    <td> {{$jobpost->job_region}}</td>
                    <td> {{$jobpost->job_type}}</td>
                    <td> {{$jobpost->job_description}}</td>
                    <td> {{$jobpost->company_name}}</td>
                    <td> {{$jobpost->company_description}}</td>
                    <td> {{$jobpost->website}}</td>

                     <td>
                      <a href="{{route('jobpost.edit',$jobpost->id)}}" class="btn btn-primary btn-sm">Detail</a>
                      <form method="post" action="{{route('jobpost.destroy',$jobpost->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="btnsubmit" class="btn btn-danger btn-sm" value="Delete">
                      </form>
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
  </main>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('backend_assets/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_assets/js/plugins/dataTables.bootstrap.min.js')}}"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection
