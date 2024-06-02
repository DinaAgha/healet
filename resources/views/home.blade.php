@extends('layouts.main')

@section('content')

 <!-- shop section -->

 <section>
    @include('includes.shop')
  </section>

  <!-- end shop section -->

  <!-- about section -->

 <section>
    @include('includes.about')
  </section>

  <!-- end about section -->

  <!-- offer section -->

<section>
    @include('includes.offer')
</section>

  <!-- end offer section -->

  <!-- blog section -->

 <section>
    @include('includes.blog')
 </section>

  <!-- end blog section -->

  <!-- client section -->

  <section>
    @include('includes.client')
  </section>

  <!-- end client section -->

  <!-- info section -->
  <section>
    @include('includes.info')
  </section>

  <!-- end info_section -->

@endsection