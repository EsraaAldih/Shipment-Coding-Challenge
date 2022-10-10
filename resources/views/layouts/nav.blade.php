<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <nav class="main-navigation bg-light mb-1 px-2 ">
        <div class="navbar-header animated fadeInUp">
            <a class="navbar-brand" href="{{route('home')}}"> <i class="bi bi-truck font-large-2 float-left"></i>S M S</a>
        </div>
        <ul class="nav-list text-primary">
            <li class="nav-list-item">
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-list-item">
                <a href="{{ route('shipments') }}" class="nav-link">Shipments</a>
            </li>
            <li class="nav-list-item">
                <a href="{{ route('shipments.create') }}" class="nav-link">Create Shipment</a>
                
            </li>
            <li class="nav-list-item">
                <a href="{{ route('journals.create') }}" class="nav-link">Create Journal</a>
            </li>
            <li class="nav-list-item">
                <a href="{{ route('journals') }}" class="nav-link">Journals</a>
            </li>

        </ul>

    </nav>