<div class="container">
    <div class="row justify-content-center">
        <div class="col-xlg-8">
            <div class="mb-3 d-flex justify-content-between align-atems-center">
                <h3>
                    {{ __('Add task') }}
                </h3>
            </div>

            <div>
                <div class="card my-4">
                    <div class="card-body px-0 pb-2 px-3">
                        <form wire:submit.prevent='create'>
                            <div class="row">
                                <!-- assigned by -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Assigned by</label>
                                    <select wire:model.lazy="assigned_by" class="form-select">
                                        <option value="0" disabled>Select Admin</option>
                                        @foreach($admins as $admin)
                                            <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('assigned_by')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <!-- title -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Title</label>
                                    <input wire:model.lazy="title" type="text" class="form-control" placeholder="Lorem ipsum dolar">
                                    @error('title')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <!-- description -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Description</label>
                                    <textarea wire:model.lazy="description" class="form-control" rows="10">
                                    </textarea>
                                    @error('description')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                
                                <!-- assigned to -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Assigned to</label>
                                    <select wire:model.lazy="assigned_to" class="form-select">
                                        <option value="0" disabled>Select User</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('assigned_to')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
