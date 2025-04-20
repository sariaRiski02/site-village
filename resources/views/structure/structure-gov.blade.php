@extends('layouts.structure')

@section('main')
<div class="flex justify-center">
    <button id="download-btn" class="mt-4 px-4 py-2 bg-[#071952] cursor-pointer text-white rounded">Unduh PNG</button>
</div>
<div id="chart-container" class="h-screen px-5"></div>

@endsection

@push('script')
    <script>
        const tree = @json($tree);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="{{ asset('js/structure.js') }}"></script>
@endpush

