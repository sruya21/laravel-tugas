@extends('layout.master')
@section('content')

<!-- Profile Start -->
<div class="container">
    <div class="row mt-5">
        <div class="col-sm">
            <div class="jumbotron">
            <div class="card mb-3">
                <h3 class="card-header">Profile</h3>
                <div class="card-body">
                    <h5 class="card-title"><strong>Surya Candra Dwi Ananta</strong></h5>
                    <h6 class="card-subtitle text-muted">Junior Developer</h6>
                </div>
                <img src="/img/aku.jpg" class="d-block user-select-none" width="100%" height="100%">
                </img>
                <div class="card-body">
                    <p class="card-text">Mimpimu adalah mimpiku.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dont forget to visit my :</li>
                    <li class="list-group-item"><a href="github.com/sruya21">Github</a></li>
                    <li class="list-group-item"><a href="facebook.com">Facebook</a></li>
                    <li class="list-group-item"><a href="instagram/iniitusuryaaaa">Instagram</a></li>
                </ul>
                <div class="card-body">
                </div>
                </div>
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><strong>Impianku</strong></h4>
                    <p class="card-text">Pengen keluar negeri.</p>
                    <a href="#" class="card-link">Link</a>
                    <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
</div>

<!-- Profile End Here-->

<div class="col-xl-8">
    <div class="jumbotron">
         <div class="list-group">
                <div class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                    <h1 class="mb-1">My Programming Skill</h1>
                    </div>
                </div>
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <strong>PHP</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
                        </div>
                    <strong>HTML</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 69%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">69%</div>
                        </div>
                    <strong>CSS</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    <strong>JavaScript</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">5%</div>
                        </div>
                    <strong>Python</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">5%</div>
                        </div>
                    <strong>C++</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">5%</div>
                        </div>
                </div>
         </div>
            <div class="list-group mt-5">
                <div class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                    <h1 class="mb-1">My Framework and Others Skill</h1>
                </div>
                </div>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <strong>Laravel</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 14%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">14%</div>
                        </div>
                    <strong>Vue</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">5%</div>
                        </div>
                    <strong>Bootstrap</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    <strong>Tailwind</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">5%</div>
                        </div>
                    <strong>Wordpress</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
            </div>
            </div>
            <div class="list-group mt-5">
                <div class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                    <h1 class="mb-1">My Project</h1>
                </div>
                </div>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <strong>All my project goes here</div>
            </div>
            </div>
    </div>
</div>
@stop
