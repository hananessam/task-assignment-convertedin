<div class="container">
    <div class="row justify-content-center">
        <div class="col-xlg-8">
            <div class="mb-3 d-flex justify-content-between align-atems-center">
                <h3>
                    {{ __('Statistics') }}
                </h3>

                <a href="{{ route('show-tasks') }}" class="btn btn-success">
                    {{ __('Show tasks') }}
                </a>
            </div>
            <div class="card">
                <div class="card-body">
                    @if ($statistics->count())
                        <div>
                            <table class="responsive table">
                                <thead>
                                    <tr class="text-capitalize">
                                        <th>{{ __('user') }}</th>
                                        <th>{{ __('tasks count') }}</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($statistics as $statistic)
                                        <tr>
                                            <td>{{ $statistic->user?->name }}</td>
                                            <td>{{ $statistic->tasks_count }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-light text-center" role="alert">
                            {{ __('No data') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
