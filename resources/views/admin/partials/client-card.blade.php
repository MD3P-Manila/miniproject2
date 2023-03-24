<div class="card mt-3 client-card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3 col-md-2">
                @if ($client->profile_image)
                    <img src="{{ Storage::url($client->profile_image) }}" alt="">
                @else
                    <img src="/images/user.png" style="max-width: 100%; max-height: 100px;" alt="">
                @endif
            </div>
            <div class="col-sm-6 col-md-8">
                <h5>{{ $client->name }}</h5>
                <ul class="list-style-none">
                    <li><strong>Email:</strong> {{ $client->email}}</li>
                    <li><strong>Date Added:</strong> {{ $client->pretty_created }}</li>
                </ul>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="dropdown d-block">
                    <button class="btn btn-outline-secondary btn-block btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a href="{{ route('admin.clients.dashboard', ['client' => $client->id]) }}" class="dropdown-item">Prospect Dashboard</a>
                        <a class="dropdown-item" href="{{ route('admin.clients.edit', ['client' => $client->id]) }}">Edit Prospect</a>
                        <
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>