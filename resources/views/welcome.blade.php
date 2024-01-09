<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('front/landingpage/landingpage.css')}} " />
  <link rel="stylesheet" href="{{asset('front/navbar/navbar.css')}}" />
  <link rel="stylesheet" href="{{asset('front/footer/footer.css')}}" />
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- navbar -->
  <!-- google font navbar -->
  <link href="https://fonts.googleapis.com/css2?family=Lora&family=Noto+Sans&display=swap" rel="stylesheet" />
  <!-- google font batur guide -->
  <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet" />

  <!-- card -->
  <!-- google font best bali activity -->
  <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&display=swap" rel="stylesheet" />
  <!-- google font see what you can... -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,500&display=swap" rel="stylesheet" />
  <!-- google font h1 card -->
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet" />
  <!-- google font p card -->
  <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet" />
  <!-- google font h5 card -->
  <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet" />

  <!-- reason -->
  <!-- google font reason -->
  <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant&display=swap" rel="stylesheet" />
  <!-- google font alasan2 -->
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet" />
  <!-- google font alsn1  -->
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet" />
  <!-- google font als1 -->
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&family=Frank+Ruhl+Libre&display=swap"
    rel="stylesheet" />

  <!-- Footer -->
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Ysabeau+Infant:wght@700&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Inter&family=Ysabeau+Infant:wght@700&display=swap"
    rel="stylesheet" />
</head>

<body>
        <!-- navbar -->
        @include('front.templates.navbar')
        {{-- navbar end --}}

        {{-- content --}}
        @include('front.landing-page.content')
        {{-- endc content --}}

        {{-- content --}}
        @include('front.templates.footer')
        {{-- endc content --}}
        <div>
            <!-- script -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
              integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
              integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
            </script>
            <script src="{{asset('front/landingpage/landingpage.js')}}"></script>
            <script src="{{asset('front/navbar/navbar.js')}}"></script>
          </div>
 </body>
  