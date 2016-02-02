<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('pageTitle') - Dashboard</title>
	<meta name="token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ elixir('css/admin.css') }}" />	
	@yield('header_styles')
	
</head>
<body>