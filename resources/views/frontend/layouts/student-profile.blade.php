@extends('frontend.index')
@section('content')
<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
<style>
body {
    background: #ddd;
}

.page-header {
    background: #00bcd4;
    margin: 0;
}

.profile-head {
    height: 400px;
    width: 100%;
    background-color: #00bcd4;
    float: left;
    position: relative;
}

.profile-head img {
    margin: 0 auto;
    border-radius: 5px;
    max-width: 100%;
    width: 100%;
}

.profile-head h5 {
    width: 100%;
    padding: 5px 5px 0px 5px;
    text-align: justify;
    font-weight: bold;
    color: #555;
    font-size: 25px;
    text-transform: capitalize;
    margin-bottom: 0;
}

.profile-head p {
    width: 100%;
    text-align: justify;
    padding: 0px 5px 5px 5px;
    color: #555;
    font-size: 17px;
    text-transform: capitalize;
    margin: 0;
}

.profile-head a {
    width: 100%;
    text-align: center;
    padding: 10px 5px;
    color: #555;
    font-size: 15px;
    text-transform: capitalize;
}

.profile-head ul {
    list-style: none;
    padding: 0;
}

.profile-head ul li {
    display: block;
    color: #555;
    padding: 5px;
    font-weight: 400;
    font-size: 15px;
}

.profile-head ul li:hover span {
    color: rgb(0, 4, 51);
}

.profile-head ul li span {
    color: #555;
    padding-right: 10px;
}

.profile-head ul li a {
    color: #555;
}

.profile-head h6 {
    width: 100%;
    text-align: center;
    font-weight: 100;
    color: #555;
    font-size: 15px;
    text-transform: uppercase;
    margin-bottom: 0;
}

.profiles {
    top: 300px;
}


/*media query*/

@media all and (max-width:768px) {
    a.menu {
        display: block !important;
        margin: 9px 2px;
        float: right;
        color: rgba(255, 102, 0, 0.98);
        border: 0px solid;
        background: none;
        font-size: 30px;
        width: 27px;
        position: relative;
        cursor: pointer;
    }
    a.menu:hover,
    a.menu:focus {
        color: rgb(0, 4, 51);
    }
    .drop_menu1 {
        display: block;
        visibility: visible;
        width: 250px;
        height: 1000px;
        padding: 5px 30px;
        position: absolute;
        right: 0 !important;
        background-color: #ffffff !important;
        transition: all ease 0.5s;
        border-top: 0px solid;
        cursor: pointer;
    }
}

@media all and (max-width:430px) {
    .profile-head ul li {
        font-size: 12px !important;
    }
    .bio-table>tbody>tr>td {
        font-size: 13px;
    }
}
</style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="profile-head">
                <div class="profiles col-xs-8 col-xs-push-2  col-sm-10 col-sm-push-1 thumbnail">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <span class="col-sm-12"><h5>Student Profile</h5></span>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <p></p>
                                <ul>

                                    <li><span>Name-{{$profiles->name}}</span></li>
                                    <li><span>Email-{{$profiles->email}}</span></li>
                                    <li><span>Mobile-{{$profiles->mobile}}</span></li>
                                    {{-- <li><span>Status-</span></li> --}}

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
