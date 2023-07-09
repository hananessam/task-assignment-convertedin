<div class="container">
    <div class="row justify-content-center">
        <div class="col-xlg-8">
            <div class="fs-3 mb-3">{{ __('Tasks') }}</div>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($tasks->count())
                        <div>
                            <table class="responsive table">
                                <thead>
                                    <tr class="text-capitalize">
                                        <th>{{ __('title') }}</th>
                                        <th>{{ __('description') }}</th>
                                        <th>{{ __('assigned name') }}</th>
                                        <th>{{ __('admin name') }}</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($tasks as $task)
                                        <tr>
                                            <td>{{ $task->title }}</td>
                                            <td>{{ $task->description }}</td>
                                            <td>{{ $task->assigned_to?->name }}</td>
                                            <td>{{ $task->assigned_by?->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-end align-items-center">
                                {{ $tasks->links() }}
                            </div>
                        </div>
                    @else
                        <div class="alert alert-light text-center" role="alert">
                            {{ __('No tasks') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
