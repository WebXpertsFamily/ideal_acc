<x-admin>
    @section('title')
        {{ 'Bank' }}
    @endsection
      <!-- Begin page -->
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="page-content-wrapper ">
                    @if(session()->has('message'))
                        <div class="alert" style="background-color: #a9e8a8">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">Ideal Packages</a></li>
                                            <li class="breadcrumb-item active">List Of Banks</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">List Of Banks</h4>
                                </div>
                            </div>
                        </div>

            <!-- end page title end breadcrumb -->

                       <div class="form-group button-items mb-0 text-right">
                            <a href="{{ route('bank.create') }}" class="btn btn-primary waves-effect waves-light">Create Bank</a>
                        </div>
                        <br>



                         {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form action="{{ route('bank.create') }}" method="get" id="form-search">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <h6 class="light-dark w-100">Bank Name</h6>
                                                            <input type="text" id="name" name="name"
                                                                   class="form-control" placeholder="Account Name"
                                                                   value="{{ request()->input('name') }}">

                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- <div class="col-md-1">
                                                    <div class="form-group">
                                                            <span class="input-group-prepend" style="margin-top: 35px;">
                                                            <button type="submit" class="btn btn-primary" value="Search" id="search-button"><i
                                                                        class="fa fa-search"></i>&nbsp; Search</button>

                                                            </span>
                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                            <span class="input-group-prepend" style="margin-top: 35px">
                                                            <button type="submit" class="btn btn-primary" value="Search" id="clear-filter" style="margin-left: 10px">Submit</button>

                                                            </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <table class="table table-hover subject-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($banks as $bank)
                                    <a href="{{ route('bank.edit',['id'=>$bank->id]) }}">
                                        <tr id="row_{{$bank->id}}">
                                            <th scope="row">{{ $bank->name }}</th>
                                            <td>
                                                <a href="{{ route('bank.edit',['id'=>$bank->id]) }}" title="Edit"><i class="fa fa-edit"></i></a>

                                                {{-- @if(!empty($permission->edit_access) && $permission->edit_access == 1 || Auth::user()->is_admin == 1)

                                                @endif --}}
                                                {{-- @if(!empty($permission->delete_access) && $permission->delete_access == 1 || Auth::user()->is_admin == 1)


                                                @endif --}}
                                                {{-- <a href="{{ route('bank.delete') }}" class="btn btn-outline-danger waves-effect waves-light">Delete</a>
                                                <a href="{{route('bank.delete') }}" title="Delete"> <i class="fa fa-trash-o delete" data-id="{{ $bank->id }}"></i>Delete</a> --}}
                                            </td>
                                            <td>
                                                <a href="{{ route('bank.delete',['id'=>$bank->id]) }}" title="Delete"><i class="fa fa-trash-o" style="font-size:24px"></i></a>
                                            </td>
                                        </tr>
                                    </a>
                                @endforeach
                                </tbody>
                            </table>
                            <hr>

                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-end">
                                    {!! $banks->appends(request()->query())->links() !!}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <div class="card m-b-30">

                    </div>
                </div>
            </div>



        </div><!-- container -->


    </div> <!-- Page content Wrapper -->

    </div>
        </div>
    </div>
</x-admin>
