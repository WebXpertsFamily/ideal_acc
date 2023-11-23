<x-admin>
    @section('title')
        {{ 'Bank Registration' }}
    @endsection
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
                                    {{-- <ol class="breadcrumb hide-phone p-0 m-0">
                                        <li class="breadcrumb-item"><a href="#">Ideal Packages</a></li>
                                        {{-- <li class="breadcrumb-item active">Bank Registration</li>}
                                    </ol> --}}
                                </div>
                                {{-- <h4 class="page-title">Bank Registration</h4> --}}
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body bpv-form project-management donor-reg">
                                    <form action="{{ route('bank.save') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ isset($bank->id) ? $bank->id : ''  }}" autocomplete="off">
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <h6 class="light-dark">Bank Name<span style="color: red">*</span></h6>
                                                <input type="text" class="form-control" name="name" id="name"
                                                value="{{ old('name', !empty($bank->name) ? $bank->name : '') }}"placeholder="Enter bank name">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group button-items mb-0 text-right">

                                            <button type="submit"

                                            class="btn btn-primary waves-effect waves-light">Save</button>
                                            <a href="{{ route('bank.list') }}" class="btn btn-outline-danger waves-effect waves-light">Cancel</a>
                                            {{-- @if(!empty($permission) && $permission->insert_access == 1 || Auth::user()->is_admin == 1)
                                               @if(!isset($bank))
                                                        Save @else Update @endif
                                            @endif --}}
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>


                </div><!-- container -->


            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->
    </div>

</x-admin>
