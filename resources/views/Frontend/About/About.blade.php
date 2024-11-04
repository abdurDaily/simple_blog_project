@extends('Frontend.Layouts')
@section('frontend_contains')
@push('frontend_css')
    <style>
      
        /* #about_parent {
            margin-top: 110px;
            padding: 0 30px;
        }
        #about_parent .about-box h1{
            position: relative;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 35px;
        }
        #about_parent .about-box h1::before{
            content: '';
            position: absolute;
            background-color: #EBCD0E;
            width: 100px;
            height: 100px;
            z-index: -1;
            top: -32px;
            left: -29px;
        }
        #about_parent  .blob {
            width: 100%;
            height: 100%;
            object-fit: cover;
            background: #EBCD0E;
            border-radius: 50%;
            position: relative;
            animation: blob 7s infinite;
        }

        @keyframes blob {
            0% {
                border-radius: 42% 58% 60% 40% / 54% 47% 53% 46%;
            }
            33% {
                border-radius: 30% 70% 60% 40% / 60% 50% 50% 50%;
            }
            66% {
                border-radius: 60% 40% 30% 70% / 50% 50% 50% 50%;
            }
            100% {
                border-radius: 42% 58% 60% 40% / 54% 47% 53% 46%;
            }
        } */



        #about_me .header{
            background: #6a4ee9;
            text-align: center;
            padding: 50px 0;
            color: #fff;
        }
        #about_me .header h3{
            font-size: 2rem;
        }

        #about_me .img{
            display: flex;
            justify-content: center;
        }
        #about_me .img img{
            width: 70%;
        }
        #about_me .about_details ul {
            list-style-type: disc;
        }

        @media (max-width: 991.98px) { 
            #about_me .about_details{
                padding: 20px 30px;
            }
        }

    </style>
@endpush



    <section class="pt-5" id="about_me">
        <div class="header pt-5">
            <h3>About Me</h3>
        </div>
        

      <div class="container">
        <div class="row pt-5">
            <div class="col-lg-5 img">
                <img class="img-fluid" src="{{ $about_user->image }}" alt="">
            </div>

            <div class="col-lg-7 about_details">
                <h2 style="text-transform:capitalize;">{{ Str::limit($about_user->name, 30, '...') }}</h2>
                <span>{{ $about_user->designation }}</span>
                <p style="padding-top:20px;">{!! $about_user->about_author !!}</p>

                <h5 style="margin-top: 20px;">Social Link's</h5>
                <ul style="padding-left: 15px">
                    @forelse ($socialLink as $link)
                    <li><a href="{{ $link->social_link }}">{{ $link->social_name }}</a></li>
                        
                    @empty
                        <li>no data found!</li>
                    @endforelse
                </ul>

                {{-- <a style="display: inline-block; padding: 10px 30px; background:#EBCD0E; margin-top:20px;" href="">Download Cv</a> --}}
            </div>
        </div>
      </div>
    </section>



@endsection