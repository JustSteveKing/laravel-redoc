<!DOCTYPE html>
<html>
  <head>
    <title>ReDoc</title>
    <!-- needed for adaptive design -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Roboto:300,400,700" rel="stylesheet">

    <!--
    ReDoc doesn't change outer page styles
    -->
    <style>
      body {
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <redoc
        spec-url='{{ config('redoc.openapi.path') }}'
        disable-search="{{ config('redoc.config.search') }}"
        hide-hostname="{{ config('redoc.config.hostname') }}"
        hide-loading="{{ config('redoc.config.loading') }}"
        menu-toggle="{{ config('redoc.config.menu') }}"
        native-scrollbars="{{ config('redoc.config.scrollbars') }}"
        untrusted-spec="{{ config('redoc.config.trust') }}"
    ></redoc>
    
    <script src="https://cdn.jsdelivr.net/npm/redoc@next/bundles/redoc.standalone.js"> </script>
  </body>
</html>
