<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{url("/images/favicon-glue.png")}}">
    <title>GLUE - GenBI Line Up And Experience</title>
    <!-- Bootstrap core CSS -->
    <!-- <link href="/css/bootstrap.css" rel="stylesheet"> -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/shortcodes.css" rel="stylesheet">
    <link href="/css/style-wp.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/custom-style.css" rel="stylesheet">

    <!--Beyond styles-->
    <link href="/css/beyond.min.css" rel="stylesheet" />
    <link href="/css/demo.min.css" rel="stylesheet" />
    <!-- <link href="/css/animate.min.css" rel="stylesheet" /> -->
    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/js/skins.min.js"></script>
    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
    <!-- only for demo -->
    <!-- <link href="/css/demo-settings.css" rel="stylesheet"> -->
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
	$(document).ready(function() {
	    $('#example2').DataTable();} );
    </script>
</head>
<body>
<div class="boxed active">
    @include('layouts.topbar')
    @include('layouts.mainmenu')

    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ot-module">

                        <!-- classic grid posts section -->
                        <h4 class="section-title"><span>Berita Acara / Kegiatan GenBI</span>List of GenBI Event</h4>
                        
                            <div class="row">    		
                                <div class="col-md-12">    		
                                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Tanggal</th>
                                                <th>Waktu</th>
                                                <th>Lokasi</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($events as $key => $event)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td><a href="/news/{{$event->idevent}}">{{$event->event_judul}}</a></td>
                                                <td>{{$event->event_tanggal}}</td>
                                                <td>{{$event->event_waktu}}</td>
                                                <td>{{$event->event_lokasi}}</td>
                                                <td><a href="/edit_news/{{$event->idevent}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                                                <td><a href="/delete_news/{{$event->idevent}}" onclick="return confirm('Yakin ingin hapus member ini?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</div>

<!-- <script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script> -->
<!-- <script type="text/javascript" src="/js/jquery-latest.min.js"></script> -->
<!-- <script type="text/javascript" src="/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="js/demo-settings.js"></script> -->
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="/js/themescripts.js"></script>
</body>
</html>