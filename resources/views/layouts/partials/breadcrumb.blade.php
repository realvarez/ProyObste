@if(\Request::route()->getName() != 'login')
    <div class="col-xl-12">
        <div class="breadcrumb-holder">
            <h1 class="main-title float-left">Tables</h1>
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>			
@endif