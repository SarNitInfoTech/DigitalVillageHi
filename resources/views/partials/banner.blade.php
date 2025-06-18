<div class="wrapper banner-wrapper innerBanner">
    <img src="https://cdn.s3waas.gov.in/s385d8ce590ad8981ca2c8286f79f59954/uploads/2018/10/2018101028.jpg" alt="Banner Image">

    <div class="banner-title" style="position:absolute; top:20%; left:5%; color:white;">
        <h2>{{ $title ?? 'Page Title' }}</h2>
        <nav class="breadcrumb" style="font-size: 16px;">
            <a href="{{ url('/') }}" style="color:white;">Home</a> /
            <span style="color:white;">{{ $title ?? 'Current' }}</span>
        </nav>
    </div>
</div>
