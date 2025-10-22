<x-vlte3.app>
    <x-slot name="title">Manajemen Pesan</x-slot>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manajemen Pesan</h1>
                    <p class="text-muted">Kelola pesan masuk dari pengunjung</p>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pesan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            @include('vlte3.pesan.partials.filter')
            @include('vlte3.pesan.partials.table')
        </div>
    </section>
    @include('vlte3.pesan.partials.modal-detail')
    @include('vlte3.pesan.partials.modal-delete')
    @include('vlte3.pesan.partials.scripts')
</x-vlte3.app>
