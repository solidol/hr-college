<div class="top-5 start-50 position-fixed" style="z-index: 11">

    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    @if (session()->has('message'))
    <div class="alert alert-success">
        <strong>{{ session('message') }}</strong>
    </div>
    @endif

    @if (isset($success))
    <div class="alert alert-success">
        <strong>{{ $success }}</strong>
    </div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success">
        <strong>{{ session('success') }}</strong>
    </div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger">
        <strong>{{ session('error') }}</strong>
    </div>
    @endif

    @if (session()->has('warning'))
    <div class="alert alert-warning">
        <strong>{{ session('warning') }}</strong>
    </div>
    @endif

    @if (isset($messages)&&count($messages)>0)
    <div class="alert alert-danger">
        @foreach ($messages as $mesItem)
        <div class="mb-3 mt-3 p-2 border border-2 border-white rounded-2">
            <strong class="text-danger fs-5">{{$mesItem->content}}</strong>
        </div>
        @endforeach
    </div>
    @endif
</div>
<script type="module">
    $(document).ready(function() {
        $(".alert").fadeTo(5000, 500).slideUp(500, function() {
            $(".alert").slideUp(500);
        });
    });
</script>