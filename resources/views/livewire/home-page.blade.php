
 
 <div class="col-xxl-6 col-md-6 mx-auto">
        <div class="card mb-0 border-0 shadow-none mb-0">
            <div class="card-body p-sm-5 m-lg-4">
                <div class="text-center mt-5">
                    <h5 class="fs-3xl">Welcome Back</h5>
                    <p class="text-muted">Please choose application to continue.</p>
                </div>
                <div class="p-2 mt-5">

                        <div class="mb-3">
                            <div class="position-relative ">
                                <x-select-input modelName="type" label="" model="name">
                                    <option value="asset">Asset Monitoring System</option>
                                    <option value="facility">Facility Management System</option>
                                    <option value="employees">Employees Management System</option>
                                    <option value="reservation">Meeting Reservation System</option>
                                    <option value="probation">Post Probation Evaluation System</option>
                                    <option value="safety">HSE System</option>
                                </x-select-input>
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="mt-4">
                            <a class="btn btn-primary w-100" href="#" wire:click.prevent="submit">Submit</a>
                        </div>


                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div>

